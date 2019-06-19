
@extends('layouts/master')
@section('content')
    
    @include('partitions.preloader')
    <!--Mainmenu-area-->
    @include('partitions.menu')

    <!--Mainmenu-area/-->
    <!--Header-area-->
    @include('partitions.header')

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



