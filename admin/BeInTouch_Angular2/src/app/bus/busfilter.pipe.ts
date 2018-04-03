import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'busfilter'
})
export class BusfilterPipe implements PipeTransform {

   cartype:any[]=[];
  cartype1:any[]=[];

  transform(value: any[], args: any): any {
      if(args!='')
    {
    this.cartype=value.filter(res=>res.bus_name.startsWith(args));
    
    return this.cartype;
    }
    else{

    
    return value;
    }
    
  }

}
