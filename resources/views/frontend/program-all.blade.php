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
                        <h1 class="title">All Program</h1>
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

        <!--=====================================-->
        <!-- <div class="entry_content text-center">
            <a href="https://shmu.ac.bd/wp-content/uploads/2022/07/%E0%A6%B6%E0%A7%87%E0%A6%96-%E0%A6%B9%E0%A6%BE%E0%A6%B8%E0%A6%BF%E0%A6%A8%E0%A6%BE-%E0%A6%AE%E0%A7%87%E0%A6%A1%E0%A6%BF%E0%A6%95%E0%A7%87%E0%A6%B2-%E0%A6%AC%E0%A6%BF%E0%A6%B6%E0%A7%8D%E0%A6%AC%E0%A6%AC%E0%A6%BF%E0%A6%A6%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%B2%E0%A7%9F-%E0%A6%86%E0%A6%87%E0%A6%A8-.pdf">শেখ হাসিনা মেডিকেল বিশ্ববিদ্যালয় আইন- ২০২১</a>
        </div> -->

        <!-- All program -->
        <div class="edu-course-area course-area-3 py-5 bg-lighten04">
            <div class="container">
              <div class="section-title section-center sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <!-- <span class="pre-title">Courses we offer</span> -->
                <h2 class="title">Academic Programs</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
              </div>
              <div class="isotope-wrapper">
                <!-- <div class="isotop-button isotop-filter">
                    <button data-filter=".undergraduate" class="is-checked">
                      <span class="filter-text">All</span>
                    </button>
                    <button data-filter=".mbbs">
                      <span class="filter-text">MBBS</span>
                    </button>
                    <button data-filter=".nursing">
                      <span class="filter-text">Nursing</span>
                    </button>
                  </div> -->
                <div class="row justify-content-center">
                  <!-- Start Single Course  -->
                  <div class="col-md-6 col-lg-4 isotope-item undergraduate mbbs">
                    <div class="edu-course course-style-3 sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                      <div class="inner">
                        <div class="thumbnail">
                          <a href="course-details.html">
                            <img src="assets/images/course/course-08.jpg" alt="Course Meta">
                          </a>
                          <div class="time-top">
                            <span class="duration"><i class="icon-61"></i>Online + Onsite</span>
                          </div>
                        </div>
                        <div class="content">
                          <span class="course-level">Faculty</span>
                          <h5 class="title">
                            <a href="course-details.html">MBBS</a>
                          </h5>
                          <ul>
                            <li>
                              <a href="https://shmu.ac.bd/faculty-of-medicine">Faculty of MBBS</a>
                            </li>
                            <li>
                              <a href="https://shmu.ac.bd/faculty-of-basic-science-and-para-clinical-science" style="font-size: small;">
                                Basic Science and para clinical Science
                            </a>
                            </li>
                            <li>
                              <a href="https://shmu.ac.bd/faculty-of-nursing">Faculty of Medicine</a>
                            </li>
                          </ul>
                          <div class="read-more-btn">
                            <a class="edu-btn btn-small btn-secondary" href="course-details.html">Learn More <i class="icon-4"></i></a>
                          </div>
                          <div class="course-rating">
                            <div class="rating">
                              <i class="icon-23"></i>
                              <i class="icon-23"></i>
                              <i class="icon-23"></i>
                              <i class="icon-23"></i>
                              <i class="icon-23"></i>
                            </div>
                            <span class="rating-count">(4.7 /9 Rating)</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Single Course  -->
                  <!-- Start Single Course  -->
                  <div class="col-md-6 col-lg-4 isotope-item undergraduate nursing">
                    <div class="edu-course course-style-3 sal-animate" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                      <div class="inner">
                        <div class="thumbnail">
                          <a href="course-details.html">
                            <img src="assets/images/course/course-09.jpg" alt="Course Meta">
                          </a>
                          <div class="time-top">
                            <span class="duration"><i class="icon-61"></i>Online + Onsite</span>
                          </div>
                        </div>
                        <div class="content">
                          <span class="course-level">Faculty</span>
                          <h5 class="title">
                            <a href="course-details.html">Nursing</a>
                          </h5>
                          <ul>
                            <li>
                              <a href="https://shmu.ac.bd/faculty-of-medicine">Nursing</a>
                            </li>
                            <li>
                              <a href="https://shmu.ac.bd/faculty-of-basic-science-and-para-clinical-science">BDS</a>
                            </li>
                            <li>
                              <a href="https://shmu.ac.bd/faculty-of-nursing">Nursing</a>
                            </li>
                          </ul>
                          <div class="read-more-btn">
                            <a class="edu-btn btn-small btn-secondary" href="course-details.html">Learn More <i class="icon-4"></i></a>
                          </div>
                          <div class="course-rating">
                            <div class="rating">
                              <i class="icon-23"></i>
                              <i class="icon-23"></i>
                              <i class="icon-23"></i>
                              <i class="icon-23"></i>
                              <i class="icon-23"></i>
                            </div>
                            <span class="rating-count">(4.7 /9 Rating)</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Single Course  -->
                </div>
              </div>
            </div>
            <ul class="shape-group">
              <li class="shape-1">
                <img class="d-block-shape-light" data-depth="2" src="assets/images/others/map-shape-3.png" alt="Shape">
                <img class="d-none-shape-dark" data-depth="2" src="assets/images/others/3-Home-1.png" alt="Shape">
              </li>
              <li class="shape-2">
                <img class="d-block-shape-light" data-depth="2" src="assets/images/others/map-shape-3.png" alt="Shape">
                <img class="d-none-shape-dark" data-depth="2" src="assets/images/others/dark-map-shape-3.png" alt="Shape">
              </li>
            </ul>
          </div>

@endsection