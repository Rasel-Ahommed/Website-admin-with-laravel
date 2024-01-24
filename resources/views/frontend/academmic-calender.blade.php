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
                        <h1 class="title">Academic Calender</h1>
                    </div>
                    <ul class="edu-breadcrumb">
                        <li class="breadcrumb-item"><a href="index-one.html">Home</a></li>
                        <li class="separator"><i class="icon-angle-right"></i></li>
                        <li class="breadcrumb-item active" aria-current="page">Academic Calender</li>
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

      <!--=====================================-->

      <div class="academic-calender p-2 text-center container">
        <div class="row">
          <div class="col-12">
            <div class="event-view-all-btn mt-5" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1200">
                <h6 class="view-text text-start">For download the academic calender please click here- <a download href="./assets/images/calendar/academic_calendar.png" class="btn-transparent"><i class="fa fa-download" aria-hidden="true"></i>Download<i class="icon-4"></i></a></h6>
            </div>
          </div>
        </div>
        <div class="calender-img">
          <img
            class="w-100"
            src="./assets/images/calendar/academic_calendar.png"
            alt="Academic Calender"
          />
        </div>
      </div>
      <!-- <div class="row px-5 py-5">
                <img src="assets/images/calendar/academic_calendar.png" alt="" class="image-fluid">
            </div> -->

@endsection
