@extends('layouts.app');
@section('content')
    <form class="container col-10 col-md-6" action="{{url("header/$header->id")}}" method="post">

        @csrf
        {{method_field('PUT')}}
        
        <div class="row form-group">

            <label for="title">عنوان هدر</label>
            <input type="text" name="title" id="title" value="{{$header->title}}" class="form-control my-2">
            
            <label for="description">توضیح </label>
            <input type="text" name="description" id="description" value="{{$header->description}}" class="form-control form my-2">

            <label for="btn_name">نام دکمه</label>
            <input type="text" name="btn_name" id="btn_name" value="{{$header->btn_name}}" class="form-control my-2">


            <label for="btn_link">لینک</label>
            <input type="text" name="btn_link" id="btn_link" value="{{$header->btn_link}}" class="form-control my-2">

            <div class="form-check">
                    <input type="checkbox" class="form-check-input " id="exampleCheck1">
                    <label class="form-check-label mx-4" for="exampleCheck1">اسلایدر موبایل را نمایش بده</label>
                  </div>

                  <div class="form-check">
                        <input type="checkbox" class="form-check-input " id="exampleCheck1">
                        <label class="form-check-label mx-4" for="exampleCheck1">لودینگ را نمایش بده</label>
                      </div>
                 <button type="submit" class="btn btn-primary mr-auto ">Submit</button>
    </form>
@endsection