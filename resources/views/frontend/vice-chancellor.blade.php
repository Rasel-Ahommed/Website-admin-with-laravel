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
        <!--=        Team Area Start            =-->
        <!--=====================================-->

@php
    use App\Models\viceChancellor;

    $data = viceChancellor::first();
        if(!$data){
            return abort(404);
        }
@endphp

        <div class="edu-team-details-area py-5">
            <div class="container">
                <div class="row row--40">
                    <div class="col-lg-4">
                        <div class="team-details-thumb">
                            <div class="thumbnail">
                                <img src="{{asset('storage/chancellorImg/'.$data->img)}}" alt="Vice Chancellor">
                            </div>
                            <ul class="social-share">
                                <li><a href="{{$data->webLink}}"><i class="icon-share-alt"></i></a></li>
                                <li><a href="{{$data->facebook}}"><i class="icon-facebook"></i></a></li>
                                <li><a href="{{$data->Twitter}}"><i class="icon-twitter"></i></a></li>
                                <li><a href="{{$data->linkedIn}}"><i class="icon-linkedin2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="team-details-content">
                            <div class="main-info">
                                <span class="subtitle">Vice Chancellor</span>
                                <p>{{$data->name}}</p>
                                <span class="designation">{{$data->degree}}</span>
                            </div>
                            <div class="bio-describe">
                                <h4 class="title">About Me</h4>
                               {!!$data->about!!}
                            </div>
                            <div class="contact-info">
                                <h4 class="title">Contact Me</h4>
                                <ul>
                                    <li><span>Address:</span>{{$data->address}}</li>
                                    <li><span>Email:</span><a href="mailto:{{$data->email}}" target="_blank">{{$data->email}}</a></li>
                                    <li><span>Phone:</span><a href="tel:{{$data->phone}}">{{$data->phone}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================================-->
        <!--=        Team Area Start       	=-->
        <!--=====================================-->
        <div class="edu-team-area team-area-2 pb-5">
            <div class="container">
                <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">Office</span>
                    <h2 class="title">VC's Office Member</h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
      
                <div class="row g-5">
                    @php
                    use App\Models\vcOfficeMember;
                    $datas = vcOfficeMember::all();
                @endphp
                @foreach ($datas as $data)
                
                    <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-team-grid team-style-2">
                            <div class="inner">
                                <div class="thumbnail-wrap">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="{{asset('storage/vc-office-member/'.$data->img)}}" alt="team images">
                                        </a>
                                    </div>
                                    <ul class="team-share-info">
                                        <li><a href="{{$data->facebook}}"><i class="icon-facebook"></i></a></li>
                                        <li><a href="{{$data->twitter}}"><i class="icon-twitter"></i></a></li>
                                        <li><a href="{{$data->linkedin}}"><i class="icon-linkedin2"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="team-details.html">{{$data->name}}</a></h5>
                                    <span class="designation">{{$data->post}}</span>
                                    <p>Office of the Vice-Chancellor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--=====================================-->
        
@endsection