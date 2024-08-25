#include "SerialNumberValidator.h"
#include <EEPROM.h>

bool validateAndSaveSerialNumber()
{
    Serial.println("Lutfen bir seri numarasi girin:");
String serialNumber = "";
    while (serialNumber == "")
    {
        if (Serial.available() > 0)
        {
            serialNumber = Serial.readStringUntil('\n');
            serialNumber.trim();
        }
    }
    if (serialNumber.length() != 8)
    {
        Serial.println("Hatali Seri No.");
        return false;
    }

    if (serialNumber.substring(0, 2) != "MD")
    {
        Serial.println("Hatali Seri No.");
        return false;
    }

    if (serialNumber.charAt(2) != '4')
    {
        Serial.println("Hatali Seri No.");
        return false;
    }

    for (int i = 0; i < serialNumber.length(); i++)
    {
        EEPROM.write(i, serialNumber[i]);
    }
    EEPROM.commit();
    Serial.println("Seri numarasi EEPROM'a kaydedildi.");

    return true;
}
