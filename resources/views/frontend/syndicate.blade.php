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
          Cancel Preloader</span
        >
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
                        <h1 class="title">Our Syndicate</h1>
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

      <!--=====================
                sysdicate list 
            ====================-->

      <div class="syndicate-list">
        <section class="section-bottom">
          <div class="container">
            <div class="section-title text-center section-left">
              <!-- <span class="pre-title"></span> -->
              <h2 class="title">University Syndicate</h2>
              <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row syndicate-member">
                <div class="col-md-4">
                    <div class="member">
                        <div class="member-detail">
                            <div class="member-img">
                                <img loading="lazy" src="./assets/images/administration/IMG-20220510-WA0048.jpg" alt="">
                            </div>
                            <div class="member-content">
                                <div class="member-name">
                                    Professor Dr. Md. Mahbubur Rahman
                                </div>
                                <div class="member-designation">
                                    Vice Chancellor
                                </div>
                                <div class="member-contact">
                                    Email: shmu@example.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="member">
                        <div class="member-detail">
                            <div class="member-img">
                                <img loading="lazy" src="./assets/images/administration/IMG-20220510-WA0048.jpg" alt="">
                            </div>
                            <div class="member-content">
                                <div class="member-name">
                                    Professor Dr. Md. Mahbubur Rahman
                                </div>
                                <div class="member-designation">
                                    Vice Chancellor
                                </div>
                                <div class="member-contact">
                                    Email: shmu@example.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="member">
                        <div class="member-detail">
                            <div class="member-img">
                                <img loading="lazy" src="./assets/images/administration/IMG-20220510-WA0048.jpg" alt="">
                            </div>
                            <div class="member-content">
                                <div class="member-name">
                                    Professor Dr. Md. Mahbubur Rahman
                                </div>
                                <div class="member-designation">
                                    Vice Chancellor
                                </div>
                                <div class="member-contact">
                                    Email: shmu@example.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="member">
                        <div class="member-detail">
                            <div class="member-img">
                                <img loading="lazy" src="./assets/images/administration/IMG-20220510-WA0048.jpg" alt="">
                            </div>
                            <div class="member-content">
                                <div class="member-name">
                                    Professor Dr. Md. Mahbubur Rahman
                                </div>
                                <div class="member-designation">
                                    Vice Chancellor
                                </div>
                                <div class="member-contact">
                                    Email: shmu@example.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="member">
                        <div class="member-detail">
                            <div class="member-img">
                                <img loading="lazy" src="./assets/images/administration/IMG-20220510-WA0048.jpg" alt="">
                            </div>
                            <div class="member-content">
                                <div class="member-name">
                                    Professor Dr. Md. Mahbubur Rahman
                                </div>
                                <div class="member-designation">
                                    Vice Chancellor
                                </div>
                                <div class="member-contact">
                                    Email: shmu@example.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="member">
                        <div class="member-detail">
                            <div class="member-img">
                                <img loading="lazy" src="./assets/images/administration/IMG-20220510-WA0048.jpg" alt="">
                            </div>
                            <div class="member-content">
                                <div class="member-name">
                                    Professor Dr. Md. Mahbubur Rahman
                                </div>
                                <div class="member-designation">
                                    Vice Chancellor
                                </div>
                                <div class="member-contact">
                                    Email: shmu@example.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </section>
      </div>

@endsection