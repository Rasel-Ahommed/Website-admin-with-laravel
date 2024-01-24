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
                            <h1>Office of The Controller of Examination</h1>
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
                                    <td>Dr. Nasrin Akhter</td>
                                    <td>Deputy Controller of Examination</td>
                                    <td>Office of the Controller of Examination</td>
                                    <td>01911088996</td>
                                    <td><img src="assets/images/administration/office-of-the-controller-of-examination/Dr.-Nasrin-Akhter.jpg" alt="office-of-the-controller-of-examination_dc"></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Engr. Mostofa Rakib Raihan</td>
                                    <td>Assistant Programmer</td>
                                    <td>Office of the Controller of Examination</td>
                                    <td>01982439313</td>
                                    <td><img src="assets/images/administration/office-of-the-controller-of-examination/Mostofa-Rakib-Raihan.jpg" alt="office-of-the-controller-of-examination_ap"></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Alifa Jahan</td>
                                    <td>Data Entry Operator</td>
                                    <td>Office of the Controller of Examination</td>
                                    <td>01761795562</td>
                                    <td><img src="assets/images/administration/office-of-the-controller-of-examination/Alifa-Jahan.jpg" alt="office-of-the-controller-of-examination_eo"></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Rabeya Khanam</td>
                                    <td>Office Assistant</td>
                                    <td>Office of the Controller of Examination</td>
                                    <td>01950775458</td>
                                    <td><img src="assets/images/administration/office-of-the-controller-of-examination/Rabeya-Khanam.jpg" alt="office-of-the-controller-of-examination_oa"></td>
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