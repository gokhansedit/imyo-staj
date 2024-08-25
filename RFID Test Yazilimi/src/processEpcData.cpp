#include <Arduino.h>
#include "processEpcData.h"

void printEpcValue(char *epc_value, size_t length)
{
    Serial.print("Veri (");
    Serial.print(length);
    Serial.print("): ");

    for (size_t i = 0; i < length; i++)
    {
        if (epc_value[i] <= 0x0f)
        {
            Serial.print("0");
        }
        Serial.print(epc_value[i], HEX);
    }

    Serial.println();
}

bool processEpcData(Stream &RE40)
{
    int epcLength = 0;
    char fullEpcString[maxV];
    char epc_value[16];
    int indexCounter = 0;
    bool cardRead = false;

    memset(fullEpcString, 0, sizeof(fullEpcString));
    memset(epc_value, 0, sizeof(epc_value));

    while (RE40.available())
    {
        fullEpcString[indexCounter] = RE40.read();
        indexCounter++;

        if (indexCounter >= 10)
        {
            if (fullEpcString[0] == 0xAA && fullEpcString[1] == 0xAB &&
                fullEpcString[2] == 0x08 && fullEpcString[3] == 0x05)
            {
                int sizeX = fullEpcString[5];
                if (sizeX == 0x2A && indexCounter >= 19)
                {
                    for (size_t i = 0; i < 12; i++)
                    {
                        epc_value[i] = fullEpcString[7 + i];
                    }
                    epcLength = 12;
                    cardRead = true;
                    printEpcValue(epc_value, epcLength);
                    break;
                }
                else if (sizeX == 0x33 && indexCounter >= 28)
                {
                    for (size_t i = 0; i < 16; i++)
                    {
                        epc_value[i] = fullEpcString[12 + i];
                    }
                    epcLength = 16;
                    cardRead = true;
                    printEpcValue(epc_value, epcLength);
                    break;
                }
            }
        }
    }

    while (RE40.available())
    {
        RE40.read();
    }

    RE40.flush();

    if (!cardRead)
    {
        Serial.println("Kart okunamadı.");
    }

    memset(fullEpcString, 0, sizeof(fullEpcString));
    memset(epc_value, 0, sizeof(epc_value));

    return cardRead;
}
