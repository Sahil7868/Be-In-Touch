var db=require('../dbconnection'); //reference of dbconnection.js
 
var book={
 
getAllbook:function(callback){
 
return db.query("Select * from booking_table",callback);
 
},
 getbookById:function(id,callback){
 
return db.query("select * from booking_table where book_id=?",[id],callback);
 },
 addbook:function(book,callback){
 return db.query("Insert into booking_table(book_id,capacity,position,fk_bus_id) values(?,?,?,?)",
 [book.book_id,book.capacity,book.position,book.fk_bus_id],callback);
 },
 deletebook:function(id,callback){
  return db.query("delete from booking_table where book_id=?",[id],callback);
 },

 updatebook:function(id,book,callback){
  return db.query("update booking_table set capacity=?,position=?,fk_bus_id=? where book_id=?",
  [book.capacity,book.position,book.fk_bus_id,id],callback);
 }
 
};
 module.exports=book;