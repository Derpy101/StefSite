

import time
from grovepi import *
import math

buzzer_pin = 4

digitalWrite(buzzer_pin,1)
time.sleep(2)
digitalWrite(buzzer_pin,0)
