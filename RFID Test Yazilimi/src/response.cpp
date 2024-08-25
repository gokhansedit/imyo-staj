#include "response.h"
#include "eeprom_test.h"
#include "ethernet_test.h"
#include "wifi_config.h"
#include "screen_test.h"
#include "processEpcData.h"
#include "serialNumberValidator.h"
bool waitingForResponse = false;
String userResponse = "";
String result = "";
String actionType = "";
void Response()
{
  // SORUSUZ TESTLER
   if (actionType == "EEPROM")
  {
    bool eepromResult = testEEPROM();
    if (eepromResult)
    {
      success();
    }
    else
    {
      failed();
    }
  }
  else if (actionType == "Ethernet")
  {
    if (checkEthernetConnection())
    {
      success();
    }
    else
    {
      failed();
    }
  }
  else if (actionType == "Wifi")
  {
    if (connectToWiFi())
    {
      success();
    }
    else
    {
      failed();
    }
  }
   else if (actionType == "Seri No")
  {
    if (validateAndSaveSerialNumber())
    {
      success();
    }
    else
    {
      failed();
    }
  }

  
  else if (actionType == "Rfid")
  {
      bool epcResult = processEpcData(RE40); 
    if (epcResult)
    {
      success();
    }
    else
    {
      failed();
    }
  }
  // SORULU TESTLER
  else if (actionType == "Ekran")
  {

    bool testResult = testScreen();
    if (testResult)
    {
      success();
    }
    else
    {
      failed();
    }
  }
  else if (Serial.available() > 0)
  {
    userResponse = Serial.readString();
    userResponse.replace(" ", "");

    if (userResponse == "yes")
    {
      success();
    }
    else if (userResponse == "no")
    {
      failed();
    }
    else
    {
      Serial.println("\nGecersiz Cevap. Lütfen 'yes' ya da 'no' giriniz. \n");
    }
  }
}

void success()
{
 Serial.println("\n"+actionType + " Testi Basarili");
  result += "\n" + actionType + " - Calisiyor";
  waitingForResponse = false;
  actionType = "";
}
void failed()
{
  Serial.println("\n"+actionType + " Testi Basarisiz");
  result += "\n" + actionType + " - Calismiyor <<<";
  waitingForResponse = false;
  actionType = "";
}