#include <EEPROM.h>
#include <Arduino.h>
#include "eeprom_test.h"

#define EEPROM_SIZE 64
#define TEST_ADDRESS 0

bool testEEPROM()
{
    if (!EEPROM.begin(EEPROM_SIZE))
    {
        return false;
    }
    int randomNumber = random(0, 256);
    EEPROM.write(TEST_ADDRESS, randomNumber);
    EEPROM.commit();
    delay(500);

    int readEEPROM = EEPROM.read(TEST_ADDRESS);

    if (readEEPROM == randomNumber)
    {
        return true;
    }
    else
    {
        return false;
    }
}
