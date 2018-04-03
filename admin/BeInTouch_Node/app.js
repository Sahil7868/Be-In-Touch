var express = require('express');
var path = require('path');
var favicon = require('serve-favicon');
var logger = require('morgan');
var cookieParser = require('cookie-parser');
var bodyParser = require('body-parser');
var cors=require('cors');

var index = require('./routes/index');

var user  = require('./routes/user');
var bus  = require('./routes/bus');
var busdriverjoin = require('./routes/busdriverjoin');
var book  = require('./routes/book');
var pay  = require('./routes/pay');
var buscust  = require('./routes/buscust');
var driver  = require('./routes/driver');
var city  = require('./routes/city');
var cancel  = require('./routes/cancel');
var feedback  = require('./routes/feedback');
var car  = require('./routes/car');
var carcustomer  = require('./routes/carcustomer');
var cartype  = require('./routes/cartype');
var cat  = require('./routes/cat');
var facility  = require('./routes/facility');


var app = express();

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'jade');

// uncomment after placing your favicon in /public
//app.use(favicon(path.join(__dirname, 'public', 'favicon.ico')));
app.use(cors());
app.use(logger('dev'));
app.use(bodyParser.json({limit:'50mb'}));
app.use(bodyParser.urlencoded({ limit:'50mb',extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));

app.use('/', index);
app.use('/user', user);
app.use('/bus', bus);
app.use('/busdriverjoin', busdriverjoin);
app.use('/book', book);
app.use('/pay', pay);
app.use('/buscust', buscust);
app.use('/driver', driver);
app.use('/city', city);
app.use('/cancel', cancel);
app.use('/feedback', feedback);
app.use('/car', car);
app.use('/carcustomer', carcustomer);
app.use('/cartype', cartype);
app.use('/cat', cat);
app.use('/facility', facility);


// catch 404 and forward to error handler
app.use(function(req, res, next) {
  var err = new Error('Not Found');
  err.status = 404;
  next(err);
});

// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get('env') === 'development' ? err : {};

  // render the error page
  res.status(err.status || 500);
  res.render('error');
});

module.exports = app;
