var db=require('../dbconnection'); //reference of dbconnection.js
 
var pay={
 
getAllpay:function(callback){
 
return db.query("Select * from payment_table",callback);
 
},
 getpayById:function(id,callback){
 
return db.query("select * from payment_table where pay_id=?",[id],callback);
 },
 addpay:function(book,callback){
 return db.query("Insert into payment_table(pay_id,card_num,amount,card_name,card_type,cvv,fk_email_id) values(?,?,?,?,?,?,?)",
 [pay.pay_id,pay.card_num,pay.amount,pay.card_name,pay.card_type,pay.cvv,pay.fk_email_id],callback);
 },
 deletepay:function(id,callback){
  return db.query("delete from payment_table where pay_id=?",[id],callback);
 },

 updatepay:function(id,book,callback){
  return db.query("update payment_table set card_num=?,amount=?,card_name=?,card_type=?,cvv=?,fk_email_id=? where pay_id=?",
  [pay.card_num,pay.amount,pay.card_name,pay.card_type,pay.cvv,pay.fk_email_id,id],callback);
 }
 
};
 module.exports=pay;