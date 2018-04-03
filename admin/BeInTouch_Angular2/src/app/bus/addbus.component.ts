import { Component, OnInit } from '@angular/core';
import { BusdataService } from '../shared/busdata.service';
import { Busmodel } from '../shared/busmodel';
import { Busdriverjoinmodel } from '../shared/busdriverjoinmodel';
import { Drivermodel } from '../shared/drivermodel';
import {FacilitydataService} from '../shared/facilitydata.service';
import { Facilitymodel } from '../shared/facilitymodel';
import { Router,ActivatedRoute } from '@angular/router';
import { DriverdataService } from '../shared/driverdata.service';
import { Subscription } from 'rxjs/Rx';

@Component({
  selector: 'app-addbus',
  templateUrl: './addbus.component.html',
  styleUrls: ['./addbus.component.css']
})
export class AddbusComponent implements OnInit {

  //bus_id:number;
  private title:string;
  private capacity:number;
  private bn:string;
  private faci:string;
  private de:string;
  private fk_driver_id:number;
  driver_name:string;
 // public bussi:Drivermodel;


  private _subscription:Subscription;
  allCat:Drivermodel[]=[];
  allfacility:Facilitymodel[]=[];

  constructor(private _facility:FacilitydataService,public _bus:BusdataService,public _driver:DriverdataService,public _router:Router,private _acroute:ActivatedRoute) { }

  ngOnInit() {

    this._facility.getAllfac().subscribe(
      (data:Facilitymodel[])=>{
        this.allfacility=data;
     }
    );

    this._driver.getAlldriver().subscribe(
      (data:Drivermodel[])=>{
        this.allCat=data;
     }
    );
  }
  addbus(){

  this._bus.addbus(new Busmodel(null,this.capacity,this.bn,this.title,this.faci,this.de,this.fk_driver_id))
  .subscribe(
    (data:any)=>{
       console.log(data);
      alert('added');
      this._router.navigate(['/allbus']);
    }
  );
}

}
