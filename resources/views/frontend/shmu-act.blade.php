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
        <!-- <div class="edu-breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-inner">
                    <div class="page-title">
                        <h1 class="title">SHMU Act</h1>
                    </div>
                    <ul class="edu-breadcrumb">
                        <li class="breadcrumb-item"><a href="index-one.html">Home</a></li>
                        <li class="separator"><i class="icon-angle-right"></i></li>
                        <li class="breadcrumb-item active" aria-current="page">SHMU Act – 2021</li>
                    </ul>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1">
                    <span></span>
                </li>
                <li class="shape-2 scene"><img data-depth="2" src="assets/images/about/shape-13.png" alt="shape"></li>
                <li class="shape-3 scene"><img data-depth="-2" src="assets/images/about/shape-15.png" alt="shape"></li>
                <li class="shape-4">
                    <span></span>
                </li>
                <li class="shape-5 scene"><img data-depth="2" src="assets/images/about/shape-07.png" alt="shape"></li>
            </ul>
        </div> -->

        <!--===================
        main content start here 
        ==================-->
        
        @php
            use App\Models\ActDocs;
            use App\Models\ActText;
            use Carbon\Carbon;
            $data = ActText::first();
            $acts = ActDocs::latest()->get();
        @endphp
        
        <!-- shmu act design here -->
        <div class="main-act pt-5">
            <div class="shmu-act container">
                <div class="shmu-act-main">
                    <div class="shmu-act-heading">
                        <h4>
                            {{$data->act_heading}}
                        </h4>
                        <p>
                            ( Ordinance NO. I OF 1972 )
                        </p>
                    </div>
                    <div class="shmu-act-body">
                        <div class="act-body-details">
                            <h6>
                                {{$data->act_title}}
                            </h6>
                            {!!$data->act_text!!}
                        </div>
                        <ul class="all-act-list d-block list-group list-group-horizontal-xxl">
                            <h6 class="m-0">
                                বিস্তারিত: 
                            </h6>
                            @foreach ($acts as $act)
                                @php
                                    
                                    $formattedCreatedAt = Carbon::parse($act->created_at)->format('Y-M-d');

                                    [$year, $month, $day] = explode('-', $formattedCreatedAt);
                                @endphp
                            <li class="list-group-item">
                                <a target="_blank" download href="{{$act->actDoc_file}}">
                                    <span class="d-block">{{$month.' '. $day. ','. $year}}</span>
                                    <span class="display-6">{{$act->actDoc_heading}}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--===================
        main content end here 
        ==================-->

        <div class="entry_content text-center">
            
        </div>
@endsection