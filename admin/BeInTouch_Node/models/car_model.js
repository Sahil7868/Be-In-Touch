var db=require('../dbconnection'); //reference of dbconnection.js
 
var car={
 
getAllcar:function(callback){
 
return db.query("Select * from car_table",callback);
 
},
 getcarById:function(id,callback){
 
return db.query("select * from car_table where car_id=?",[id],callback);
 },
 addcar:function(car,callback){
 return db.query("Insert into car_table(car_id,car_name,fk_type_id,car_image_1,car_details,car_num,car_image_2,car_image_3,capacity,fk_driver_id) values(?,?,?,?,?,?,?,?,?,?)",
 [car.car_id,car.name,car.fk_type_id,car.car_image_1,car.car_details,car.car_num,car.car_image_2,car.car_image_3,car.capacity,car.fk_driver_id],callback);
 },
 deletecar:function(id,callback){
  return db.query("delete from car_table where car_id=?",[id],callback);
 },

 updatecar:function(id,car,callback){
  return db.query("update car_table set car_name=?,fk_type_id=?,car_image_1=?,car_details=?,car_num=?,car_image_2=?,car_image_3=?,capacity=?,fk_driver_id=? where car_id=?",
  [car.car_name,car.fk_type_id,car.car_image_1,car.car_details,car.car_num,car.car_image_2,car.car_image_3,car.capacity,car.fk_driver_id,id],callback);
 }
 
};
 module.exports=car;