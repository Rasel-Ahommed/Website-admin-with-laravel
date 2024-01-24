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
        <!--=        Team Area Start            =-->
        <!--=====================================-->
        <div class="edu-team-details-area py-5">
            <div class="container">
                <div class="row row--40">
                    <div class="col-lg-4">
                        <div class="team-details-thumb">
                            <div class="thumbnail">
                                <img src="assets/images/administration/IMG-20220510-WA0048.jpg" alt="Vice Chancellor">
                            </div>
                            <ul class="social-share">
                                <li><a href="#"><i class="icon-share-alt"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="team-details-content">
                            <div class="main-info">
                                <span class="subtitle">Vice Chancellor</span>
                                <p>Professor Dr. Md. Mahbubur Rahman</p>
                                <span class="designation">MBBS, FCPS (Haematology)</span>
                            </div>
                            <div class="bio-describe">
                                <h4 class="title">About Me</h4>
                                <p>
                                    Greetings! I am Professor Dr. Md. Mahbubur Rahman, and it is my honor to serve as the Vice Chancellor of Sheikh Hasina Medical University. With a profound background in medicine, I hold the degrees of MBBS and FCPS (Haematology), embodying a commitment to excellence in the field of healthcare.
                                </p>
                            </div>
                            <div class="contact-info">
                                <h4 class="title">Contact Me</h4>
                                <ul>
                                    <li><span>Address:</span>Sheikh Hasina Medical University, Khulna</li>
                                    <li><span>Email:</span><a href="mailto:shmu@example.com" target="_blank">shmu@example.com</a></li>
                                    <li><span>Phone:</span><a href="tel:+37(417)683-4409">+37 (417) 683-4409</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================================-->
        <!--=        Team Area Start       	=-->
        <!--=====================================-->
        <div class="edu-team-area team-area-2 pb-5">
            <div class="container">
                <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">Office</span>
                    <h2 class="title">VC's Office Member</h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-team-grid team-style-2">
                            <div class="inner">
                                <div class="thumbnail-wrap">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="assets/images/administration/vice_chancellor_office/Md.-Nurul-Momen.jpg" alt="team images">
                                        </a>
                                    </div>
                                    <ul class="team-share-info">
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="team-details.html">Md. Nurul Momen</a></h5>
                                    <span class="designation">PS of VC (Assistant Registrar)</span>
                                    <p>Office of the Vice-Chancellor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-team-grid team-style-2">
                            <div class="inner">
                                <div class="thumbnail-wrap">
                                    <div class="thumbnail">
                                        <a href="team-details.html">
                                            <img src="assets/images/administration/vice_chancellor_office/Md.-Khirul-Alom.jpg" alt="team images">
                                        </a>
                                    </div>
                                    <ul class="team-share-info">
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="team-details.html">Md Khirul Alom</a></h5>
                                    <span class="designation">Office Assistant</span>
                                    <p>Office of the Vice-Chancellor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-team-grid team-style-2">
                            <div class="inner">
                                <div class="thumbnail-wrap">
                                    <div class="thumbnail">
                                        <a href="team-details.html">
                                            <img src="assets/images/administration/vice_chancellor_office/Md.-Nurul-Islam-Sheikh.jpg" alt="team images">
                                        </a>
                                    </div>
                                    <ul class="team-share-info">
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="team-details.html">Md. Nurul Islam Sheikh</a></h5>
                                    <span class="designation">Office Assistant</span>
                                    <p>Office of the Vice-Chancellor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-team-grid team-style-2">
                            <div class="inner">
                                <div class="thumbnail-wrap">
                                    <div class="thumbnail">
                                        <a href="team-details.html">
                                            <img src="assets/images/administration/vice_chancellor_office/Md.-Aiub-Hossen.jpg" alt="team images">
                                        </a>
                                    </div>
                                    <ul class="team-share-info">
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="team-details.html">MD Aiub Hossen</a></h5>
                                    <span class="designation">Driver</span>
                                    <p>Office of the Vice-Chancellor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================================-->
        
@endsection