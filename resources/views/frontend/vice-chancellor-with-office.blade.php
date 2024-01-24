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
        <div class="governer_body">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img src="assets/images/administration/IMG-20220510-WA0048.jpg" alt="Vice Chancellor">
                        <p>Professor Dr. Md. Mahbubur Rahman</p>
                    </div>
                    <div class="col-8">
                        <h1>Professor Dr. Md. Mahbubur Rahman</h1>
                        <p>Vice Chancellor</p>
                        <p>Sheikh Hasina Medical University, Khulna</p>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================================-->
        <!--=       Brand Area Start      		=-->
        <!--=====================================-->
        <!-- Start Brand Area  -->
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