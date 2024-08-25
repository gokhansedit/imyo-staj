#include "Arduino.h"

#define RE40 Serial1
#define Max_EPC_Data_Count 5
#define EPC_Size 16
#define rxPin 32
#define txPin 33


void Start_Command(void);
void Stop_Command(void);
void Radio_Stop_Conditions_Command(void);
void Access_Info(void);
void Query_Parameter(void);
void Disable_Selects(void);
void Access_Parameter_Read(void);
uint8_t Zebra_Check_Incoming_Data(uint32_t New_Index);
void Antenna_Parameter(uint8_t Power);
void Zebra_Start_Reading_EPC(uint8_t Reader_Power);
void Zebra_ETSI_Region(void);
void Zebra_Reset_Module(void);

uint8_t Zebra_Read_EPC();
uint8_t Crc_check(uint8_t *ptr);
uint16_t CRC16_CalcteByte(uint8_t CheckByte, uint16_t LastCRC);
uint16_t CRC16_CalculateBuf(uint8_t *ptr, uint16_t len);
