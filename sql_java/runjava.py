# import os
# os.system("java helloworld")
import subprocess

output = subprocess.check_output("java query", shell=True)
print(output.decode("utf-8"))