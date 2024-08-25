#include "Adafruit_NeoPixel.h"

#define PIN_WS2812B 4 // ESP32 pin that connects to WS2812B
#define NUM_PIXELS 32 // The number of LEDs (pixels) on WS2812B

void setupLED();
void turnOnAndBlinkLED(char color);
