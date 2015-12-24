var express = require('express')
var app = express()

var hello = require('./hello');
hello.world();
 
app.get('/', function (req, res) {
  res.send('Hello World');
  console.log('test the server');
})
 
app.listen(3000)