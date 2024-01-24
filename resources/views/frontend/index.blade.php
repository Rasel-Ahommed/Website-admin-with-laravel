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
                    <a href="/frontNotice">{{ $notice_text }} |</a>
                @endforeach
            </div>
            <!--=====================================-->
            <!--=       Auto Scroll notice Area End      	=-->
            <!--=====================================-->
            <!--=====================================-->
            <!--=       Hero Banner Area Start      =-->
            <!--=====================================-->
            <div class="hero-banner hero-style-3 bg-image">
                <div class="swiper university-activator">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img data-transform-origin="center center" data-src="assets/images/bg/bg2.jpg"
                                class="swiper-lazy" alt="image" />
                            <div class="thumbnail-bg-content">
                                <div class="container SHMU-animated-shape">
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="banner-content">
                                                <span class="subtitle" data-sal="slide-up" data-sal-duration="1000">Welcome
                                                    to shmu</span>
                                                <h1 class="title" data-sal-delay="100" data-sal="slide-up"
                                                    data-sal-duration="1000">
                                                    shmu Medical University
                                                </h1>
                                                <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                                                    Excepteur sint occaecat cupidatat non proident sunt in
                                                    culpa qui officia deserunt mollit.
                                                </p>
                                                <div class="banner-btn" data-sal-delay="400" data-sal="slide-up"
                                                    data-sal-duration="1000">
                                                    <a href="#" class="edu-btn btn-secondary">Find courses <i
                                                            class="icon-4"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img data-transform-origin="center center" data-src={{ url('assets/images/bg/bg1.jpg') }}
                                class="swiper-lazy" alt="image" />
                            <div class="thumbnail-bg-content">
                                <div class="container SHMU-animated-shape">
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="banner-content">
                                                <span class="subtitle" data-sal="slide-up" data-sal-duration="1000">Welcome
                                                    to shmu</span>
                                                <h1 class="title" data-sal-delay="100" data-sal="slide-up"
                                                    data-sal-duration="1000">
                                                    Research of Shmu
                                                </h1>
                                                <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                                                    Excepteur sint occaecat cupidatat non proident sunt in
                                                    culpa qui officia deserunt mollit.
                                                </p>
                                                <div class="banner-btn" data-sal-delay="400" data-sal="slide-up"
                                                    data-sal-duration="1000">
                                                    <a href="#" class="edu-btn btn-secondary">Find courses <i
                                                            class="icon-4"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img data-transform-origin="center center" data-src="assets/images/bg/bg3.jpg"
                                class="swiper-lazy" alt="image" />
                            <div class="thumbnail-bg-content">
                                <div class="container SHMU-animated-shape">
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="banner-content">
                                                <span class="subtitle" data-sal="slide-up" data-sal-duration="1000">Welcome
                                                    to SHMU</span>
                                                <h1 class="title" data-sal-delay="100" data-sal="slide-up"
                                                    data-sal-duration="1000">
                                                    World Best Program Best University
                                                </h1>
                                                <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                                                    Excepteur sint occaecat cupidatat non proident sunt in
                                                    culpa qui officia deserunt mollit.
                                                </p>
                                                <div class="banner-btn" data-sal-delay="400" data-sal="slide-up"
                                                    data-sal-duration="1000">
                                                    <a href="#" class="edu-btn btn-secondary">Find courses <i
                                                            class="icon-4"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            <div class="features-area-3">
                <div class="container">
                    <div class="features-grid-wrap">
                        <div class="features-box color-primary-style SHMU-svg-animate">
                            <div class="content-img">
                                <img src={{ url('./assets/images/event/event-01.jpg') }} alt="Events Picture" />
                            </div>
                            <div class="content">
                                <h6 class="title fs-4 fw-light d-flex m-0">
                                    <p class="event-date">
                                        <span>21<span class="d-block">Dec,23</span></span>
                                    </p>
                                    <a class="limited" href="event1.html">মহান স্বাধীনতা দিবসে স্মৃতিসৌধে শ্রদ্ধা নিবেদন
                                        করেন
                                        উপাচার্য মহোদয় এবং বিশ্ববিদ্যালয়ের কর্মকর্তা ও
                                        কর্মচারীগন।</a>
                                </h6>
                            </div>
                        </div>
                        <div class="features-box color-secondary-style SHMU-svg-animate">
                            <div class="content-img">
                                <img src={{ url('./assets/images/event/rsz_1rsz_260220231-1.jpg') }}
                                    alt="Events Picture" />
                            </div>
                            <div class="content">
                                <h6 class="title fs-4 fw-light d-flex m-0">
                                    <p class="event-date">
                                        <span>21<span class="d-block">Dec,23</span></span>
                                    </p>
                                    <a class="limited" href="event1.html">জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এঁর
                                        জন্মবার্ষিকী ও
                                        জাতীয় শিশু দিবসের কর্মসূচি।</a>
                                </h6>
                            </div>
                        </div>
                        <div class="features-box color-extra02-style SHMU-svg-animate">
                            <div class="content-img">
                                <img src={{ url("./assets/images/event/hasina-daughter's tale.jpg") }}
                                    alt="Events Picture" />
                            </div>
                            <div class="content">
                                <h6 class="title fs-4 fw-light d-flex m-0">
                                    <p class="event-date">
                                        <span>21<span class="d-block">Dec,23</span></span>
                                    </p>
                                    <a class="limited" href="/event">“Hasina: A Daughter’s Tale” শীর্ষক চলচিত্র বড় পর্দায়
                                        ১৬
                                        মার্চ, ২০২৩ তারিখে প্রদর্শন সম্পর্কিত বিজ্ঞপ্তি
                                    </a>
                                </h6>
                            </div>
                        </div>
                        <a href="event.html">
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
                        <!-- <div class="col-lg-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                                                <div class="about-content">
                                                    <div class="section-title section-left">
                                                        <span class="pre-title">About Us</span>
                                                        <h2 class="title">We Provide Best <span class="color-primary">Education</span> Services For You</h2>
                                                        <span class="shape-line"><i class="icon-19"></i></span>
                                                        <p>Sheikh Hasina Medical University, (Common known as Khulna Medical University) is a Government Medical University situated in Khulna, Bangladesh. It has been established for the supervisors of all medical colleges and nursing colleges of Khulna division.

                                                            The Prime Minister's Office (PMO) approved the proposal of establishing Sheikh Hasina Medical University in Khulna.
                                                            
                                                            Sheikh Hasina Medical University, established in Khulna division to supervise whether these public and private medical institutions will be functioning properly. In this, Sheikh Hasina Medical University will be responsible for the medical and dental colleges, nursing colleges, institute of health technology (IHT), medical education institutes.</p>
                                                    </div>
                                                </div>
                                            </div> -->
                        <div class="col-lg-8 col-md-6">
                            <!-- About us start -->

                            <div class="about-&-speak-section">
                                <div class="container">
                                    <div class="about-message-content row-diseable align-items-center"
                                        data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <!-- <div class="col-md-5 py-5">
                                              <div class="building-banner">
                                                <img
                                                  class="img-fluid"
                                                  src="./assets/images/about/sheikh-hasina-medical.webp"
                                                  alt="building"
                                                />
                                              </div>
                                            </div> -->
                                        <div class="col-md-7-diseable">
                                            <div class="about-content">
                                                <div class="section-title section-left">
                                                    <!--  <span class="pre-title">About Us</span> -->
                                                    <h2 class="title">
                                                        We Provide Best
                                                        <span class="color-primary">Education</span>
                                                        Services For You
                                                    </h2>
                                                    <span class="shape-line"><i class="icon-19"></i></span>
                                                    <p class="text-justify">
                                                        Sheikh Hasina Medical University, (Common known as
                                                        Khulna Medical University) is a Government Medical
                                                        University situated in Khulna, Bangladesh. It has
                                                        been established for the supervisors of all medical
                                                        colleges and nursing colleges of Khulna division.
                                                        The Prime Minister's Office (PMO) approved the
                                                        proposal of establishing Sheikh Hasina Medical
                                                        University in Khulna. Sheikh Hasina Medical
                                                        University, established in Khulna division to
                                                        supervise whether these public and private medical
                                                        institutions will be functioning properly. In this,
                                                        Sheikh Hasina Medical University will be responsible
                                                        for the medical and dental colleges, nursing
                                                        colleges, institute of health technology (IHT),
                                                        medical education institutes.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- about us and message from vc end -->
                            <!-- <div class="about-image-gallery">
                                        <img
                                          class="main-img-1"
                                          data-sal-delay="100"
                                          data-sal="slide-up"
                                          data-sal-duration="800"
                                          src="assets/images/about/mujib_logo.png"
                                          alt="About Image"
                                        />
                                        <ul class="shape-group">
                                          <li
                                            class="shape-1 scene"
                                            data-sal-delay="500"
                                            data-sal="fade"
                                            data-sal-duration="200"
                                          >
                                            <img
                                              data-depth="2"
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
                                            <img
                                              data-depth="-2"
                                              src="assets/images/about/shape-39.png"
                                              alt="Shape"
                                            />
                                          </li>
                                          <li
                                            class="shape-3 scene"
                                            data-sal-delay="500"
                                            data-sal="fade"
                                            data-sal-duration="200"
                                          >
                                            <img
                                              data-depth="2"
                                              src="assets/images/about/shape-07.png"
                                              alt="Shape"
                                            />
                                          </li>
                                          <li
                                            class="shape-4"
                                            data-sal-delay="500"
                                            data-sal="fade"
                                            data-sal-duration="200"
                                          >
                                            <span></span>
                                          </li>
                                        </ul>
                                      </div> -->
                            <!-- <div
                                        class="section-title section-center"
                                        data-sal-delay="150"
                                        data-sal="slide-up"
                                        data-sal-duration="800"
                                      >
                                        <span class="pre-title">Events & News</span>
                                        <h2 class="title">Events & News</h2>
                                        <span class="shape-line"><i class="icon-19"></i></span>
                                      </div> -->
                            <!-- <div class="row g-5"> -->
                            <!-- Start Event Grid  -->
                            <!-- <div
                                          class="col-lg-6"
                                          data-sal-delay="100"
                                          data-sal="slide-up"
                                          data-sal-duration="800"
                                        >
                                          <div class="edu-event event-style-1">
                                            <div class="inner">
                                              <div class="thumbnail">
                                                <a href="event-details.html">
                                                  <img
                                                    src="assets/images/event/rsz_1rsz_260220231-1.jpg"
                                                    alt="Blog Images"
                                                  />
                                                </a>
                                                <div class="event-time">
                                                  <span><i class="icon-33"></i>08:00AM-10:00PM</span>
                                                </div>
                                              </div>
                                              <div class="content">
                                                <div class="event-date">
                                                  <span class="day">30</span>
                                                  <span class="month">SEP</span>
                                                </div>
                                                <h5 class="title">
                                                  <a href="event1.html">
                                                    মহান স্বাধীনতা দিবসে স্মৃতিসৌধে শ্রদ্ধা নিবেদন করেন
                                                    উপাচার্য মহোদয় এবং বিশ্ববিদ্যালয়ের কর্মকর্তা ও
                                                    কর্মচারীগন</a
                                                  >
                                                </h5>
                                                <p>
                                                  Lorem ipsum dolor sit amet consectur elit sed eiusmod
                                                  ex tempor incididunt labore dolore magna.
                                                </p>
                                                <ul class="event-meta">
                                                  <li><i class="icon-40"></i>Khulna, Bangladesh</li>
                                                </ul>
                                                <div class="read-more-btn">
                                                  <a
                                                    class="edu-btn btn-small btn-secondary"
                                                    href="event1.html"
                                                    >Learn More <i class="icon-4"></i
                                                  ></a>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div> -->
                            <!-- End Event Grid  -->
                            <!-- Start Event Grid  -->
                            <!-- <div
                                          class="col-lg-6"
                                          data-sal-delay="200"
                                          data-sal="slide-up"
                                          data-sal-duration="800"
                                        >
                                          <div class="edu-event event-style-1">
                                            <div class="inner">
                                              <div class="thumbnail">
                                                <a href="event-details.html">
                                                  <img
                                                    src="assets/images/event/event-02.jpg"
                                                    alt="Blog Images"
                                                  />
                                                </a>
                                                <div class="event-time">
                                                  <span><i class="icon-33"></i>04:00PM-07:00PM</span>
                                                </div>
                                              </div>
                                              <div class="content">
                                                <div class="event-date">
                                                  <span class="day">25</span>
                                                  <span class="month">DEC</span>
                                                </div>
                                                <h5 class="title">
                                                  <a href="event-details.html"
                                                    >জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এঁর ১০৩ তম
                                                    জন্মদিবস উপলক্ষে বঙ্গবন্ধুর প্রতিকৃতিতে পুষ্পস্তবক
                                                    প্রদান করে শ্রদ্ধা নিবেদন করেন উপাচার্য মহোদয় ও
                                                    শেহামেবি কর্মকর্তাবৃন্দ</a
                                                  >
                                                </h5>
                                                <p>
                                                  Lorem ipsum dolor sit amet consectur elit sed eiusmod
                                                  ex tempor incididunt labore dolore magna.
                                                </p>
                                                <ul class="event-meta">
                                                  <li><i class="icon-40"></i>Khulna, Bangladesh</li>
                                                </ul>
                                                <div class="read-more-btn">
                                                  <a
                                                    class="edu-btn btn-small btn-secondary"
                                                    href="event-details.html"
                                                    >Learn More <i class="icon-4"></i
                                                  ></a>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div> -->
                            <!-- End Event Grid  -->
                            <!-- </div>
                                      <div
                                        class="event-view-all-btn"
                                        data-sal-delay="150"
                                        data-sal="slide-up"
                                        data-sal-duration="1200"
                                      >
                                        <h6 class="view-text">
                                          The Latest Events from SHMU.
                                          <a href="event-grid.html" class="btn-transparent"
                                            >View All <i class="icon-4"></i
                                          ></a>
                                        </h6>
                                      </div> -->
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
                                    <a href="/frontNotice" type="button" class="btn btn-success btn-lg">Archive</a>
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
            <section class="director-section pb-5">
                <div class="director-message-content container row m-auto" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="col-md-9">
                        <div class="director-message">
                            <h3>Massage from vice chancellor</h3>
                            <p class="mb-3">
                                Dear University Community,<br>
                                Welcome! As Vice Chancellor, I lead our pursuit of knowledge and
                                excellence. Our university is an innovation hub, fostering
                                growth and curiosity. Whether you're a student, faculty, or
                                staff member, you're vital to our vision. Embrace collaboration
                                and continuous learning. Together, let's build a vibrant,
                                diverse community. Engage in activities, explore new realms, and
                                contribute to our collective growth. Your unique perspectives
                                drive our success. Thank you for being part of our family. Let's
                                embark on this journey committed to excellence and innovation.
                                Best wishes,
                            </p>
                            <p class="m-0">
                                Vice Chancellor <br>
                                Sheikh Hasina Medical University
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="director-img">
                            <img class="director-img-full" src="./assets/images/administration/IMG-20220510-WA0048.jpg"
                                alt="building" />
                            <div class="director-img-caption">
                                <p class="mb-0">Professor Dr. Md. Mahbubur Rahman</p>
                                <p class="mb-0">VC of SHMU</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=====================================-->
            <!--=       	APA Area Start      =-->
            <!--=====================================-->

            <div class="apa-section bg-gradient-down">
                <div class="container">
                    <div class="section-content-apa">
                        <div class="section-title text-center section-left">
                            <!-- <span class="pre-title">APA</span> -->
                            <h2 class="title">Annual Performance Agreement</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 apa-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            <strong>Annual Performance Agreement</strong>
                                        </h6>
                                        <!-- <p class="card-text"></p> -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="./assets/images/apa/apa_cab.webp" alt="logo"
                                                    width="110" />
                                            </div>
                                            <div class="col-sm-8">
                                                <ul>
                                                    <li>
                                                        <a href="apa.html">Annual Performance Agreement</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">1st Quarterly Report</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">2nd Quarterly Report</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">Mid-Term Evaluation</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">সংজোযনী-৪ জাতীয় শুদ্ধাচার কর্মপরিকল্পনা</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 apa-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            <strong>National Integrity Strategy</strong>
                                        </h6>
                                        <!-- <p class="card-text"></p> -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="./assets/images/apa/nis_logo.webp" alt="logo"
                                                    width="110" />
                                            </div>
                                            <div class="col-sm-8">
                                                <ul>
                                                    <li>
                                                        <a href="apa.html">National Integrity Strategy Report 2021-2022-2nd
                                                            Quarter</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">National Integrity Strategy of Bangladesh</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">NIS Committee Formation Instruction</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 apa-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            <strong>E-Governance and Innovation Activities</strong>
                                        </h6>
                                        <!-- <p class="card-text"></p> -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="./assets/images/apa/INNOVATION.webp" alt="logo"
                                                    width="110" />
                                            </div>
                                            <div class="col-sm-8">
                                                <ul>
                                                    <li>
                                                        <a href="apa.html">E-Governance and Innovation Instructions and
                                                            Work
                                                            Plan 2021-2022</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">E-filling training program schedule</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">Course Registration System</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">Social Communication Network</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 apa-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            <strong>Right to Information</strong>
                                        </h6>
                                        <!-- <p class="card-text"></p> -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="./assets/images/apa/infocom.webp" alt="logo"
                                                    width="110" />
                                            </div>
                                            <div class="col-sm-8">
                                                <ul>
                                                    <li>
                                                        <a href="apa.html">Information Preservation Rules</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">Request for information form</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">Right to Information Act 2009</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">RTI Information Demand Form</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 apa-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            <strong>Grievance Redress System</strong>
                                        </h6>
                                        <!-- <p class="card-text"></p> -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="./assets/images/apa/complain.webp" alt="logo"
                                                    width="110" />
                                            </div>
                                            <div class="col-sm-8">
                                                <ul>
                                                    <li>
                                                        <a href="apa.html">Grievance Redress System Guidelines 2015</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">GRS Instructions and Work Plan 2021-2022</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">GRS Online Complain Instructions</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 apa-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title"><strong>Citizen Charter</strong></h6>
                                        <!-- <p class="card-text"></p> -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="./assets/images/apa/Citizens.webp" alt="logo"
                                                    width="110" />
                                            </div>
                                            <div class="col-sm-8">
                                                <ul>
                                                    <li>
                                                        <a href="apa.html">সেবা প্রদান প্রতিশ্রুতি </a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">ফোকাল পয়েন্ট কর্মকর্তা/পরিবীক্ষণ কমিটি
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">ত্রৈমাসিক/বার্ষিক পরিবীক্ষণ/মূল্যায়ন প্রতিবেদন
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">আইন/বিধি/নীতিমালা/পরিপত্র/নির্দেশিকা/
                                                            প্রজ্ঞাপন</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end apa section -->
            <!--=====================================-->
            <!--=       CounterUp Area Start      	=-->
            <!--=====================================-->
            <!--<div class="counterup-area-1 gap-lg-bottom-equal">
                                    <div class="container">
                                        <div class="row g-5">
                                            <div class="col-lg-3 col-sm-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                                                <div class="edu-counterup counterup-style-1">
                                                    <h2 class="counter-item count-number primary-color">
                                                        <span class="odometer" data-odometer-final="29.3">.</span><span>K</span>
                                                    </h2>
                                                    <h6 class="title">STUDENT ENROLLED</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                                                <div class="edu-counterup counterup-style-1">
                                                    <h2 class="counter-item count-number secondary-color">
                                                        <span class="odometer" data-odometer-final="32.4">.</span><span>K</span>
                                                    </h2>
                                                    <h6 class="title">Class Completed</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                                <div class="edu-counterup counterup-style-1">
                                                    <h2 class="counter-item count-number extra02-color">
                                                        <span class="odometer" data-odometer-final="100">.</span><span>%</span>
                                                    </h2>
                                                    <h6 class="title">Satisfaction Rate</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                                                <div class="edu-counterup counterup-style-1">
                                                    <h2 class="counter-item count-number extra05-color">
                                                        <span class="odometer" data-odometer-final="354">.</span><span>+</span>
                                                    </h2>
                                                    <h6 class="title">Top Instructors</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
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
                        <div class="brand-grid">
                            <a href="https://kmc.gov.bd/" target="_blank">
                                <img src="assets/images/college_logo/KMCH-Logo.png" alt="Brand Logo" />
                            </a>
                        </div>
                        <div class="brand-grid">
                            <a href="https://satkhiramch.satkhira.gov.bd/" target="_blank">
                                <img src="assets/images/college_logo/Satkhira_Medical_College_logo_prev_ui.png"
                                    alt="Brand Logo" />
                            </a>
                        </div>
                        <div class="brand-grid">
                            <a href="https://jashoremedicalcollege.org/" target="_blank">
                                <img src="assets/images/college_logo/JMC_Logo_Official.png" alt="Brand Logo" />
                            </a>
                        </div>
                        <div class="brand-grid">
                            <a href="https://hospital.kushtia.gov.bd/" target="_blank">
                                <img src="assets/images/college_logo/Kushtia_Medical_College_logo.png" alt="Brand Logo" />
                            </a>
                        </div>
                        <div class="brand-grid">
                            <a href="https://maguramc.edu.bd/" target="_blank">
                                <img src="assets/images/college_logo/Magura_Medical_College_logo_prev_ui.png"
                                    alt="Brand Logo" />
                            </a>
                        </div>
                        <div class="brand-grid">
                            <a href="#" target="_blank">
                                <img src="assets/images/college_logo/images-removebg-preview-1.png" alt="Brand Logo" />
                            </a>
                        </div>
                        <div class="brand-grid">
                            <a href="#" target="_blank">
                                <img src="assets/images/college_logo/1580196858315_prev_ui.png" alt="Brand Logo" />
                            </a>
                        </div>
                        <div class="brand-grid">
                            <a href="https://asiannursing.edu.bd/" target="_blank">
                                <img src="assets/images/college_logo/website_LOGO.x53526.png" alt="Brand Logo" />
                            </a>
                        </div>
                        <div class="brand-grid">
                            <a href="https://nmnursingcollege.edu.bd/en/" target="_blank">
                                <img src="assets/images/college_logo/239886925_201199132057068_8794747946884330164_n_prev_ui.png"
                                    alt="Brand Logo" />
                            </a>
                        </div>
                        <div class="brand-grid">
                            <a href="worldnursingcollege.com/" target="_blank">
                                <img src="assets/images/college_logo/Logo_prev_ui.png" alt="Brand Logo" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Brand Area  -->
            <!--=====================================-->
            <!--=       	Campus Area Start      =-->
            <!--=====================================-->
            <!-- Start Campus Area  -->
            <div class="edu-campus-area py-5">
                <div class="container SHMU-animated-shape pb-5">
                    <div class="row g-5">
                        <div class="col-xl-6" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                            <div class="campus-image-gallery">
                                <div class="campus-thumbnail">
                                    <div class="thumbnail d-md-flex justify-content-end">
                                        <img class="w-75" src="assets/images/others/campus-01.webp" alt="Campus" />
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
                                    <a href="contact-us.html" class="edu-btn btn-secondary">Get started now <i
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
