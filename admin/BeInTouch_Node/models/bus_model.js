var db=require('../dbconnection'); //reference of dbconnection.js
 
var bus={
 
getAllbus:function(callback){
 
return db.query("Select * from bus_table",callback);
 
},
getAlljoin:function(callback){
 
return db.query("Select b.*,d.*,f.* from bus_table as b,driver_table as d,facility_table as f where b.fk_driver_id=d.driver_id and f.facility_id=b.fk_facility_id",callback);
 
},
 getbusById:function(id,callback){
 
return db.query("select * from bus_table where bus_id=?",[id],callback);
 },
 addbus:function(bus,callback){
 return db.query("Insert into bus_table(bus_id,capacity,bus_num,bus_name,fk_facility_id,bus_detail,fk_driver_id) values(?,?,?,?,?,?,?)",
 [bus.bus_id,bus.capacity,bus.bus_num,bus.bus_name,bus.fk_driver_id,bus.bus_detail,bus.fk_driver_id],callback);
 },
 deletebus:function(id,callback){
  return db.query("delete from bus_table where bus_id=?",[id],callback);
 },

 updatebus:function(id,bus,callback){
  return db.query("update bus_table set capacity=?,bus_num=?,bus_name=?,fk_facility_id=?,bus_detail=?,fk_driver_id=? where bus_id=?",
  [bus.capacity,bus.bus_num,bus.bus_name,bus.fk_driver_id,bus.bus_detail,bus.fk_driver_id,id],callback);
 }
 
};
 module.exports=bus;