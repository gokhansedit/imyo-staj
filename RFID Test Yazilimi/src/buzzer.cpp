#include <Arduino.h>

#include "buzzer.h"
const int buzzerPin = 16;
void activateBuzzer(int repeat)
{
  for (size_t i = 0; i < repeat; i++)
  {
  digitalWrite(buzzerPin, HIGH);
  delay(1000);
  digitalWrite(buzzerPin, LOW);
  delay(1000);
   }
  
}
