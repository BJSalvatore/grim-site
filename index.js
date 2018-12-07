var express = require('express');
var mysql = require('mysql');
var app = express();
// app.use(express.logger());
//
// var connection = mysql.createConnection({
//   host     : 'us-cdbr-iron-east-01.cleardb.net',
//   user     : 'b82409b1d1c87f',
//   password : '82ae92e1',
//   database : 'heroku_37ef2959c0795ff'
// });
//
// connection.connect();
//
// app.get('/', function(request, response) {
//   connection.query('SELECT * from posts', function(err, rows, fields) {
//       if (err) {
//         console.log('error: ', err);
//         throw err;
//       }
//       // response.send(['Hello World!!!! HOLA MUNDO!!!!', rows]);
//     });
// });


var port = process.env.PORT || 3000;
app.use(express.static(__dirname + '/app'));
app.listen(port, function() {
console.log('I am listening on port ' + port);
});

// var express = require('express');
// var app = express();
// var port = process.env.PORT || 3000;
// app.use(express.static(__dirname + '/app'));
// app.listen(port, function() {
// console.log('I am listening on port ' + port);
// });
