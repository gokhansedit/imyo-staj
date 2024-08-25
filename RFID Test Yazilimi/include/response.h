// response_handler.h
#ifndef RESPONSE_HANDLER_H
#define RESPONSE_HANDLER_H

#include <Arduino.h>
#define RE40 Serial1
extern bool waitingForResponse;
extern String userResponse;
extern String result;
extern String actionType;
extern const int buttonPin;
extern int buttonState;
extern HardwareSerial RE40;

void Response();
void success();
void failed();
void soru();

#endif
