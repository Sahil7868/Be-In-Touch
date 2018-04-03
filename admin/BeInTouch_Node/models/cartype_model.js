var db=require('../dbconnection'); //reference of dbconnection.js
 
var cartype={
 
getAllcartype:function(callback){
 
return db.query("Select * from car_type_table",callback);
 
},
 getcartypeById:function(id,callback){
 
return db.query("select * from car_type_table where type_id=?",[id],callback);
 },
 addcartype:function(cartype,callback){
 return db.query("Insert into car_type_table(type_id,t_name) values(?,?)",
 [cartype.type_id,cartype.t_name],callback);
 },
 deletecartype:function(id,callback){
  return db.query("delete from car_type_table where type_id=?",[id],callback);
 },

 updatecartype:function(id,cartype,callback){
  return db.query("update car_type_table set t_name=? where type_id=?",
  [cartype.t_name,id],callback);
 }
 
};
 module.exports=cartype;