import { Component, OnInit } from '@angular/core';
import { DriverdataService } from '../shared/driverdata.service';
import { Drivermodel } from '../shared/drivermodel';
import { Router } from '@angular/router';
@Component({
  selector: 'app-driver',
  templateUrl: './driver.component.html',
 // styleUrls: ['./driver.component.css']
})
export class DriverComponent implements OnInit {

    alldriver:Drivermodel[]=[];

  constructor(public _driver:DriverdataService,public _router:Router) { }

  ngOnInit() {
   this._driver.getAlldriver().subscribe(

      (data:Drivermodel[])=>{
        this.alldriver=data;
      },
      function(error){
        alert('cant show');
      },
      function(){
        console.log('finished');
      }
    );  
  }
   updatedriver(item:Drivermodel)
  {
    this._router.navigate(['/updatedriver',item.driver_id]);
  }
deletedriver(item:Drivermodel){

  this._driver.deletedriver(item.driver_id).subscribe(

    (data:any)=>{
      this.alldriver.splice(this.alldriver.indexOf(item),1);
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