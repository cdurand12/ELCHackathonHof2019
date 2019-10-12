from http.server import SimpleHTTPRequestHandler
from socketserver import TCPServer
from urllib.parse import parse_qsl
from threading import Thread
import subprocess
import os
#Choose how you want to Process the post data in this function
def processPostData(post=["No Post Data"]):#Print all post data
    for field in post:
        print(field)

class PostHandler(SimpleHTTPRequestHandler):
    def do_POST(self):
        print("Gathered Post Data:")
        postData=parse_qsl(self.rfile.read(int(self.headers['Content-Length'])).decode("utf-8"))#Read and Decode Post Data
        Thread(target=processPostData, args=[postData]).start()#Send Post Data to Process
        # # return SimpleHTTPRequestHandler.do_GET(self) #Handle as no Post Request was given
        #         # # self._set_headers()
        #         # # self.wfile.write(self._html("POST!"))
        #         # self.send_response(200)
        #         # self.send_header('Content-type', 'text/html')
        #         # self.end_headers()
        #         # #
        #         # # self.wfile.write('Client: %s\n' % str(self.client_address))
        #         # # self.wfile.write('User-agent: %s\n' % str(self.headers['user-agent']))
        #         # self.wfile.write(("<html><body>POST!</body></html>"))
        #         # # self.wfile.write('Form data:\n')
        self.send_response(200)
        self.send_header('Content-type', 'text/html')
        self.end_headers()
        # Send the html message

        os.chdir("../Filter/")
        output = subprocess.check_output("java Query", shell=True)
        # print(output.decode("utf-8"))
        # self.wfile.write('Hello World'.encode())
        self.wfile.write(output)
        return

print("Go to http://localhost/ if PORT 80 taken change it on the line bellow")
TCPServer(("", 80), PostHandler).serve_forever()