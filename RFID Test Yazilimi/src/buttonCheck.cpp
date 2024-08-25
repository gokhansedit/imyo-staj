#include "buttonCheck.h"

void checkButtonFor30Seconds() {
    unsigned long startTime = millis();
    const unsigned long duration = 10000; // 30 saniye
    int repeat = 1;
        Serial.println("10 Saniyelik Button Testi Basladi");
    while (millis() - startTime < duration) {
        if (digitalRead(buttonPin) == LOW) { // Buton aktif (LOW seviyede) olduğunda
            Serial.print("Butona basildi - ");
            Serial.print(repeat);
            Serial.println();
            repeat++;
            delay(200); // Mesajı tekrar tekrar yazmayı engellemek için kısa bir gecikme
        }
    }
}
