#include <WiFi.h>
#include <Arduino.h>
#include "wifi_config.h"

const unsigned long TIMEOUT_MS = 10000; // Bağlantı için zaman aşımı süresi (ms)

bool connectToWiFi()
{
    Serial.println("Wifi Bilgilerini Giriniz");

    // SSID ve şifreyi kullanıcıdan al
    String ssid = "";
    String password = "";

    Serial.println("Wifi Ad: ");
    while (ssid == "")
    {
        if (Serial.available() > 0)
        {
            ssid = Serial.readStringUntil('\n');
            ssid.trim(); // Başındaki ve sonundaki boşlukları temizle
        }
    }

    Serial.println("Sifre: ");
    while (password == "")
    {
        if (Serial.available() > 0)
        {
            password = Serial.readStringUntil('\n');
            password.trim();
        }
    }

    // Wi-Fi bağlantısını başlat
    WiFi.begin(ssid.c_str(), password.c_str());

    Serial.println(ssid);
    Serial.println(" Baglaniliyor... ");

    unsigned long startTime = millis();
    while (WiFi.status() != WL_CONNECTED)
    {
        if (millis() - startTime > TIMEOUT_MS)
        {
            Serial.println("Baglanti Zaman Asimina Ugradi.");
            return false;
        }
        delay(500);
        Serial.print(".");
    }

    Serial.println("Baglandi!");
    Serial.println("IP Adresi: "+WiFi.localIP());

    return true;
}
