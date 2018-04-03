import { Routes,RouterModule } from '@angular/router';
import { TaskComponent } from './task/task.component';
import { AddtaskComponent } from './task/addtask.component';
import { CategoryComponent } from './category/category.component';
import { AddcategoryComponent } from './category/addcategory.component';
import { CartypeComponent } from './cartype/cartype.component';
import { UserComponent } from './user/user.component';
import { AddcartypeComponent } from './cartype/addcartype.component';
import { BookingComponent } from './booking/booking.component';
//import { BuscustComponent } from './buscust/buscust.component';
import { DriverComponent } from './driver/driver.component';
import { AdddriverComponent } from './driver/adddriver.component';
import { BusComponent } from './bus/bus.component';
import { AddbusComponent } from './bus/addbus.component';
import { UpdatecartypeComponent } from './cartype/updatecartype.component';
import { UpdatedriverComponent } from './driver/updatedriver.component';
import { UpdatebusComponent } from './bus/updatebus.component';
import { FacilityComponent } from './facility/facility.component';
import { AddfacilityComponent } from './facility/addfacility.component';
import { CancelComponent} from './cancel/cancel.component';
import { CarcustComponent } from './carcust/carcust.component';
import { CarComponent } from './car/car.component';
import { AddcarComponent } from './car/addcar.component';
import { UpdatecarComponent} from './car/updatecar.component';
import { CityComponent } from './city/city.component';
import { AddcityComponent } from './city/addcity.component';
import { UpdatecityComponent } from './city/updatecity.component';
import { FeedbackComponent } from './feedback/feedback.component';
import { PaymentComponent } from './payment/payment.component';



const routing:Routes=[

    {path:'',pathMatch:'full',redirectTo:'/alluser'},
    {path:'task', component:TaskComponent},
    {path:'addtask', component:AddtaskComponent},
    {path:'allCategory',component:CategoryComponent},
    {path:'addCategory',component:AddcategoryComponent},
    {path:'allfeedback', component:FeedbackComponent},
    {path:'allpayment', component:PaymentComponent},
    {path:'allcarcust', component:CarcustComponent},
    {path:'allcancel', component:CancelComponent},
    {path:'allcity', component:CityComponent},
    {path:'addcity', component:AddcityComponent},
    {path:'updatecity/:id',component:UpdatecityComponent},
    {path:'allcar', component:CarComponent},
    {path:'addcar', component:AddcarComponent},
    {path:'updatecar/:id',component:UpdatecarComponent},
    {path:'addcartype',component:AddcartypeComponent},
    {path:'allcartype',component:CartypeComponent},
    {path:'alluser',component:UserComponent},
    {path:'allbooking',component:BookingComponent},
    {path:'alldriver',component:DriverComponent},
    {path:'adddriver',component:AdddriverComponent},
    {path:'addbus',component:AddbusComponent},
    {path:'allbus',component:BusComponent},
    {path:'allfacility',component:FacilityComponent},
    {path:'addfacility/:id',component:AddfacilityComponent},
    {path:'updatecartype/:id',component:UpdatecartypeComponent},
    {path:'updatebus/:id',component:UpdatebusComponent},
    {path:'updatedriver/:id',component:UpdatedriverComponent},
  //  {path:'allbuscust',component:BuscustComponent}
   
    
    
];

export const Router=RouterModule.forRoot(routing);