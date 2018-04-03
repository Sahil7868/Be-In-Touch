import { Component, OnInit } from '@angular/core';
import { Carmodel } from '../shared/carmodel';
import { CardataService } from '../shared/cardata.service';
import { Router } from '@angular/router';


@Component({
  selector: 'app-addcar',
  templateUrl: './addcar.component.html',
  styleUrls: ['./addcar.component.css']
})
export class AddcarComponent implements OnInit {


 private carname:string;
 private fktypeid:number;
 private carimage1:string;
 private cardetails:string;
 private carnum:number;
 private carimage2:string;
 private carimage3:string;
 private capacity:number;
 private fkdriverid:number;


  public car:Carmodel;

  constructor(public _car:CardataService,public _router:Router) { }

  ngOnInit() {
 }
addcar(){

  this.car=new Carmodel(null,this.carname,this.fktypeid,this.carimage1,this.cardetails,this.carnum,this.carimage2,this.carimage3,this.capacity,this.fkdriverid);
  this._car.addcar(this.car).subscribe( 
    (data:any)=>{
      alert('added');
      this._router.navigate(['/allcar']);
    }
  );
}
}
