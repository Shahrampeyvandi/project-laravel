@extends('layouts.app')

@section('content')
<h2 class="lead text-center text-primary">نقشه سایت</h2>
<hr>



<div class="card text-center my-4">
    <div class="card-header text-white bg-secondary">
      مدیریت منو
    </div>
   
    <div class="card-footer text-left ">
        <a href="#"><i class="fa fa-edit fa-2x mx-2" title="ویرایش"></i></a>
        @if (true)
        <a href=""><i class="fa fa-eye-slash fa-2x mx-1" title="عدم نمایش" aria-hidden="true"></i></a>
            @else
            <a href=""><i class="fa fa-eye fa-2x mx-1" title=" نمایش" aria-hidden="true"></i> </a>
        @endif   

    </div>
 </div>


  <div class="card text-center">
         <div class="card-header  text-white bg-secondary">
                      مدیریت هدر
        </div>
            
        <div class="card-footer text-left ">
                <a href="{{url('header/1/edit')}}"><i class="fa fa-edit fa-2x mx-2" title="ویرایش"></i>
                </a>
                @if (true)
                <a href=""><i class="fa fa-eye-slash fa-2x mx-1" title="عدم نمایش" aria-hidden="true"></i></a>
            
                @else
                <a href=""><i class="fa fa-eye fa-2x mx-1" title=" نمایش" aria-hidden="true"></i>
                </a>
            
            @endif
    
        </div>
    </div>

    <div class="card text-center my-4">
            <div class="card-header  text-white bg-secondary">
                          مدیریت فوتر
           </div>
               
           <div class="card-footer text-left ">
                   <a href="#"><i class="fa fa-edit fa-2x mx-2" title="ویرایش"></i>
                   </a>
                   @if (true)
                   <a href=""><i class="fa fa-eye-slash fa-2x mx-1" title="عدم نمایش" aria-hidden="true"></i></a>
               
                   @else
                   <a href=""><i class="fa fa-eye fa-2x mx-1" title=" نمایش" aria-hidden="true"></i>
                   </a>
               
               @endif
       
           </div>
       </div>






@endsection
