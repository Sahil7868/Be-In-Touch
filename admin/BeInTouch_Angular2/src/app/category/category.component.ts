import { Component, OnInit } from '@angular/core';
import { CategoryModel } from '../shared/category-model';
import { CategorydataService } from '../shared/categorydata.service';
@Component({
  selector: 'app-category',
  templateUrl: './category.component.html',
  styleUrls: ['./category.component.css']
})
export class CategoryComponent implements OnInit {

allCategory:CategoryModel[]=[];

  constructor(public _cat_data:CategorydataService) { }

  ngOnInit() {

    this._cat_data.getAllCategory().subscribe(

      (data:CategoryModel[])=>{
        this.allCategory=data;
      },
      function(error){
        alert('vaat lagshe');
      },
      function(){
        console.log('badhu patyu');
      }
    );  
  }
deleteCategory(item:CategoryModel){

  this._cat_data.deleteCategory(item.cat_id).subscribe(

    (data:any)=>{
      this.allCategory.splice(this.allCategory.indexOf(item),1);
      alert('udi gayu');
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
