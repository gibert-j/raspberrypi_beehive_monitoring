#!/usr/bin/env python
import time
from envirophat import light, motion, weather, leds

pressure = weather.pressure(unit='hPa')
pressure = round(pressure,2)
print(pressure)
