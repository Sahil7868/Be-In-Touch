import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'carfilter'
})
export class CarfilterPipe implements PipeTransform {
  cartype:any[]=[];
  cartype1:any[]=[];

  transform(value: any[], args: any): any {
      if(args!='')
    {
      //this.cartype=value.filter(res=>res.type_id.startsWith(args));
     return this.cartype1=value.filter(res=>res.car_name.startsWith(args));
      //return this.cartype.concat(this.cartype1);
    }
    else{

    
    return value;
    }
  }

}
