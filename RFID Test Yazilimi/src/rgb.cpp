#include "rgb.h"

Adafruit_NeoPixel WS2812B(NUM_PIXELS, PIN_WS2812B, NEO_GRB + NEO_KHZ800);

void setupLED()
{
  WS2812B.begin();            
  WS2812B.setBrightness(100);
}

void fadeIn(uint32_t color, int duration) // Kayan Led Animasyonu
{
  for (int i = 0; i < NUM_PIXELS; i += 4)
  {
    WS2812B.setPixelColor(i, color);
    WS2812B.show();
    delay(duration / (NUM_PIXELS / 4)); 
  }
}


void turnOnAndBlinkLED(char color)
{
  uint32_t ledColor;

  switch (color)
  {
  case 'R':
    ledColor = WS2812B.Color(255, 0, 0);
    break;
  case 'G': 
    ledColor = WS2812B.Color(0, 255, 0);
    break;
  case 'B': 
    ledColor = WS2812B.Color(0, 0, 255);
    break;
  default:
    return; 
  }
 for (int i = 0; i < NUM_PIXELS; i++)
  {
    WS2812B.setPixelColor(i, ledColor);
  }
  WS2812B.show();
  delay(3000);
  WS2812B.clear();
  for (int a = 0; a < 5; a++) 
  {
    fadeIn(ledColor, 1500); 
    WS2812B.clear();
  }

  WS2812B.clear();
  WS2812B.show();
  delay(100);
}
