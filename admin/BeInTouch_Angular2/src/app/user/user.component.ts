import { Component, OnInit } from '@angular/core';
import { UserdataService } from '../shared/userdata.service';
import { Usermodel } from '../shared/usermodel';

@Component({
  selector: 'app-user',
  templateUrl: './user.component.html',
  styleUrls: ['./user.component.css']
})
export class UserComponent implements OnInit {

  alluser:Usermodel[]=[];

  constructor(public _user:UserdataService) { }

  ngOnInit() {

    this._user.getAlluser().subscribe(

      (data:Usermodel[])=>{
        this.alluser=data;
      },
      function(error){
        alert('cant show');
      },
      function(){
        console.log('finished');
      }
    );  
  }
deleteuser(item:Usermodel){

  this._user.deleteuser(item.email_id).subscribe(

    (data:any)=>{
      this.alluser.splice(this.alluser.indexOf(item),1);
      alert('deleted');
    },
      function(error){
        alert('vaat lagshe');
      },
      function(){
        console.log('badhu patyu');
      }
  );

}


}
