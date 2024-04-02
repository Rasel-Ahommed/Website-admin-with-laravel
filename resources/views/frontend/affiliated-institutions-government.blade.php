@extends('layout\main')

@section('main-contant')

<body class="sticky-header ">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
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
        <!--=       About Area Start      		=-->
        <!--=====================================-->
        
        <!--=====================================-->
        <!--=       Hero Banner Area Start      =-->
        <!--=====================================-->
        @php
            use App\Models\InstituteCode;

            $datas = InstituteCode::where('Institute_type_id', '=', 1)->get();
        @endphp
        
        <div class="college_link_for_logo">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="banner-content logo_link_college">
                            <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">List of The Medical Colleges</h1>
                            <!-- <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit.</p> -->
                            <div class="features-list" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                                <div class="row">
                                    @foreach ($datas as $data)
                                        <div class="col-lg-3">
                                            <div class="features-box color-secondary-style">
                                                <div class="icon">
                                                    <img src="{{$data->ins_logo}}" alt="Brand Logo">
                                                    <!-- <i class="icon-6"></i> -->
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">{{$data->ins_name}}</h5>
                                                    <p class="strong mb-3">Code No <span>{{$data->ins_code}}</span></p>
                                                    <a href="{{$data->web_link}}" class="edu-btn btn-secondary btn-small">Visit Website</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection