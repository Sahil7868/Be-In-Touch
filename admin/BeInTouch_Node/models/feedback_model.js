var db=require('../dbconnection'); //reference of dbconnection.js
 
var feedback={
 
getAllfeedback:function(callback){
 
return db.query("Select * from feedback_table",callback);
 
},
 getfeedbackById:function(id,callback){
 
return db.query("select * from feedback_table where f_id=?",[id],callback);
 },
 addfeedback:function(feedback,callback){
 return db.query("Insert into feedback_table(f_id,mobile_num,description,date,fk_email_id) values(?,?,?,?,?)",
 [feedback.f_id,feedback.mobile_num,feedback.description,feedback.date,feedback.fk_email_id],callback);
 },
 deletefeedback:function(id,callback){
  return db.query("delete from feedback_table where f_id=?",[id],callback);
 },

 updatefeedback:function(id,feedback,callback){
  return db.query("update feedback_table set mobile_num=?,description=?,date=?,fk_email_id=? where f_id=?",
  [feedback.mobile_num,feedback.description,feedback.date,feedback.date,feedback.fk_email_id,id],callback);
 }
 
};
 module.exports=feedback;