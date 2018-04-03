import { Component, OnInit } from '@angular/core';
import { Facilitymodel } from '../shared/facilitymodel';
import { FacilitydataService } from '../shared/facilitydata.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-facility',
  templateUrl: './facility.component.html',
  styleUrls: ['./facility.component.css']
})
export class FacilityComponent implements OnInit {


allfacility:Facilitymodel[]=[];
  constructor(public _fac:FacilitydataService,private _router:Router) { }
   

  ngOnInit() {

     this._fac.getAllfac().subscribe(

      (data:Facilitymodel[])=>{
        this.allfacility=data;
      },
      function(error){
        alert('cant show');
      },
      function(){
        console.log('finished');
      }
    );  
  }
 addfacility(){

        this._router.navigate(['/addfacility',0]);
}
 updatefacility(item:Facilitymodel)
  {
    this._router.navigate(['/addfacility',item.facility_id]);
  }
deletefacility(item:Facilitymodel){

  this._fac.deletefac(item.facility_id).subscribe(

    (data:any)=>{
      this.allfacility.splice(this.allfacility.indexOf(item),1);
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
