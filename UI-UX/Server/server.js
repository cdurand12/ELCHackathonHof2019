var express = reguire('express');
var app = express();

//routes
app.get('/', function (request, response) {
    response.send('Hello, World');
});

app.get('/comments', function (request, response) {
    console.log('GET request received at Handler')
})

app.listen(3000, function () {
    console.log("Server is running on port 3000");
});