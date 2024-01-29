@extends('layout\main')

<head>
    <style>
        .campus_text p {
            font-size: 20px;
        }
    </style>
</head>
@section('main-contant')

    <body class="sticky-header">
        <!--[if lte IE 9]>
          <p class="browserupgrade">
            You are using an <strong>outdated</strong> browser. Please
            <a href="https://browsehappy.com/">upgrade your browser</a> to improve
            your experience and security.
          </p>
        <![endif]-->

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
            <!-- campus details -->

            @php
                use App\Models\CampusDetails;
                $data = CampusDetails::get();
            @endphp
            <div class="campus-details pt-5">
                <div class="campus-info container">
                    <div class="campus-full-info">
                        <h3>CAMPUS DETAILS</h3>
                        <div class="campus-img text-center">
                            <img class="w-25" src="{{ asset('storage/aboutImages/' . $data[0]->cam_img) }}"
                                alt="campus image" />
                            <p class="campus-img-caption">
                                Sheikh Hasina Medical University Campus
                            </p>
                        </div>
                    </div>
                    <!-- campus overview -->
                    <h3>{{ $data[0]->cam_title }}</h3>
                    <div class="campus_text">{!! $data[0]->cam_text !!}</div>
                    <!-- university map -->
                    <div class="campus-map">
                        <h3>CAMPUS MAP:</h3>
                        <div class="campus-google-map text-center">
                            <div>
                                {!! $data[0]->cam_map !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endsection
