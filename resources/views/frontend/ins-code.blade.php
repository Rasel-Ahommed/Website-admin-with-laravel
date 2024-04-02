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
                                                        src="{{$inst->ins_logo}}"
                                                        alt="collage Logo"></a></td>
                                            <td class="text-start">{{ $inst->ins_name }}</td>
                                            <td>{{ $inst->ins_code }}</td>
                                            <td>
                                                <a href="{{ $inst->web_link }}"
                                                    class="edu-btn btn-secondary btn-small">Visit Website</a>
                                            </td>
                                        </tr>
                                      @endforeach
                                        
                                    </tbody>
                                </table>
                                {{ $institutes->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
