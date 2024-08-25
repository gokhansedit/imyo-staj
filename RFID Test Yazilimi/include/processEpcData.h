#ifndef PROCESSEPCDATA_H
#define PROCESSEPCDATA_H

#include <Arduino.h>

// Tanımlamalar
const uint16_t maxV = 400; // Tampon boyutu
const uint8_t epcLength = 16; // EPC'nin maksimum uzunluğu

// Global değişkenlerin dışa aktarımı
extern uint8_t fullEpcString[maxV];
extern uint16_t indexCounter;
extern uint8_t epc_value[epcLength];
extern char epcResponse;

// Fonksiyon prototipi
bool processEpcData(Stream& RE40);
void printEpcValue(char *epc_value, size_t length);
#endif
