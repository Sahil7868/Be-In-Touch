var db=require('../dbconnection'); //reference of dbconnection.js
 
var fac={
 
getAllfac:function(callback){
 
return db.query("Select * from facility_table",callback);
 
},
 getfacById:function(id,callback){
 
return db.query("select * from facility_table where facility_id=?",[id],callback);
 },
 addfac:function(fac,callback){
 return db.query("Insert into facility_table(facility_id,facility_name) values(?,?)",
 [fac.facility_id,fac.facility_name],callback);
 },
 deletefac:function(id,callback){
  return db.query("delete from facility_table where facility_id=?",[id],callback);
 },

 updatefac:function(id,fac,callback){
  return db.query("update facility_table set facility_id=?,facility_name=? where facility_id=?",
  [fac.facility_id,fac.facility_name,id],callback);
 }
 
};
 module.exports=fac;