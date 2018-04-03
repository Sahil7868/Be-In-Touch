var express = require('express');
var router = express.Router();
var buscust=require('../models/buscust_model');

router.get('/:id?',function(req,res,next){
 
if(req.params.id){
 
buscust.getbuscustById(req.params.id,function(err,rows){
 
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
 
buscust.getAllbuscust(function(err,rows){
 
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


 router.delete('/:id',function(req,res,next){
 
buscust.deletebuscust(req.params.id,function(err,count){
 
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
 
buscust.updatebuscust(req.params.id,req.body,function(err,rows){
 
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