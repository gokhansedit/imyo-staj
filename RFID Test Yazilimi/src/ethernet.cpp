#include <SPI.h>
#include <Ethernet.h>
uint8_t baseMac[6];
unsigned long startMillis;
const long interval = 10000;
bool response = true;
bool checkEthernetConnection()
{
  startMillis = millis(); // Başlangıç zamanını al
  while (millis() - startMillis < interval)
  {
    Serial.println("\n-------------------------\nEthernet Kontrol Ediliyor...");
    esp_read_mac(baseMac, ESP_MAC_ETH);

    // Ethernet bağlantı durumunu kontrol et
    if (Ethernet.linkStatus() == LinkOFF)
    {
      Serial.println("Ethernet kablosu takili degil.");
      response = false;
    }
    else if (Ethernet.linkStatus() == LinkON)
    {
      Serial.println("Ethernet kablosu takili.");
      if (Ethernet.begin(baseMac, 5000) == 0)
      {
        Serial.println("DHCP kullanarak Ethernet yapilandirmasi basarisiz oldu");
        response = false;
      }
      else
      {
        // IP adresini yazdır
        Serial.print("Ethernet Baglantisi Saglandi: ");
        Serial.println(Ethernet.localIP());
        response = true;
      }
    }

    delay(1000);
  }

  return response;
}
