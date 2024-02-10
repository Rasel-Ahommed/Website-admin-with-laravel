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
        @php
            use App\Models\FacultyNursing;
            $data = FacultyNursing::first();
        @endphp
        <div class="governer_body">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-4">
                  <figure class="snip1178">
                    <img
                      src="{{asset('storage/deanImg/'.$data->img)}}"
                      alt="sample53"
                    />
                  </figure>
                </div>
                <div class="col-8">
                  <h1>{{$data->name}}</h1>
                  <p>{{$data->post}}</p>
                  <p>Faculty of Nursing</p>
                  <p>Phone: {{ $data->phone}}</p>
                  <p>E-mail: {{ $data->email}}</p>
                </div>
              </div>
            </div>
          </div>
          <!--=====================================-->
          <!--=       faculty features Start  	=-->
          <!--=====================================-->
    
          <!-- <div class="faculty-activities pb-5">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-lg-4 column">
                  <div class="card gr-1">
                    <div class="txt">
                      <h1>
                        strategy
                      </h1>
                    </div>
                    <a href="./faculty-features.html#strategy">more</a>
                    <div class="ico-card">
                      <i class="fa fa-rebel"></i>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 column">
                  <div class="card gr-2">
                    <div class="txt">
                      <h1>
                        Member
                      </h1>
                    </div>
                    <a href="./faculty-features.html#member">more</a>
                    <div class="ico-card">
                      <i class="fa fa-codepen"></i>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 column">
                  <div class="card gr-3">
                    <div class="txt">
                      <h1>
                        Research
                      </h1>
                    </div>
                    <a href="./faculty-features.html#research">more</a>
                    <div class="ico-card">
                      <i class="fa fa-empire"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>     -->
        <!--=====================================-->
        <!--=       Brand Area Start      		=-->
        <!--=====================================-->
        <!-- Start Brand Area  -->
        <!-- <div class="edu-brand-area brand-area-4 gap-lg-bottom-equal">
            <div class="container">
                <div class="brand-grid-wrap brand-style-2">
                    <div class="brand-grid">
                        <img src="assets/images/brand/brand-01.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/brand/brand-02.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/brand/brand-03.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/brand/brand-04.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/brand/brand-05.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/brand/brand-06.png" alt="Brand Logo">
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Brand Area  -->
        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
@endsection