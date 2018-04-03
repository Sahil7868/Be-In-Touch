import { Component, OnInit } from '@angular/core';
import { Facilitymodel } from '../shared/facilitymodel';
import { FacilitydataService } from '../shared/facilitydata.service';
import { Router,ActivatedRoute } from '@angular/router';
import { Subscription } from 'rxjs/Rx';

@Component({
  selector: 'app-addfacility',
  templateUrl: './addfacility.component.html',
  styleUrls: ['./addfacility.component.css']
})
export class AddfacilityComponent implements OnInit {

  facility_id:number;
  facility_name:string='';

  private _subscription:Subscription;

  constructor(private _acroute:ActivatedRoute, private _facility:FacilitydataService,public _router:Router) { }

  ngOnInit() {
     this._subscription=this._acroute.params.subscribe(

      (params:any)=>{

       this.facility_id =params["id"];
       
      }
    );
     if(this.facility_id!=0)
    {
      this._facility.getfacById(this.facility_id).subscribe(

        (data:Facilitymodel[])=>{
          this.facility_name=data[0].facility_name;
        }
      );
    }
  }


addfacility()
{
if(this.facility_id==0)
{
  this._facility.addfac(new Facilitymodel(this.facility_id,this.facility_name))
    .subscribe(
      (data:any)=>{

         
         console.log(data);
         this._router.navigate(['/allfacility']);
    },
    function(error){},
    function(){
      
      //alert('added');
      }
    );
}
else
{
  //edit
  this._facility.updatefac(new Facilitymodel(this.facility_id,this.facility_name))
    .subscribe(
      (data:any)=>{

         console.log(data); 
         this._router.navigate(['/allfacility']); 
    },
    function(error){

      alert(error);
    },
    function(){
      alert('Updated');
      }
    );
}
}
}

