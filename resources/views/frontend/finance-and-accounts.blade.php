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
                            <h1>Finance and Accounts</h1>
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
                                    <td>Rabindra Nath Datta</td>
                                    <td>Deputy-Director</td>
                                    <td>Finance and Accounts</td>
                                    <td>01715293148</td>
                                    <td><img src="assets/images/administration/finance-and-accounts/Rabindra-Nath-Datta.jpg" alt="finance-and-accounts_dd"></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Mst. Jakia Sultana</td>
                                    <td>Accounts Officer</td>
                                    <td>Finance and Accounts</td>
                                    <td>01715581058</td>
                                    <td><img src="assets/images/administration/finance-and-accounts/Mst.-Jakia-Sultana.jpg" alt="finance-and-accounts_ao"></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Krishna Kumar Paul</td>
                                    <td>Cashier</td>
                                    <td>Finance and Accounts</td>
                                    <td>01873931052</td>
                                    <td><img src="assets/images/administration/finance-and-accounts/Krishna-Kumar-Paul.jpg" alt="finance-and-accounts_cashier"></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Debbrota Kumar</td>
                                    <td>Office Assistant</td>
                                    <td>Finance and Accounts</td>
                                    <td>01922303231</td>
                                    <td><img src="assets/images/administration/finance-and-accounts/Debbrota-Kumar.jpg" alt="finance-and-accounts_oa"></td>
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