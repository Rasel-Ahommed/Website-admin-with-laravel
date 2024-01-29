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
                                <h1 class="title">Event</h1>
                            </div>
                            <ul class="edu-breadcrumb">
                                <li class="breadcrumb-item"><a href="index-one.html">Home</a></li>
                                <li class="separator"><i class="icon-angle-right"></i></li>
                                <li class="breadcrumb-item">Notice</li>
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
            <!-- Start Event Area  -->

            @php
                use App\Models\NewsAndEvents;
                use App\Models\EventImage;
                use Carbon\Carbon;
                $events = NewsAndEvents::latest()->paginate(10);
            @endphp

            <div class="edu-event-area event-area-1 py-5">
                <div class="container SHMU-animated-shape">
                    <div class="row g-5">

                        @foreach ($events as $key => $event)
                            @php
                                // Convert s_time and e_time to 12-hour format with AM/PM
                                $startTime = Carbon::parse($event->s_time)->format('h:i A');
                                $endTime = Carbon::parse($event->e_time)->format('h:i A');

                                // formate date
                                $formattedCreatedAt = Carbon::parse($event->date)->format('y-M-d');

                                [$year, $month, $day] = explode('-', $formattedCreatedAt);

                                // get event image 
                                $img = EventImage::where('event_id', $event->id)->first();

                            @endphp
                           

                            <!-- Start Event Grid  -->
                            <div class="col-lg-3 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                                <div class="edu-event event-style-1">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="event1.html">
                                                @php
                                                    if ($img) {
                                                        $imgSrc = asset('storage/eventImage/' . $img->e_img);
                                                        
                                                        // Display the image
                                                        echo "<img src=\"$imgSrc\" alt=\"Blog Images\">";
                                                    }
                                                    else{
                                                        $imgSrc = asset('assets/images/no-image-icon.png');
                                                        echo "<img src=\"$imgSrc\" alt=\"Blog Images\">";
                                                    }
                                                @endphp
                                            </a>
                                            <div class="event-time">
                                                <span><i class="icon-33"></i>{{ $startTime . '-' . $endTime }}</span>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="event-date">
                                                <span class="day">{{$day}}</span>
                                                <span class="month">{{$month}}</span>
                                            </div>
                                            <h6 class="title m-0">
                                                <a href="event1.html">{{$event->event_title}}</a>
                                            </h6>
                                            <p>{{$event->event_text}}</p>
                                            <ul class="event-meta">
                                                <li><i class="icon-40"></i>{{$event->location}}</a></li>
                                            </ul>
                                            <div class="read-more-btn">
                                                <a class="edu-btn btn-small btn-secondary" href="event1.html">Learn More <i
                                                        class="icon-4"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{$events->links()}}
                    <!-- Start Event Grid  -->
                    

                    {{-- <div class="event-view-all-btn" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1200">
                    <h6 class="view-text">The Latest Events from SHMU. <a href="#" class="btn-transparent">See More<i class="icon-4"></i></a></h6>
                </div> --}}

                    <ul class="shape-group">
                        <li class="shape-1" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                            <img class="rotateit" src="assets/images/about/shape-13.png" alt="Shape">
                        </li>
                        <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                            <span data-depth=".9"></span>
                        </li>
                    </ul>
                </div>
            </div>
        @endsection
