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
                            <h1>Office of The Vice Chancellor</h1>
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
                                    <td>Professor Dr. Md. Mahbubur Rahman</td>
                                    <td>Vice-Chancellor</td>
                                    <td>Office of the Vice-Chancellor</td>
                                    <td>-</td>
                                    <td><img src="assets/images/administration/vice_chancellor_office/Professor-Dr.-Md.-Mahbubur-Rahman.jpg" alt="vice_chancellor_office"></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Md. Nurul Momen</td>
                                    <td>PS to VC (Assistant Registrar)</td>
                                    <td>Office of the Vice-Chancellor</td>
                                    <td>01715-599568</td>
                                    <td><img src="assets/images/administration/vice_chancellor_office/Md.-Nurul-Momen.jpg" alt="vice_chancellor_office_ps"></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Md. Aiub Hossen</td>
                                    <td>Driver</td>
                                    <td>Office of the Vice-Chancellor</td>
                                    <td>01729-934724</td>
                                    <td><img src="assets/images/administration/vice_chancellor_office/Md.-Aiub-Hossen.jpg" alt="vice_chancellor_office_driver"></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Md. Khirul Alom</td>
                                    <td>Office Assistant</td>
                                    <td>Office of the Vice-Chancellor</td>
                                    <td>01724-877669</td>
                                    <td><img src="assets/images/administration/vice_chancellor_office/Md.-Khirul-Alom.jpg" alt="vice_chancellor_office_assistant"></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Md. Nurul Islam Sheikh</td>
                                    <td>Office Assistant</td>
                                    <td>Office of the Vice-Chancellor</td>
                                    <td>01751-379790</td>
                                    <td><img src="assets/images/administration/vice_chancellor_office/Md.-Nurul-Islam-Sheikh.jpg" alt="vice_chancellor_office_assistant"></td>
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