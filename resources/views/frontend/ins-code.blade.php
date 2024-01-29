@extends('layout\main')

@section('main-contant')

    <body class="sticky-header">
        <!--[if lte IE 9]>
          <p class="browserupgrade">
            You are using an <strong>outdated</strong> browser. Please
            <a href="https://browsehappy.com/">upgrade your browser</a> to improve
            your experience and security.
          </p>
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
            <!-- <div class="edu-breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-inner">
                        <div class="page-title">
                            <h1 class="title">Institute Code</h1>
                        </div>
                        <ul class="edu-breadcrumb">
                            <li class="breadcrumb-item"><a href="index-one.html">Home</a></li>
                            <li class="separator"><i class="icon-angle-right"></i></li>
                            <li class="breadcrumb-item active" aria-current="page">SHMU Act – 2021</li>
                        </ul>
                    </div>
                </div>
                <ul class="shape-group">
                    <li class="shape-1">
                        <span></span>
                    </li>
                    <li class="shape-2 scene"><img data-depth="2" src="assets/images/about/shape-13.png" alt="shape"></li>
                    <li class="shape-3 scene"><img data-depth="-2" src="assets/images/about/shape-15.png" alt="shape"></li>
                    <li class="shape-4">
                        <span></span>
                    </li>
                    <li class="shape-5 scene"><img data-depth="2" src="assets/images/about/shape-07.png" alt="shape"></li>
                </ul>
            </div> -->

            <!--==================
                institute code list
                ===================-->
            <div class="edu-college-table-area office_link">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-12 sal-animate" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                            <div class="office-content text-center">
                                <h1>Affiliated Collage's institute code</h1>
                                <table class="table table-bordered table-responsive table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL. No.</th>
                                            <th scope="col">Ins Logo</th>
                                            <th scope="col">Institute</th>
                                            <th scope="col">Institute Code</th>
                                            <th scope="col">Website</th>
                                        </tr>
                                    </thead>

                                    @php
                                        use App\Models\InstituteCode;
                                        $institutes = InstituteCode::latest()->paginate(10);
                                    @endphp

                                    <tbody>
                                      @foreach ($institutes as $key => $inst)
                                        <tr>
                                            <th scope="row">{{ ($institutes->currentPage() - 1) * $institutes->perPage() + $key + 1 }}</th>
                                            <td><a href="https://www.khulnamedicalcollege.org/"><img class="aff-clg-logo"
                                                        src="{{ asset('storage/instituteCode/' . $inst->ins_logo) }}"
                                                        alt="collage Logo"></a></td>
                                            <td class="text-start">{{ $inst->ins_name }}</td>
                                            <td>{{ $inst->ins_code }}</td>
                                            <td>
                                                <a href="{{ $inst->web_link }}"
                                                    class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </td>
                                        </tr>
                                      @endforeach
                                        {{-- <tr>
                                            <th scope="row">2</th>
                                            <td><a href="https://satkhiramch.satkhira.gov.bd/"><img class="aff-clg-logo"
                                                        src="./assets/images/college_logo/Satkhira_Medical_College_logo_prev_ui.png"
                                                        alt="collage Logo"></a></td>
                                            <td class="text-start">Shatkhira Medical College, Shatkhira</td>
                                            <td>02</td>
                                            <td>
                                                <a href="https://satkhiramch.satkhira.gov.bd/"
                                                    class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td><a href="https://jashoremedicalcollege.org/"><img class="aff-clg-logo"
                                                        src="./assets/images/college_logo/JMC_Logo_Official.png"
                                                        alt="collage Logo"></a></td>
                                            <td class="text-start">Jashore Medical College, Jashore</td>
                                            <td>03</td>
                                            <td>
                                                <a href="https://jashoremedicalcollege.org/"
                                                    class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td><a href="http://kumch.teletalk.com.bd/"><img class="aff-clg-logo"
                                                        src="./assets/images/college_logo/Kushtia_Medical_College_logo.png"
                                                        alt="collage Logo"></a></td>
                                            <td class="text-start">Kushtia Medical College, Kushtia</td>
                                            <td>04</td>
                                            <td>
                                                <a href="http://kumch.teletalk.com.bd/"
                                                    class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td><a href="https://maguramc.edu.bd/"><img class="aff-clg-logo"
                                                        src="./assets/images/college_logo/Magura_Medical_College_logo_prev_ui.png"
                                                        alt="collage Logo"></a></td>
                                            <td class="text-start">Magura Medical College, Magura</td>
                                            <td>05</td>
                                            <td>
                                                <a href="https://maguramc.edu.bd/"
                                                    class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td><a href="https://www.gmc.edu.bd/"><img class="aff-clg-logo"
                                                        src="./assets/images/college_logo/gmch.jpg" alt="collage Logo"></a>
                                            </td>
                                            <td class="text-start">Gazi Medical College, Khulna</td>
                                            <td>06</td>
                                            <td>
                                                <a href="https://www.gmc.edu.bd/"
                                                    class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td><a href="https://khulnacitymedicalcollege.edu.bd/"><img
                                                        class="aff-clg-logo"
                                                        src="./assets/images/college_logo/logo avater.png"
                                                        alt="collage Logo"></a></td>
                                            <td class="text-start">Khulna City Medical College, Khulna</td>
                                            <td>07</td>
                                            <td>
                                                <a href="https://khulnacitymedicalcollege.edu.bd/"
                                                    class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td><a href="#"><img class="aff-clg-logo"
                                                        src="./assets/images/college_logo/logo avater.png"
                                                        alt="collage Logo"></a></td>
                                            <td class="text-start">Ad-din Akij Medical College, Khulna</td>
                                            <td>08</td>
                                            <td>
                                                <a href="https://ad-din.org/"
                                                    class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9</th>
                                            <td><a href="#"><img class="aff-clg-logo"
                                                        src="./assets/images/college_logo/logo avater.png"
                                                        alt="collage Logo"></a></td>
                                            <td class="text-start">Ad-Din Sakina Women’s Medical College, Jashore</td>
                                            <td>09</td>
                                            <td>
                                                <a href="https://ad-din.org/"
                                                    class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10</th>
                                            <td><a href="#"><img class="aff-clg-logo"
                                                        src="./assets/images/college_logo/239886925_201199132057068_8794747946884330164_n_prev_ui.png"
                                                        alt="collage Logo"></a></td>
                                            <td class="text-start">Khulna Nursing College, Khulna</td>
                                            <td>10</td>
                                            <td>
                                                <a href="https://nmck.info/" class="edu-btn btn-secondary btn-small">Visit
                                                    Website</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">11</th>
                                            <td><a href="#"><img class="aff-clg-logo"
                                                        src="./assets/images/college_logo/1580196858315_prev_ui.png"
                                                        alt="collage Logo"></a></td>
                                            <td class="text-start">Khulna Mamota Nursing College, Khulna</td>
                                            <td>11</td>
                                            <td>
                                                <a href="https://bangladesh.worldplaces.me/review/85226011-khulna-mamota-nursing-college-khulna.html"
                                                    class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">12</th>
                                            <td><a href="#"><img class="aff-clg-logo"
                                                        src="./assets/images/college_logo/website_LOGO.x53526.png"
                                                        alt="collage Logo"></a></td>
                                            <td class="text-start">Asian Nursing College, Khulna</td>
                                            <td>12</td>
                                            <td>
                                                <a href="https://asiannursing.edu.bd/"
                                                    class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">13</th>
                                            <td><a href="#"><img class="aff-clg-logo"
                                                        src="./assets/images/college_logo/239886925_201199132057068_8794747946884330164_n_prev_ui.png"
                                                        alt="collage Logo"></a></td>
                                            <td class="text-start">Nargis Memorial Nursing College, Bagerhat</td>
                                            <td>13</td>
                                            <td>
                                                <a href="https://nmnursingcollege.edu.bd/en/"
                                                    class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">14</th>
                                            <td><a href="#"><img class="aff-clg-logo"
                                                        src="./assets/images/college_logo/logo avater.png"
                                                        alt="collage Logo"></a></td>
                                            <td class="text-start">World Nursing College, Magura</td>
                                            <td>14</td>
                                            <td>
                                                <a href="https://worldnursingcollege.com/"
                                                    class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                                {{ $institutes->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
