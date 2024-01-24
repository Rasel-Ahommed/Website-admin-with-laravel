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
        </div> -->
        <!--=====================================-->
        <!--=       Hero Banner Area Start      =-->
        <!--=====================================-->
        <div class="college_link_for_logo">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="banner-content logo_link_college">
                            <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">List of The Medical Colleges</h1>
                            <!-- <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit.</p> -->
                            <div class="features-list" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="features-box color-secondary-style">
                                            <div class="icon">
                                                <img src="assets/images/college_logo/KMCH-Logo.png" alt="Brand Logo">
                                                <!-- <i class="icon-6"></i> -->
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Khulna Medical College, Khulna</h5>
                                                <p class="strong mb-3">Code No <span>01</span></p>
                                                <a href="https://www.khulnamedicalcollege.org/" class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="features-box color-primary-style">
                                            <div class="icon">
                                                <img src="assets/images/college_logo/Satkhira_Medical_College_logo_prev_ui.png" alt="Brand Logo">
                                                <!-- <i class="icon-7"></i> -->
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Shatkhira Medical College, Shatkhira</h5>
                                                <p class="strong mb-3">Code No <span>02</span></p>
                                                <a href="http://facilityregistry.dghs.gov.bd/org_profile.php?org_code=10024591" class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="features-box color-primary-style">
                                            <div class="icon">
                                                <img src="assets/images/college_logo/JMC_Logo_Official.png" alt="Brand Logo">
                                                <!-- <i class="icon-7"></i> -->
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Jashore Medical College, Jashore</h5>
                                                <p class="strong mb-3">Code No <span>03</span></p>
                                                <a href="http://facilityregistry.dghs.gov.bd/org_profile.php?org_code=10002293" class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="features-box color-primary-style">
                                            <div class="icon">
                                                <img src="assets/images/college_logo/Kushtia_Medical_College_logo.png" alt="Brand Logo">
                                                <!-- <i class="icon-7"></i> -->
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Kushtia Medical College, Kushtia</h5>
                                                <p class="strong mb-3">Code No <span>04</span></p>
                                                <a href="https://www.kumc.edu.bd/" class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="features-box color-primary-style">
                                            <div class="icon">
                                                <img src="assets/images/college_logo/Magura_Medical_College_logo_prev_ui.png" alt="Brand Logo">
                                                <!-- <i class="icon-7"></i> -->
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Magura Medical Collage, Magura</h5>
                                                <p class="strong mb-3">Code No <span>05</span></p>
                                                <a href="https://maguramc.edu.bd/" class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="features-box color-primary-style">
                                            <div class="icon">
                                                <img src="assets/images/college_logo/gmch.jpg" alt="Brand Logo">
                                                <!-- <i class="icon-7"></i> -->
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Gazi Medical Collage, Khulna</h5>
                                                <p class="strong mb-3">Code No <span>06</span></p>
                                                <a href="https://www.gmc.edu.bd/" class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="features-box color-primary-style">
                                            <div class="icon">
                                                <img src="assets/images/college_logo/kcmch.png" alt="Brand Logo">
                                                <!-- <i class="icon-7"></i> -->
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Khulna City Medical Collage, Khulna</h5>
                                                <p class="strong mb-3">Code No <span>07</span></p>
                                                <a href="https://www.kcmch.com.bd/" class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="features-box color-primary-style">
                                            <div class="icon">
                                                <img src="assets/images/college_logo/addin medical collage.jpg" alt="Brand Logo">
                                                <!-- <i class="icon-7"></i> -->
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Ad-din Medical Collage Collage, Khulna</h5>
                                                <p class="strong mb-3">Code No <span>08</span></p>
                                                <a href="https://ad-din.org/" class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="features-box color-primary-style">
                                            <div class="icon">
                                                <img src="assets/images/college_logo/addin medical collage.jpg" alt="Brand Logo">
                                                <!-- <i class="icon-7"></i> -->
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Ad-din Sakina Women’s Medical College Jashore</h5>
                                                <p class="strong mb-3">Code No <span>09</span></p>
                                                <a href="https://ad-din.org/" class="edu-btn btn-secondary btn-small">Visit Website</a>
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