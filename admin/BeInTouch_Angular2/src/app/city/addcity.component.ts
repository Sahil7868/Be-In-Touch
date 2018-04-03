import { Component, OnInit } from '@angular/core';
import { Citymodel } from '../shared/citymodel';
import { CitydataService } from '../shared/citydata.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-addcity',
  templateUrl: './addcity.component.html',
  styleUrls: ['./addcity.component.css']
})
export class AddcityComponent implements OnInit {

  private city_name:string;
  

   public city:Citymodel;

  constructor(public _city:CitydataService,public _router:Router) { }

  ngOnInit() {
  }

  addcity(){

  this.city=new Citymodel(null,this.city_name);
  this._city.addcity(this.city).subscribe(
    (data:any)=>{
      alert('added');
      this._router.navigate(['/allcity']);
    }
  );
}

}
