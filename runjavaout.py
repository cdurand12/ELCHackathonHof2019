# import os
# os.system("java helloworld")
import subprocess
import os
os.chdir("./sql_java/")
output = subprocess.check_output("java query", shell=True)
print(output.decode("utf-8"))