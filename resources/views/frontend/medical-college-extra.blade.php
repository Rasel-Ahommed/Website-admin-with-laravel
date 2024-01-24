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
        <div class="edu-college-table-area office_link">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <div class="office-content text-center">
                            <h1>List of The Medical Colleges</h1>
                            <table class="table table-bordered table-responsive table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">SL. No.</th>
                                    <th scope="col">Institute</th>
                                    <th scope="col">College Code</th>
                                    <th scope="col">Website</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Khulna Medical College, Khulna</td>
                                    <td>01</td>
                                    <td><a href="https://www.khulnamedicalcollege.org/" class="edu-btn btn-secondary btn-small">Visit Website</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Shatkhira Medical College, Shatkhira</td>
                                    <td>02</td>
                                    <td><a href="http://facilityregistry.dghs.gov.bd/org_profile.php?org_code=10024591" class="edu-btn btn-secondary btn-small">Visit Website</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Jashore Medical College, Jashore</td>
                                    <td>03</td>
                                    <td><a href="http://facilityregistry.dghs.gov.bd/org_profile.php?org_code=10002293" class="edu-btn btn-secondary btn-small">Visit Website</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Kushtia Medical College, Kushtia</td>
                                    <td>04</td>
                                    <td><a href="https://www.kumc.edu.bd/" class="edu-btn btn-secondary btn-small">Visit Website</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Magura Medical College, Magura</td>
                                    <td>05</td>
                                    <td><a href="https://maguramc.edu.bd/" class="edu-btn btn-secondary btn-small">Visit Website</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Gazi Medical College, Khulna</td>
                                    <td>06</td>
                                    <td><a href="https://www.gmc.edu.bd/" class="edu-btn btn-secondary btn-small">Visit Website</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Khulna City Medical College, Khulna</td>
                                    <td>07</td>
                                    <td><a href="https://khulnacitymedicalcollege.edu.bd/" class="edu-btn btn-secondary btn-small">Visit Website</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Ad-din Akij Medical College, Khulna</td>
                                    <td>08</td>
                                    <td><a href="https://ad-din.org/" class="edu-btn btn-secondary btn-small">Visit Website</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Ad-Din Sakina Women’s Medical College, Jashore</td>
                                    <td>09</td>
                                    <td><a href="https://ad-din.org/" class="edu-btn btn-secondary btn-small">Visit Website</a></td>
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