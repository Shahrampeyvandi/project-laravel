
@extends('layouts/master')

@section('content')

    @if ($header->preloader)
        @include('partitions.preloader')
    @endif
    <!--Mainmenu-area-->
    @include('partitions.menu')

    <!--Mainmenu-area/-->
    <!--Header-area-->
    @if ($header->visible)  
         @include('partitions.header')
    @endif

    <!--Header-area/-->
    <!--Feature-area-->
    @include('partitions.Features')

    <!--Feature-area/-->

    @include('partitions.Servises')

    @include('partitions.Special-Features')

    @include('partitions.Prices')

    @include('partitions.Team')


    @include('partitions.Testimonial')


    @include('partitions.faq')


    @include('partitions.Clients')


    @include('partitions.blogs')



    @include('partitions.footer')









    
    @endsection



