import { Component, OnInit } from '@angular/core';
import { CategoryModel } from '../shared/category-model';
import { CategorydataService } from '../shared/categorydata.service';
import { Router } from '@angular/router';
@Component({
  selector: 'app-addcategory',
  templateUrl: './addcategory.component.html',
  styleUrls: ['./addcategory.component.css']
})
export class AddcategoryComponent implements OnInit {

private cat_id:number;
private cat_name:string;
private cat_desc:string;
  public cat:CategoryModel;
  constructor(public _cat_data:CategorydataService,public _router:Router) { }

  ngOnInit() {
  }
addCategory(){

  this.cat=new CategoryModel(this.cat_id,this.cat_name,this.cat_desc);
  this._cat_data.addCategory(this.cat).subscribe(
    (data:any)=>{
      alert('added');
      this._router.navigate(['/allCategory']);
    }
  );
}
}
