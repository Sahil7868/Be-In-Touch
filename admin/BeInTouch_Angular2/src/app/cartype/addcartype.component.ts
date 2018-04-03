import { Component, OnInit } from '@angular/core';
import { Cartypemodel } from '../shared/cartypemodel';
import { CartypedataService } from '../shared/cartypedata.service';
import { Router } from '@angular/router';
@Component({
  selector: 'app-addcartype',
  templateUrl: './addcartype.component.html',
  styleUrls: ['./addcartype.component.css']
})
export class AddcartypeComponent implements OnInit {

  private title:string;
  
  
  public cartype:Cartypemodel;

  constructor(public _cartype:CartypedataService,public _router:Router) { }

  ngOnInit() {
  }
addcartype(){

  this.cartype=new Cartypemodel(null,this.title);
  this._cartype.addcartype(this.cartype).subscribe(
    (data:any)=>{
      alert('added');
      this._router.navigate(['/allcartype']);
    }
  );
}
}
