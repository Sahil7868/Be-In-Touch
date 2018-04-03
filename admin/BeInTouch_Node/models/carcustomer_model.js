var db=require('../dbconnection'); //reference of dbconnection.js
 
var carcustomer={
 
getAllcarcustomer:function(callback){
 
return db.query("Select * from car_customer_table",callback);
 
},
 getcarcustomerById:function(id,callback){
 
return db.query("select * from car_customer_table where cust_id=?",[id],callback);
 },
 addcarcustomer:function(carcustomer,callback){
 return db.query("Insert into car_customer_table(cust_id,source,destination,car_name,amount,date,license_image,with_driver,status,starting_km,ending_km,fk_email_id,address,age,fk_car_id,total_person) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
 [carcustomer.cust_id,carcustomer.source,carcustomer.destination,carcustomer.car_name,carcustomer.amount,carcustomer.date,carcustomer.license_image,carcustomer.with_driver,carcustomer.status,carcustomer.starting_km,carcustomer.ending_km,carcustomer.fk_email_id,carcustomer.address,carcustomer.age,carcustomer.fk_car_id,carcustomer.total_person],callback);
 },
 deletecarcustomer:function(id,callback){
  return db.query("delete from car_customer_table where cust_id=?",[id],callback);
 },

 updatecarcustomer:function(id,carcustomer,callback){
  return db.query("update car_customer_table set source=?,destination=?,car_name=?,amount=?,date=?,license_image=?,with_driver=?,status=?,starting_km=?,ending_km=?,age=?,fk_car_id=?,total_person=? where email_id=?",
  [carcustomer.source,carcustomer.destination,carcustomer.car_name,carcustomer.amount,carcustomer.date,carcustomer.license_image,carcustomer.with_driver,carcustomer.status,carcustomer.starting_km,carcustomer.ending_km,carcustomer.age,carcustomer.fk_car_id,carcustomer.total_person, id],callback);
 }
 
};
 module.exports=carcustomer;