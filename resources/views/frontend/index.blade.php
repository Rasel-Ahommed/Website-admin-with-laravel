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
            <!--=       Auto Scroll notice Area Start      	=-->
            <!--=====================================-->

            @php
                use Illuminate\Support\Facades\DB;
                // academic data
                $notices = DB::table('notice')
                    ->latest()
                    ->take(2)
                    ->get();

            @endphp
            <div id="example-1">
                @foreach ($notices as $notice)
                    @php
                        // reomove html tag
                        $notice_text = strip_tags($notice->notice_text);
                    @endphp
                    <a href="frontNotice">{{ $notice_text }} |</a>
                @endforeach
            </div>
            <!--=====================================-->
            <!--=       Auto Scroll notice Area End      	=-->
            <!--=====================================-->
            <!--=====================================-->
            <!--=       Hero Banner Area Start      =-->
            <!--=====================================-->
            @php
                use App\Models\HomeBanner;
                $datas = HomeBanner::all();
            @endphp

            <div class="hero-banner hero-style-3 bg-image">
                <div class="swiper university-activator">
                    <div class="swiper-wrapper">
                        @foreach ($datas as $data)
                            <div class="swiper-slide">
                                <img data-transform-origin="center center" data-src="{{$data->img}}"
                                    class="swiper-lazy" alt="image" />
                                <div class="thumbnail-bg-content">
                                    <div class="container SHMU-animated-shape">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="banner-content">
                                                    <span class="subtitle" data-sal="slide-up" data-sal-duration="1000">{{$data->welcome_title}}</span>
                                                    <h1 class="title" data-sal-delay="100" data-sal="slide-up"
                                                        data-sal-duration="1000">
                                                        {{$data->title}}
                                                    </h1>
                                                    <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                                                        {{$data->text}}
                                                    </p>
                                                    <div class="banner-btn" data-sal-delay="400" data-sal="slide-up"
                                                        data-sal-duration="1000">
                                                        <a href="program-all" class="edu-btn btn-secondary">Find courses <i
                                                                class="icon-4"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="hero-slider-bg-controls">
                        <div class="swiper-slide-controls slide-prev">
                            <i class="icon-west"></i>
                        </div>
                        <div class="swiper-slide-controls slide-next">
                            <i class="icon-east"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--=====================================-->
            <!--=       Features Area Start      	=-->
            <!--=====================================-->
            <!-- Start Categories Area  -->

            @php
                use App\Models\NewsAndEvents;
                use App\Models\EventImage;
                $events = NewsAndEvents::latest()
                    ->take(3)
                    ->get();
            @endphp
            <div class="features-area-3">
                <div class="container">
                    <div class="features-grid-wrap">
                        @foreach ($events as $key => $event)
                            @php
                                // Convert s_time and e_time to 12-hour format with AM/PM
                                $startTime = \Carbon\Carbon::parse($event->s_time)->format('h:i A');
                                $endTime = \Carbon\Carbon::parse($event->e_time)->format('h:i A');

                                // formate date
                                $formattedCreatedAt = \Carbon\Carbon::parse($event->date)->format('y-M-d');

                                [$year, $month, $day] = explode('-', $formattedCreatedAt);

                                $img = EventImage::where('event_id', $event->id)->first();
                            @endphp

                            <div class="features-box color-primary-style SHMU-svg-animate">
                                <div class="content-img">
                                    @php
                                        if ($img) {
                                            $imgSrc = $img->e_img;

                                            // Display the image
                                            echo "<img src=\"$imgSrc\" alt=\"Blog Images\">";
                                        } else {
                                            $imgSrc = asset('assets/images/no-image-icon.png');
                                            echo "<img src=\"$imgSrc\" alt=\"Blog Images\">";
                                        }
                                    @endphp
                                </div>
                                <div class="content">
                                    <h6 class="title fs-4 fw-light d-flex m-0">
                                        <p class="event-date">
                                            <span>{{ $day }}<span
                                                    class="d-block">{{ $month . ',' . $year }}</span></span>
                                        </p>
                                        <a class="limited" href="event">{{ $event->event_title }}</a>
                                    </h6>
                                </div>
                            </div>
                        @endforeach


                        <a href="event">
                            <div class="right-arrow-event">
                                <i class="ri-arrow-right-s-line"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Categories Area  -->
            <!--=====================================-->
            <!--=       Notice Area Start      		=-->
            <!--=====================================-->
            <div class="edu-about-area about-style-3 pb-1">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        
                        <div class="col-lg-8 col-md-6">
                            <!-- About us start -->

                            <div class="about-&-speak-section">
                                <div class="container">
                                    <div class="about-message-content row-diseable align-items-center"
                                        data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        

                                @php
                                    use App\Models\AboutUs;
                                    $data = AboutUs::first();
                                @endphp
                                        <div class="col-md-7-diseable">
                                            <div class="about-content">
                                                <div class="section-title section-left">
                                                    <!--  <span class="pre-title">About Us</span> -->
                                                    <h2 class="title">
                                                        {{$data->title}}
                                                    </h2>
                                                    <span class="shape-line"><i class="icon-19"></i></span>
                                                    <div class="text-justify"> 
                                                        {!!$data->text!!}
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- about us and message from vc end -->
                            
                        </div>
                        <!-- notice start here -->

                        @php
                            use Carbon\Carbon; //formate time and date

                            // academic data
                            $notices = DB::table('notice')
                                ->where('is_academic', 'Academic')
                                ->latest()
                                ->take(3)
                                ->get();

                            // Administrative data
                            $notices2 = DB::table('notice')
                                ->where('is_academic', 'Administrative')
                                ->latest()
                                ->take(3)
                                ->get();
                        @endphp
                        <div class="col-lg-4 col-md-6 py-5">
                            <div class="w-100">
                                <div class="text-center">
                                    <h3 class="m-0 border border-2 border-success">Notice</h3>
                                </div>
                            </div>
                            <div class="">
                                <div class="btn-grid-size">
                                    <button id="notice-btn1" onclick="noticeBtnToggle('notice-btn1')" type="button"
                                        class="btn btn-outline-success btn-success fs-3 notice-toggle-btn">
                                        Academic
                                    </button>
                                    <button id="notice-btn2" onclick="noticeBtnToggle('notice-btn2')" type="button"
                                        class="btn btn-outline-success fs-3 notice-toggle-btn">
                                        Administrative
                                    </button>
                                </div>
                                <!-- <div class="notice-search w-10">
                                                <div class="notice-search-box">
                                                  <div class="search-box">
                                                    <button class="btn-search"><i class="icon-2"></i></button>
                                                    <input type="text" class="input-search" placeholder="Type to Search..." />
                                                  </div>
                                                </div>
                                              </div> -->
                            </div>
                            <div class="all-notice">
                                <div class="notice-box academic">
                                    <ul class="notice-list">
                                        @foreach ($notices as $notice)
                                            @php
                                                // remove html tag
                                                $notice_text = strip_tags($notice->notice_text);

                                                $formattedCreatedAt = Carbon::parse($notice->created_at)->format('y-M-d');

                                                [$year, $month, $day] = explode('-', $formattedCreatedAt);
                                            @endphp
                                            <li class="d-flex align-items-center">
                                                <p class="notice-date me-3">
                                                    {{ $day }}<span
                                                        class="d-block">{{ $month . ',' . $year }}</span>
                                                </p>
                                                <p class="notice-content">
                                                    <a href="{{ asset('storage/notice/' . $notice->notice_file) }}"
                                                        download="{{ $notice->notice_file }}">
                                                        {{ $notice_text }}
                                                    </a>
                                                </p>
                                            </li>
                                        @endforeach
                                        <!-- <li class="d-flex align-items-center">
                                                      <p class="notice-date">21<span class="d-block">Dec,23</span></p>
                                                      <p class="notice-content ms-3">
                                                        <a href="notice.html">
                                                          জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এঁর ১০৩ তম
                                                          জন্মদিবস উপলক্ষে বঙ্গবন্ধুর প্রতিকৃতিতে পুষ্পস্তবক
                                                          প্রদান করে শ্রদ্ধা নিবেদন
                                                        </a>
                                                      </p>
                                                    </li>
                                                    <li class="d-flex align-items-center">
                                                      <p class="notice-date">21<span class="d-block">Dec,23</span></p>
                                                      <p class="notice-content ms-3">
                                                        <a href="notice.html">
                                                          জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এঁর
                                                          জন্মবার্ষিকী ও জাতীয় শিশু দিবসের কর্মসূচি
                                                        </a>
                                                      </p>
                                                    </li> -->
                                    </ul>
                                </div>
                                <div class="notice-box administrative">
                                    <ul class="notice-list">
                                        @foreach ($notices2 as $notice)
                                            @php
                                                // remove html tag
                                                $notice_text = strip_tags($notice->notice_text);

                                                $formattedCreatedAt = Carbon::parse($notice->created_at)->format('y-M-d');

                                                [$year, $month, $day] = explode('-', $formattedCreatedAt);
                                            @endphp
                                            <li class="d-flex align-items-center">
                                                <p class="notice-date me-3">
                                                    {{ $day }}<span
                                                        class="d-block">{{ $month . ',' . $year }}</span>
                                                </p>
                                                <p class="notice-content">
                                                    <a href="{{ asset('storage/notice/' . $notice->notice_file) }}"
                                                        download="{{ $notice->notice_file }}">
                                                        {{ $notice_text }}
                                                    </a>
                                                </p>
                                            </li>
                                        @endforeach
                                        <!-- <li class="d-flex align-items-center">
                                                      <p class="notice-date">21<span class="d-block">Dec,23</span></p>
                                                      <p class="notice-content ms-3">
                                                        <a href="notice.html">
                                                          জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এঁর ১০৩ তম
                                                          জন্মদিবস উপলক্ষে বঙ্গবন্ধুর প্রতিকৃতিতে পুষ্পস্তবক
                                                          প্রদান করে শ্রদ্ধা নিবেদন
                                                        </a>
                                                      </p>
                                                    </li>
                                                    <li class="d-flex align-items-center">
                                                      <p class="notice-date">21<span class="d-block">Dec,23</span></p>
                                                      <p class="notice-content ms-3">
                                                        <a href="notice.html">
                                                          জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এঁর
                                                          জন্মবার্ষিকী ও জাতীয় শিশু দিবসের কর্মসূচি
                                                        </a>
                                                      </p>
                                                    </li> -->
                                    </ul>
                                </div>
                            </div>
                            <!-- <table
                                                id="example1"
                                                class="table-striped bordered table-hover dataTable no-footer"
                                                cellspacing="0"
                                                width="100%"
                                                style="width: 100%"
                                                role="grid"
                                                aria-describedby="example1_info"
                                               >
                                                <thead>
                                                  <tr class="w-100">
                                                    <td>SL</td>
                                                    <td>Notice</td>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>10.</td>
                                                    <td>
                                                      <a href="#"
                                                        >
                                                        জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এঁর
                                                          জন্মবার্ষিকী ও জাতীয় শিশু দিবসের কর্মসূচি</a
                                                      >
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td>9.</td>
                                                    <td>
                                                      <a href="#"
                                                        >পবিত্র রমজান ( হিজরী- ১৪৪৪, ২০২৩
                                                          খ্রিস্টাব্দ)মাসব্যাপী অত্র বিশ্ববিদ্যালয়ের পরিবর্তিত
                                                          সময়সূচীর নোটিশ</a
                                                      >
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td>8.</td>
                                                    <td>
                                                      <a href="#"
                                                        >মহান স্বাধীনতা দিবসে স্মৃতিসৌধে শ্রদ্ধা নিবেদন করেন
                                                          উপাচার্য মহোদয় এবং বিশ্ববিদ্যালয়ের কর্মকর্তা ও
                                                          কর্মচারীগন</a
                                                      >
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td>7.</td>
                                                    <td>
                                                      <a href="#"
                                                        >জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এঁর ১০৩ তম
                                                          জন্মদিবস উপলক্ষে বঙ্গবন্ধুর প্রতিকৃতিতে পুষ্পস্তবক
                                                          প্রদান করে শ্রদ্ধা নিবেদন করেন উপাচার্য মহোদয় ও
                                                          শেহামেবি কর্মকর্তাবৃন্দ</a
                                                      >
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td>6.</td>
                                                    <td>
                                                      <a href="#"
                                                        >মহান স্বাধীনতা দিবসে স্মৃতিসৌধে শ্রদ্ধা নিবেদন করেন
                                                          উপাচার্য মহোদয় এবং বিশ্ববিদ্যালয়ের কর্মকর্তা ও
                                                          কর্মচারীগন</a
                                                      >
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table> -->
                            <div class="w-100 my-3 d-flex justify-content-between align-items-center">
                                <div>
                                    <a href="frontNotice" type="button" class="btn btn-success btn-lg">Archive</a>
                                </div>
                                <div>
                                    <div>
                                        <div id="pagination-container"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="shape-group">
                    <li class="shape-5">
                        <img class="rotateit" src="assets/images/about/shape-13.png" alt="Shape" />
                    </li>
                    <li class="shape-6">
                        <span></span>
                    </li>
                </ul>
            </div>
            <!-- notice area end -->
            <!--=====================================-->
            <!--=       Event Area Start      		=-->
            <!--=====================================-->
            <!-- Start Event Area  -->
            <!-- <div class="edu-event-area event-area-1 pb-5">
                                        <div class="container SHMU-animated-shape">
                                          <ul class="shape-group">
                                            <li
                                              class="shape-1"
                                              data-sal-delay="500"
                                              data-sal="fade"
                                              data-sal-duration="200"
                                            >
                                              <img
                                                class="rotateit"
                                                src="assets/images/about/shape-13.png"
                                                alt="Shape"
                                              />
                                            </li>
                                            <li
                                              class="shape-2 scene"
                                              data-sal-delay="500"
                                              data-sal="fade"
                                              data-sal-duration="200"
                                            >
                                              <span data-depth=".9"></span>
                                            </li>
                                          </ul>
                                        </div>
                                      </div> -->
            <!-- End Event Area  -->
            <!--=====================================-->
            <!--=       About us and message from vc Area Start      	=-->
            <!--=====================================-->

            @php
                use App\Models\viceChancellor;

                $data = viceChancellor::first();
                if (!$data) {
                    return abort(404);
                }
            @endphp
            

            <section class="director-section pb-5">
                <div class="director-message-content container row m-auto" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="col-md-9">
                        <div class="director-message">
                            <h3>Massage from vice chancellor</h3>
                            
                            {!!$data->message!!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="director-img">
                            <img class="director-img-full" src="{{$data->img}}"
                                alt="building" />
                            <div class="director-img-caption">
                                <p class="mb-0">{{$data->name}}</p>
                                <p class="mb-0">VC of SHMU</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=====================================-->
            <!--=       	APA Area Start      =-->
            <!--=====================================-->

            @php
                use App\Models\APA;
                use App\Models\ApaName;

                $apa_names = ApaName::all();
            @endphp

            <div class="apa-section bg-gradient-down">
                <div class="container">
                    <div class="section-content-apa">
                        <div class="section-title text-center section-left">
                            <!-- <span class="pre-title">APA</span> -->
                            <h2 class="title">Annual Performance Agreement</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <div class="row">
                        @foreach ($apa_names as $apa_name)

                            <div class="col-lg-4 apa-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            <strong>{{$apa_name->name}}</strong>
                                        </h6>
                                        <!-- <p class="card-text"></p> -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="{{$apa_name->img}}" alt="logo"
                                                    width="110" />
                                            </div>
                                            <div class="col-sm-8">
                                                <ul>
                                                @php
                                                    $apas = APA::where('apa_name_id',$apa_name->id)->get();
                                                @endphp
                                                  @foreach ($apas as $apa)
                                                  <li>
                                                      <a href="{{$apa->links}}">{{$apa->headline}}</a>
                                                  </li>
                                                  @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- end apa section -->
            <!--=====================================-->
            <!--=       CounterUp Area Start      	=-->
            <!--=====================================-->
            
            <!--=====================================-->
            <!--=      Affiliat collage Area Start	=-->
            <!--=====================================-->
            <!-- Start Brand Area  -->
            <div class="edu-brand-area brand-area-4 py-5">
                <div class="container">
                    <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <!-- <span class="pre-title">List of affiliats</span> -->
                        <h2 class="title">Affiliate Institute</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    <div class="brand-grid-wrap brand-style-2">

                        {{-- see all institute code  --}}
                        @php
                            use App\Models\InstituteCode;
                            $institutes = InstituteCode::all();
                        @endphp
                        @foreach ($institutes as $institute)
                            <div class="brand-grid">
                                <a href="{{ $institute->web_link }}" target="_blank">
                                    <img src="{{$institute->ins_logo}}"
                                        alt="Brand Logo" />
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- End Brand Area  -->
            <!--=====================================-->
            <!--=       	Campus Area Start      =-->
            <!--=====================================-->
            <!-- Start Campus Area  -->
            @php
                use App\Models\CampusLife;
                $data = CampusLife::first();
            @endphp
            <div class="edu-campus-area py-5">
                <div class="container SHMU-animated-shape pb-5">
                    <div class="row g-5">
                        <div class="col-xl-6" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                            <div class="campus-image-gallery">
                                <div class="campus-thumbnail">
                                    <div class="thumbnail d-md-flex justify-content-end">
                                        <img class="w-75" src="{{$data->img}}" alt="Campus" />
                                    </div>
                                </div>
                                <ul class="shape-group">
                                    <li class="shape-1 scene">
                                        <span data-depth=".8"></span>
                                    </li>
                                    <li class="shape-2 scene">
                                        <img data-depth="1.5" src="assets/images/about/shape-21.png" alt="Shape" />
                                    </li>
                                    <li class="shape-3 scene">
                                        <img data-depth="-1.5" src="assets/images/about/shape-13.png" alt="Shape" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6" data-sal-delay="50" data-sal="slide-left" data-sal-duration="800">
                            <div class="campus-content">
                                <div class="inner">
                                    <div class="section-title section-left">
                                        <!-- <span class="pre-title">Campus</span> -->
                                        <h2 class="title">Campus Life</h2>
                                        <span class="shape-line"><i class="icon-19"></i></span>
                                    </div>
                                    <div class="features-list">
                                        <div class="features-box color-secondary-style">
                                            <div class="icon">
                                                <i class="icon-37 watch-icon"></i>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Residency/Non-Residency</h5>
                                                <p>
                                                    Nostrud exer ciation laboris nis aliqup comodo
                                                    perspiatix omnis iste natus.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="features-box color-primary-style">
                                            <div class="icon">
                                                <i class="icon-38 art-board-icon"></i>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Library</h5>
                                                <p>
                                                    Omnis iste natus error sit voluptatem accusan tium
                                                    doloreque laudantum.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="features-box color-extra05-style">
                                            <div class="icon">
                                                <i class="icon-39 fitness-icon"></i>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">e-Registration</h5>
                                                <p>
                                                    Tempor incididunt ut labore et dolore magna aliqua
                                                    enim minim veniam quis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <ul class="shape-group">
                                    <li class="shape-4 scene">
                                        <span data-depth=".8"></span>
                                    </li>
                                    <li class="shape-5 scene">
                                        <span data-depth="2"></span>
                                    </li>
                                    <li class="shape-6 scene">
                                        <img data-depth="-2" src="assets/images/about/shape-25.png" alt="Shape" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Campus Area  -->
            <!--=====================================-->
            <!--=       CTA Banner Area Start      =-->
            <!--=====================================-->
            <!-- Start Ad Banner Area  -->
            <div class="university-cta-wrapper edu-cta-banner-area bg-image">
                <div class="container">
                    <div class="edu-cta-banner">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                    <h2 class="title">
                                        Get Your Quality Skills
                                        <span class="color-primary">Certificate</span> Through SHMU
                                    </h2>
                                    <a href="program-all" class="edu-btn btn-secondary">Get started now <i
                                            class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-01 scene">
                                <img data-depth="2.5" src="assets/images/cta/shape-10.png" alt="shape" />
                            </li>
                            <li class="shape-02 scene">
                                <img data-depth="-2.5" src="assets/images/cta/shape-09.png" alt="shape" />
                            </li>
                            <li class="shape-03 scene">
                                <img data-depth="-2" src="assets/images/cta/shape-08.png" alt="shape" />
                            </li>
                            <li class="shape-04 scene">
                                <img data-depth="2" src="assets/images/about/shape-13.png" alt="shape" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Ad Banner Area  -->
        @endsection
