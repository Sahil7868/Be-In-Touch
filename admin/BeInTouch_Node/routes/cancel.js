var express = require('express');
var router = express.Router();
var cancel=require('../models/cancel_model');

router.get('/:id?',function(req,res,next){
 
if(req.params.id){
 
cancel.getcancelById(req.params.id,function(err,rows){
 
if(err)
  {
  res.json(err);
  }
  else{
  res.json(rows);
  }
  });
 }
 else{
 
cancel.getAllcancel(function(err,rows){
 
if(err)
  {
  res.json(err);
  }
  else
  {
  res.json(rows);
  }
 
 });
 }
 });

 router.post('/',function(req,res,next){

cancel.addcancel(req.body,function(err,count){
  if(err)
  {
  res.json(err);
  }
  else
  {
  res.json(req.body);//or return count for 1 &amp;amp;amp; 0
  }
  });
 });

 router.delete('/:id',function(req,res,next){
 
cancel.deletecancel(req.params.id,function(err,count){
 
if(err)
  {
  res.json(err);
  }
  else
  {
  res.json(count);
  }
 
});
 });
router.put('/:id',function(req,res,next){
 
cancel.updatecancel(req.params.id,req.body,function(err,rows){
 
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