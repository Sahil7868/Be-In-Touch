var db=require('../dbconnection'); //reference of dbconnection.js
 
var cancel={
 
getAllcancel:function(callback){
 
return db.query("Select * from cancel_table",callback);
 
},
 getcancelById:function(id,callback){
 
return db.query("select * from cance_table where cancel_id=?",[id],callback);
 },
 addcancel:function(cancel,callback){
 return db.query("Insert into cancel_table(cancel_id,fk_email_id,cancel_date,refund_amount) values(?,?,?,?)",
 [cancel.cancel_id,cancel.fk_email_id,cancel.cancel_date,cancel.refund_amount],callback);
 },
 deletecancel:function(id,callback){
  return db.query("delete from cancel_table where cancel_id=?",[id],callback);
 },

 updatecancel:function(id,cancel,callback){
  return db.query("update cancel_table set fk_email_id=?,canel_date=?,refund_amount=? where cancel_id=?",
  [cancel.fk_email_id,cancel.cancel_date,cancel.refund_amount,id],callback);
 }
 
};
 module.exports=cancel;