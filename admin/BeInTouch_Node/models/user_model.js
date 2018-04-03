var db=require('../dbconnection'); //reference of dbconnection.js
 
var user={
 
getAlluser:function(callback){
 
return db.query("Select * from user_table",callback);
 
},
 getuserById:function(id,callback){
 
return db.query("select * from user_table where email_id=?",[id],callback);
 },
 adduser:function(user,callback){
 return db.query("Insert into user_table(email_id,name,mobile_num,gender,fk_city,password,photo,type) values(?,?,?,?,?,?,?,?)",
 [user.email_id,user.name,user.mobile_num,user.gender,user.fk_city,user.password,user.photo,user.type],callback);
 },
 deleteuser:function(id,callback){
  return db.query("delete from user_table where email_id=?",[id],callback);
 },

 updateuser:function(id,user,callback){
  return db.query("update user_table set name=?,mobile_num=?,gender=?,fk_city=?,password=?,photo=? where email_id=?",
  [user.name,user.mobile_num,user.gender,user.fk_city,user.password,user.photo,id],callback);
 }
 
};
 module.exports=user;