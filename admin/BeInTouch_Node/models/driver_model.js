var db=require('../dbconnection'); //reference of dbconnection.js
var fs = require('fs');
var driver={
 
getAlldriver:function(callback){
 
return db.query("Select * from driver_table",callback);
 
},
 getdriverById:function(id,callback){
 
return db.query("select * from driver_table where driver_id=?",[id],callback);
 },
 adddriver:function(driver,callback){
      var dt=new Date();//current date and time of server
    var text = "";//random text
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for( var i=0; i < 5; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));
   // var base64d=Student.student_img.replace(/^data:image\/png;base64,/, "");
   var pos=driver.photo.indexOf(",");
   var base64d=driver.photo.substring(pos+1);
   console.log(base64d);
    var path="./public/images/drivers"+text+dt.getDate()+dt.getMonth()+dt.getMilliseconds()+".png";
    var photo="/images/drivers"+text+dt.getDate()+dt.getMonth()+dt.getMilliseconds()+".png";
    fs.writeFile(path,base64d,'base64',function(err){
        if(err) {
        return console.log(err);
        }
        console.log("The file was saved!");
    });
 return db.query("Insert into driver_table values(?,?,?,?,?)",
 [driver.driver_id,driver.name,driver.mobile_num,driver.address,driver.photo],callback);
 },
 deletedriver:function(id,callback){
     if(driver.photo!='')
        {
        var path='./public'+driver.photo;
        fs.unlink(path,function(err){
            if(err){
            console.log(err);
            }
            console.log('Deleted successfuly')});
        }
  return db.query("delete from driver_table where driver_id=?",[id],callback);
 },

 updatedriver:function(id,driver,callback){
  return db.query("update driver_table set name=?,mobile_num=?,address=?,photo=? where driver_id=?",
  [driver.name,driver.mobile_num,driver.address,driver.photo,id],callback);
 }
 
};
 module.exports=driver;