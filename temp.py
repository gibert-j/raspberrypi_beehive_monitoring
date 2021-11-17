#!/usr/bin/env python
import time
from envirophat import light, motion, weather, leds

temp = weather.temperature()
temp = round(temp,1)
print(temp)
