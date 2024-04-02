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

        <!--==================
                member list
            ===================-->

            <div class="syndicate-list">
                <section class="section-bottom">
                  <div class="container">
                    <div class="section-title text-center section-left">
                      <!-- <span class="pre-title"></span> -->
                      <h2 class="title">Academic Council</h2>
                      <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    @php
                            use App\Models\AcademicCouncil;

                            $datas = AcademicCouncil::get();
                        @endphp
                        <div class="row syndicate-member">
                            @foreach ($datas as $data)
                            <div class="col-md-4">
                                <div class="member">
                                    <div class="member-detail">
                                        <div class="member-img">
                                            <img loading="lazy" src="{{$data->img}}"
                                                alt="">
                                        </div>
                                        <div class="member-content">
                                            <div class="member-name">
                                               {{$data->name}}
                                            </div>
                                            <div class="member-designation">
                                                {{$data->post}}
                                            </div>
                                            <div class="member-contact">
                                                {{$data->email}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                  </div>
                </section>
              </div>
@endsection