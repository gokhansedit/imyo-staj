#include <Arduino.h>
#include <WiFi.h>
#include <SPI.h>
#include <FS.h>
#include "SPIFFS.h" // ESP32 only
#include <WiFiClientSecure.h>
#include <EEPROM.h>
#include <Ethernet.h>
#include "buzzer.h"
#include "rgb.h"
#include "response.h"
#include "eeprom_test.h"
#include "screen_test.h"
#include "Zebra.h"
#include "processEpcData.h"
#include "buttonCheck.h"

#define EEPROM_SIZE 64
#define TEST_ADDRESS 0
#define MAX_WORDS 10
#define ETH_RST 25
TFT_eSPI tft = TFT_eSPI(); // TFT ekranı başlatmak için

String prompt;
String words[MAX_WORDS];
uint8_t fullEpcString[maxV] = {0}; // Gelen veri uzun olduğu için diziyi genişlettim
uint16_t indexCounter = 0;
uint8_t epc_value[16];

int wordCount = 0;
int epc;
void ethernetReset(const uint8_t resetPin)
{
  pinMode(resetPin, OUTPUT);
  digitalWrite(resetPin, HIGH);
  delay(50);
  digitalWrite(resetPin, LOW);
  delay(50);
  digitalWrite(resetPin, HIGH);
  delay(50);
}
void setup()
{
  SPI.begin();
  Serial.begin(115200);
  RE40.begin(921600, SERIAL_8N1, rxPin, txPin);
  setupLED();
  ethernetReset(ETH_RST);
  delay(20);
  Ethernet.init(26);

  pinMode(buzzerPin, OUTPUT);
  pinMode(buttonPin, INPUT);
  tft.fillScreen(TFT_WHITE);

  Serial.println("KOMUTLAR");
  Serial.println("------------");
  Serial.println("Led       : test -led r/g/b");
  Serial.println("Buzzer    : test -buzzer 1");
  Serial.println("Button    : test -button");
  Serial.println("EEPROM    : test -eeprom");
  Serial.println("Ethernet  : test -ethernet");
  Serial.println("WIFI      : test -wifi");
  Serial.println("Ekran     : test -ekran");
  Serial.println("Sonuclar  : test -sonuc");
  uint8_t AAA = 10;
  Zebra_Reset_Module();
  Zebra_Start_Reading_EPC(AAA);
}

void loop()
{ // Gelen veri

if (waitingForResponse)
{
  Response(); // Cevap alma fonksiyonu
}
else
{
  while (Serial.available() > 0)
  {
    prompt = Serial.readString(); // Gelen Mesaj

    // Cümle Ayırma Başlangıç
    int start = 0;
    int end = prompt.indexOf(' ');

    wordCount = 0;
    while (end != -1)
    {
      if (wordCount < MAX_WORDS)
      {
        words[wordCount++] = prompt.substring(start, end);
      }
      start = end + 1;
      end = prompt.indexOf(' ', start);
    }

    if (wordCount < MAX_WORDS)
    {
      words[wordCount++] = prompt.substring(start);
    }
    // Cümle Ayırma Bitiş

    // SORGULAR
    if (words[0] == "test" && words[1] == "-led")
    {
        turnOnAndBlinkLED('R'); 
        turnOnAndBlinkLED('G'); 
        turnOnAndBlinkLED('B'); 
        actionType = "Led";
        Serial.println("\nLED Calisiyor Mu? (yes/no)");
        waitingForResponse = true;
  
    }
    else if (words[0] == "test" && words[1] == "-buzzer" && words[2].toInt() > 0)
    {
      int repeat = words[2].toInt();
      Serial.println(repeat);
      activateBuzzer(repeat); // Buzzer Fonksiyonu
      actionType = "Buzzer";
      Serial.println("\nBuzzer Calisiyor Mu ? (yes/no)");
      waitingForResponse = true;
    }
    else if (words[0] == "test" && words[1] == "-button")
    {
      actionType = "Button";
      checkButtonFor30Seconds();
      Serial.println("\nButon Calisiyor Mu ? (yes/no)");
      waitingForResponse = true;
    }
    else if (words[0] == "test" && words[1] == "-eeprom")
    {
      actionType = "EEPROM";
      waitingForResponse = true;
    }
    else if (words[0] == "test" && words[1] == "-ethernet")
    {
      actionType = "Ethernet";
      Serial.println(Ethernet.linkStatus());
      waitingForResponse = true;
    }
    else if (words[0] == "test" && words[1] == "-wifi")
    {
      actionType = "Wifi";
      waitingForResponse = true;
    }
     else if (words[0] == "test" && words[1] == "-serino")
    {
      actionType = "Seri No";
      waitingForResponse = true;
    }
     else if (words[0] == "test" && words[1] == "-rfid")
    {
      actionType = "Rfid";
      waitingForResponse = true;
    }
    else if (words[0] == "test" && words[1] == "-ekran")
    {
      actionType = "Ekran";
      Serial.println("\nEkran Calisiyor Mu ? (yes/no)");
      waitingForResponse = true;
    }
    else if (words[0] == "test" && words[1] == "-sonuc")
    {
      Serial.println("\n SONUCLAR \n ------------  ");
      Serial.println(result);
    }
    wordCount = 0;
  }
} 
}
