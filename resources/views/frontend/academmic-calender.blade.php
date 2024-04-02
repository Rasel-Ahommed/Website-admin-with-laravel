@extends('layout\main')

@section('main-contant')
  <body class="sticky-header">
    

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
      

      <!--=====================================-->
      @php
          use App\Models\AcademicCalender;
          $data = AcademicCalender::first();
      @endphp

      <div class="academic-calender p-2 text-center container">
        <div class="row">
          <div class="col-12">
            <div class="event-view-all-btn mt-5" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1200">
                <h6 class="view-text text-start">For download the academic calender please click here- <a download href="{{$data->img}}" class="btn-transparent"><i class="fa fa-download" aria-hidden="true"></i>Download<i class="icon-4"></i></a></h6>
            </div>
          </div>
        </div>
        <div class="calender-img">
          <img
            class="w-100"
            src="{{$data->img}}"
            alt="Academic Calender"
          />
        </div>
      </div>

@endsection
