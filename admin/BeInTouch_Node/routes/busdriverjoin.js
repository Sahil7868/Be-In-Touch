var express = require('express');
var router = express.Router();
var busjoin=require('../models/bus_model');

router.get('/:id?',function(req,res,next){

 
 
busjoin.getAlljoin(function(err,rows){
 
if(err)
  {
  res.json(err);
  }
  else
  {
  res.json(rows);
  }
 
 });
 
 });


 module.exports = router;