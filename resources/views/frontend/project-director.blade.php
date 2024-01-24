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
                        <img src="assets/images/administration/2222222222221-231x300-Copy-1.jpg" alt="Project Director">
                        <p>Dr. Md. Mehedi Newaz</p>
                    </div>
                    <div class="col-8">
                        <h1>Dr. Md. Mehedi Newaz</h1>
                        <p>Project Director</p>
                        <p>Conducting Feasibility Study for Establishment</p>
                        <p>Sheikh Hasina Medical University, Khulna</p>
                        <p>Email: drmehedi69@gmail.com</p>
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
                        <img src="assets/images/brand/brand-01.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/brand/brand-02.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/brand/brand-03.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/brand/brand-04.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/brand/brand-05.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/brand/brand-06.png" alt="Brand Logo">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Area  -->
@endsection