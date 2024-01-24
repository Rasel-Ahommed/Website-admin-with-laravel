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
        <div class="edu-office-table-area office-of-the-vice-chancellor">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <div class="office-content text-center">
                            <h1>Dean’s Office</h1>
                            <table class="table table-bordered table-responsive table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Office</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Photograph</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Professor Dr. Md. Din-Ul Islam</td>
                                    <td>Dean</td>
                                    <td>Faculty of Medicine</td>
                                    <td>01722-553289</td>
                                    <td><img src="assets/images/administration/office-of-the-deans/Professor-Dr.-Md.-Din-Ul-Islam-Principal-150x150-1.jpg" alt="office-of-the-deans_dean"></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Prof. Dr. Bappa Gautam</td>
                                    <td>Dean</td>
                                    <td>Faculty of Basic Science and para clinical Science</td>
                                    <td>01715-165970</td>
                                    <td><img src="assets/images/administration/office-of-the-deans/10.jpg" alt="office-of-the-deans_dean_cs"></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Professor Dr. Md. Kutub Uddin Mollick</td>
                                    <td>Dean</td>
                                    <td>Faculty of Nursing</td>
                                    <td>01711-979084</td>
                                    <td><img src="assets/images/administration/office-of-the-deans/49.jpg" alt="office-of-the-deans_dean_nursing"></td>
                                </tr>
                                </tbody>
                            </table>
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
@endsection