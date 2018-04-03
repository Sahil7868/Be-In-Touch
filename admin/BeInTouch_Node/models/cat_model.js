var db=require('../dbconnection'); //reference of dbconnection.js
 
var cat={
 
getAllcat:function(callback){
 
return db.query("Select * from category_tbl",callback);
 
},
 getcatById:function(id,callback){
 
return db.query("select * from category_tbl where cat_id=?",[id],callback);
 },
 addcat:function(cat,callback){
 return db.query("Insert into category_tbl(cat_id,cat_name,cat_description) values(?,?,?)",
 [cat.cat_id,cat.cat_name,cat.cat_description],callback);
 },
 deletecat:function(id,callback){
  return db.query("delete from category_tbl where cat_id=?",[id],callback);
 },

 updatecat:function(id,cat,callback){
  return db.query("update category_tbl set cat_name=?,cat_description=? where cat_id=?",
  [cat.cat_name,cat.cat_description,id],callback);
 }
 
};
 module.exports=cat;