@extends('layout\main')

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
           
            <!-- Mission vission end here -->

            <!-- new mission vission -->

            @php
                use App\Models\MissionVision;
                $data = MissionVision::first();
            @endphp

            <div class="mission-vision-section">
                <div class="mission-vision-content container">
                    <div class="mission-content">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h3 class="m-0">{{ $data->mv_title }}</h3>

                              {{-- mission text here  --}}
                                {!! $data->mv_text !!}

                            </div>
                            <div class="col-md-6">
                                <div class="content-img">
                                    <img class="img-fluid" src="{{$data->mv_img}}"
                                        alt="mission" />
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- vission  --}}

                    @php
                        $data2 = MissionVision::skip(1)
                            ->take(1)
                            ->first();
                    @endphp

                    <div class="vision-content my-5">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="content-img">
                                    <img class="img-fluid" src="{{$data2->mv_img}}" alt="mission" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="m-0">{{ $data2->mv_title }}</h3>

                                {{-- vision text here  --}}
                                {!! $data->mv_text !!}

                                {{-- <p>
                                    Our vision at Sheikh Hasina Medical University is to be a
                                    global leader in medical education, research, and healthcare.
                                    We envision graduates as recognized leaders, contributing to
                                    improved health worldwide. Our focus is on continuous
                                    learning, innovation, and impactful research. We aspire to
                                    cultivate a diverse and culturally competent healthcare
                                    workforce, addressing global health disparities. Through
                                    international collaborations, we aim to exchange knowledge and
                                    advance healthcare practices globally. Our vision extends to
                                    community engagement, actively addressing healthcare needs and
                                    fostering well-being. Through unwavering dedication to our
                                    mission, we strive to shape the future of medicine for the
                                    betterment of humanity.
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--=====================================-->
        @endsection
