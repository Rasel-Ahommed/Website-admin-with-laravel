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
        <!-- <div class="edu-college-table-area office_link">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <div class="office-content text-center">
                            <h1>List of Nursing Colleges</h1>
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
                                    <td>Khulna Nursing College, Khulna</td>
                                    <td>10</td>
                                    <td><a href="https://nmck.info/" class="edu-btn btn-secondary btn-small">Visit Website</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Khulna Mamota Nursing College, Khulna</td>
                                    <td>11</td>
                                    <td><a href="https://bangladesh.worldplaces.me/review/85226011-khulna-mamota-nursing-college-khulna.html" class="edu-btn btn-secondary btn-small">Visit Website</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Asian Nursing College, Khulna</td>
                                    <td>12</td>
                                    <td><a href="https://asiannursing.edu.bd/" class="edu-btn btn-secondary btn-small">Visit Website</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Nargis Memorial Nursing College, Bagerhat</td>
                                    <td>13</td>
                                    <td><a href="https://nmnursingcollege.edu.bd/en/" class="edu-btn btn-secondary btn-small">Visit Website</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>World Nursing College, Magura</td>
                                    <td>14</td>
                                    <td><a href="https://worldnursingcollege.com/" class="edu-btn btn-secondary btn-small">Visit Website</a></td>
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
        </div> -->

        <!-- affiliat nursing card -->

        <div class="college_link_for_logo">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="banner-content logo_link_college">
                            <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">List of The Nursing Colleges</h1>
                            <!-- <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit.</p> -->
                            <div class="features-list" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="features-box color-extra02-style">
                                            <div class="icon">
                                                <img class="svgInject" src="assets/images/college_logo/1580196858315_prev_ui.png" alt="animated icon">
                                                <!-- <i class="icon-5"></i> -->
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Khulna Mamota Nursing Collage, Khulna</h5>
                                                <p class="strong mb-3">Code No <span>01</span></p>
                                                <a href="https://www.khulnamedicalcollege.org/" class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="features-box color-primary-style">
                                            <div class="icon">
                                                <img src="assets/images/college_logo/239886925_201199132057068_8794747946884330164_n_prev_ui.png" alt="Brand Logo">
                                                <!-- <i class="icon-6"></i> -->
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Nargis Memorial Nursing Collage, Khulna</h5>
                                                <p class="strong mb-3">Code No <span>01</span></p>
                                                <a href="https://www.khulnamedicalcollege.org/" class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="features-box color-primary-style">
                                            <div class="icon">
                                                <img src="assets/images/college_logo/website_LOGO.x53526.png" alt="Brand Logo">
                                                <!-- <i class="icon-6"></i> -->
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Asian Nursing Collage, Khulna</h5>
                                                <p class="strong mb-3">Code No <span>01</span></p>
                                                <a href="https://www.khulnamedicalcollege.org/" class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="features-box color-primary-style">
                                            <div class="icon">
                                                <img src="assets/images/college_logo/Logo_prev_ui.png" alt="Brand Logo">
                                                <!-- <i class="icon-7"></i> -->
                                            </div>
                                            <div class="content">
                                                <h5 class="title">World Nursing Collage, Khulna</h5>
                                                <p class="strong mb-3">Code No <span>02</span></p>
                                                <a href="http://facilityregistry.dghs.gov.bd/org_profile.php?org_code=10024591" class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="features-box color-primary-style">
                                            <div class="icon">
                                                <img src="assets/images/college_logo/images-removebg-preview-1.png" alt="Brand Logo">
                                                <!-- <i class="icon-7"></i> -->
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Nursing & Midfare Collage, Khulna</h5>
                                                <p class="strong mb-3">Code No <span>03</span></p>
                                                <a href="http://facilityregistry.dghs.gov.bd/org_profile.php?org_code=10002293" class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection