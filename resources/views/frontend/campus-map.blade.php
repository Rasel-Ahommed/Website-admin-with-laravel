@extends('layout\main')

@section('main-contant')

    <body class="sticky-header ">
        <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
        @php
            use App\Models\CampusDetails;
            $data = CampusDetails::get();
        @endphp

        <div id="SHMU-preloader">
            <div class="loading-spinner">
                <div class="preloader-spin-1"></div>
                <div class="preloader-spin-2"></div>
            </div>
            <div class="preloader-close-btn-wraper">
                <span class="btn btn-primary preloader-close-btn">
                    Cancel Preloader</span>
            </div>
        </div>

        <div id="main-wrapper" class="main-wrapper">

            <!--=====================================-->
            <!--=        Header Area Start       	=-->
            <!--=====================================-->
            <my-nav></my-nav>
            <!--=====================================-->
            

            <!--================
                university map
                =====================-->
            <!-- university map -->
            <div class="campus-map pt-5">
                <h3>CAMPUS MAP:</h3>
                <div class="campus-google-map text-center">
                    {!! $data[0]->cam_map !!}
                </div>
            </div>
        @endsection
