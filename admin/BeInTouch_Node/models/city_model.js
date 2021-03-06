var db=require('../dbconnection'); //reference of dbconnection.js
 
var city={
 
getAllcity:function(callback){
 
return db.query("Select * from city",callback);
 
},
 getcityById:function(id,callback){
 
return db.query("select * from city where city_id=?",[id],callback);
 },
 addcity:function(city,callback){
 return db.query("Insert into city(city_id,city_name) values(?,?)",
 [city.city_id,city.city_name],callback);
 },
 deletecity:function(id,callback){
  return db.query("delete from city where city_id=?",[id],callback);
 },

 updatecity:function(id,city,callback){
  return db.query("update city set city_name=? where city_id=?",
  [city.city_name,id],callback);
 }
 
};
 module.exports=city;