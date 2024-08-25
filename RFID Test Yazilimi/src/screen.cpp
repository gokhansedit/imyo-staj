#include "screen_test.h"

// Global `tft` nesnesini tanımladığınızdan emin olun
extern TFT_eSPI tft;

bool testScreen()
{
    unsigned long startTime = millis(); // Test başlama zamanını kaydet
    const unsigned long timeout = 60000; // 30 saniyelik zaman aşımı süresi

    tft.init();
    tft.setRotation(1);

    // Ekranı kırmızı renkte başlat
    tft.fillScreen(TFT_RED);
    delay(2000);

    // Ekranı yeşil renkte başlat
    tft.fillScreen(TFT_GREEN);
    delay(2000);

    // Ekranı mavi renkte başlat
    tft.fillScreen(TFT_BLUE);
    delay(2000);

    // Dokunmatik ekran testi
    tft.fillScreen(TFT_BLACK);
    tft.setTextColor(TFT_WHITE);
    tft.setTextSize(2);
    tft.drawString("Ekran Testi Basladi", 10, 10);

    delay(1000);

    // Dokunmatik testi için ekranı 35 kareye böl
    int x_step = tft.width() / 7;
    int y_step = tft.height() / 5;

    for (int y = 0; y < 5; y++)
    {
        for (int x = 0; x < 7; x++)
        {
            int x_pos = x * x_step;
            int y_pos = y * y_step;
            tft.drawRect(x_pos, y_pos, x_step, y_step, TFT_WHITE);
        }
    }

    tft.setTextColor(TFT_RED);
    tft.drawString("Lutfen her kareye tiklayin", 10, tft.height() - 20);

    uint16_t touch_x = 0, touch_y = 0;

    for (int y = 0; y < 5; y++)
    {
        for (int x = 0; x < 7; x++)
        {
            int x_pos = x * x_step;
            int y_pos = y * y_step;

            // Dokunma bekleme
            bool touchDetected = false;
            while (!touchDetected)
            {
                if (millis() - startTime > timeout)
                {
                    // Zaman aşımı
                    tft.fillScreen(TFT_BLACK);
                    tft.setTextColor(TFT_RED);
                    tft.drawString("Test Zaman Asimi!", 40, tft.height() / 2);
                    return false;
                }

                if (tft.getTouch(&touch_x, &touch_y))
                {
                    // Dokunma algılandı, uygun kareyi kontrol et
                    if (touch_x >= x_pos && touch_x < x_pos + x_step &&
                        touch_y >= y_pos && touch_y < y_pos + y_step)
                    {
                        tft.fillRect(x_pos, y_pos, x_step, y_step, TFT_GREEN);
                        touchDetected = true;
                    }
                }
            }
        }
    }

    tft.fillScreen(TFT_BLACK);
    tft.setTextColor(TFT_GREEN);
    tft.drawString("Test Basarili!", 40, tft.height() / 2);
    return true;
}
