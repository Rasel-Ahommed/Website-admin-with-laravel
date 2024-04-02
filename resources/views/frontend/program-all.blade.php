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
           

            <!--=====================================-->
            <!-- <div class="entry_content text-center">
                        <a href="https://shmu.ac.bd/wp-content/uploads/2022/07/%E0%A6%B6%E0%A7%87%E0%A6%96-%E0%A6%B9%E0%A6%BE%E0%A6%B8%E0%A6%BF%E0%A6%A8%E0%A6%BE-%E0%A6%AE%E0%A7%87%E0%A6%A1%E0%A6%BF%E0%A6%95%E0%A7%87%E0%A6%B2-%E0%A6%AC%E0%A6%BF%E0%A6%B6%E0%A7%8D%E0%A6%AC%E0%A6%AC%E0%A6%BF%E0%A6%A6%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%B2%E0%A7%9F-%E0%A6%86%E0%A6%87%E0%A6%A8-.pdf">শেখ হাসিনা মেডিকেল বিশ্ববিদ্যালয় আইন- ২০২১</a>
                    </div> -->

            <!-- All program -->
            <div class="edu-course-area course-area-3 py-5 bg-lighten04">
                <div class="container">
                    <div class="section-title section-center sal-animate" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <!-- <span class="pre-title">Courses we offer</span> -->
                        <h2 class="title">Academic Programs</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    <div class="isotope-wrapper">
                        
                        <div class="row justify-content-center">
                            <!-- Start Single Course  -->
                            @php
                                use App\Models\AcademicProgram;
                                $datas = AcademicProgram::all();
                            @endphp
                            @foreach ($datas as $data)
                                <div class="col-md-6 col-lg-4 isotope-item undergraduate mbbs">
                                    <div class="edu-course course-style-3 sal-animate" data-sal-delay="100"
                                        data-sal="slide-up" data-sal-duration="800">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="course-details.html">
                                                    <img src="{{$data->img}}"
                                                        alt="Course Meta">
                                                </a>
                                                <div class="time-top">
                                                    <span class="duration"><i class="icon-61"></i>{{ $data->time }}</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="course-level">Faculty</span>
                                                <h5 class="title">
                                                    <a href="course-details.html">{{ $data->name }}</a>
                                                </h5>
                                                <ul>
                                                    <li>
                                                        <a href="{{ $data->facultyLink1 }}">{{ $data->faculty1 }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ $data->facultyLink2 }}">{{ $data->faculty2 }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ $data->facultyLink3 }}">{{ $data->faculty3 }}</a>
                                                    </li>
                                                </ul>
                                                <div class="read-more-btn">
                                                    <a class="edu-btn btn-small btn-secondary"
                                                        href="course-details.html">Learn More <i class="icon-4"></i></a>
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
            
        </div>
    @endsection
