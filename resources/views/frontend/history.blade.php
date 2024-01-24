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
        <!--=       About Area Start      		=-->
        <!--=====================================-->
        <div class="edu-about-area about-style-3">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
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
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image-gallery">
                            <img class="main-img-1" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800" src="assets/images/about/mujib_logo.png" alt="About Image">
                            <ul class="shape-group">
                                <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="2" src="assets/images/about/shape-13.png" alt="Shape">
                                </li>
                                <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="-2" src="assets/images/about/shape-39.png" alt="Shape">
                                </li>
                                <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="2" src="assets/images/about/shape-07.png" alt="Shape">
                                </li>
                                <li class="shape-4" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-5">
                    <img class="rotateit" src="assets/images/about/shape-13.png" alt="Shape">
                </li>
                <li class="shape-6">
                    <span></span>
                </li>
            </ul>
        </div>
        <!--=====================================-->
        <!--=       Brand Area Start      		=-->
        <!--=====================================-->
        <div class="edu-brand-area brand-area-4 gap-lg-bottom-equal">
            <div class="container">
                <div class="brand-grid-wrap brand-style-2">
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/KMCH-Logo.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/Satkhira_Medical_College_logo_prev_ui.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/JMC_Logo_Official.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/Kushtia_Medical_College_logo.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/Magura_Medical_College_logo_prev_ui.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/images-removebg-preview-1.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/1580196858315_prev_ui.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/website_LOGO.x53526.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/239886925_201199132057068_8794747946884330164_n_prev_ui.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/Logo_prev_ui.png" alt="Brand Logo">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Area  -->
@endsection