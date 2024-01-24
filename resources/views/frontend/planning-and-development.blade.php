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
                            <h1>Planning and Development</h1>
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
                                    <td>Md. Rakibul Islam Khan</td>
                                    <td>Assistant Director</td>
                                    <td>Planning and Development</td>
                                    <td>01716447734</td>
                                    <td><img src="assets/images/administration/planning-and-development/Md.-Rakibul-Islam-Khan.jpg" alt="planning-and-development_ad"></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Md. Anik Islam</td>
                                    <td>Section Officer</td>
                                    <td>Planning and Development</td>
                                    <td>01750182415</td>
                                    <td><img src="assets/images/administration/planning-and-development/Md.-Anik-Islam.jpg" alt="planning-and-development_so"></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Rahin Ashraf</td>
                                    <td>Computer Operator</td>
                                    <td>Planning and Development</td>
                                    <td>01734221922</td>
                                    <td><img src="assets/images/administration/planning-and-development/Rahin-Ashraf.jpg" alt="planning-and-development_co"></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Goutam Kumar Paul</td>
                                    <td>Office Assistant</td>
                                    <td>Planning and Development</td>
                                    <td>01731711614</td>
                                    <td><img src="assets/images/administration/planning-and-development/Goutam-Kumar-Paul.jpg" alt="planning-and-development_oa"></td>
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