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


            <!-- APA section start here -->
            <div class="apa-section bg-gradient-down">
                <div class="container">
                    <div class="section-content-apa">
                        <div class="section-title text-center section-left">
                            <!-- <span class="pre-title">APA</span> -->
                            <h2 class="title">Annual Performance Agreement</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <div class="row">
                            @php
                                use App\Models\APA;
                                use App\Models\ApaName;
                                $apa_names = ApaName::all();
                            @endphp

                            @foreach ($apa_names as $apa_name)
                                <div class="col-lg-4 apa-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">
                                                <strong>{{$apa_name->name}}</strong>
                                            </h6>
                                            <!-- <p class="card-text"></p> -->
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <img src="{{$apa_name->img}}" alt="logo"
                                                        width="110" />
                                                </div>
                                                <div class="col-sm-8">
                                                    <ul>
                                                      @php
                                                          $apas = APA::where('apa_name_id',$apa_name->id)->get();
                                                      @endphp
                                                        @foreach ($apas as $apa)
                                                        <li>
                                                            <a href="{{$apa->links}}">{{$apa->headline}}</a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach



                            {{-- <div class="col-lg-4 apa-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            <strong>National Integrity Strategy</strong>
                                        </h6>
                                        <!-- <p class="card-text"></p> -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="./assets/images/apa/nis_logo.webp" alt="logo"
                                                    width="110" />
                                            </div>
                                            <div class="col-sm-8">
                                                <ul>
                                                    <li>
                                                        <a href="apa.html">National Integrity Strategy Report 2021-2022-2nd
                                                            Quarter</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">National Integrity Strategy of Bangladesh</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">NIS Committee Formation Instruction</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 apa-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            <strong>E-Governance and Innovation Activities</strong>
                                        </h6>
                                        <!-- <p class="card-text"></p> -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="./assets/images/apa/INNOVATION.webp" alt="logo"
                                                    width="110" />
                                            </div>
                                            <div class="col-sm-8">
                                                <ul>
                                                    <li>
                                                        <a href="apa.html">E-Governance and Innovation Instructions and Work
                                                            Plan 2021-2022</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">E-filling training program schedule</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">Course Registration System</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">Social Communication Network</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 apa-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            <strong>Right to Information</strong>
                                        </h6>
                                        <!-- <p class="card-text"></p> -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="./assets/images/apa/infocom.webp" alt="logo" width="110" />
                                            </div>
                                            <div class="col-sm-8">
                                                <ul>
                                                    <li>
                                                        <a href="apa.html">Information Preservation Rules</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">Request for information form</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">Right to Information Act 2009</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">RTI Information Demand Form</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 apa-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            <strong>Grievance Redress System</strong>
                                        </h6>
                                        <!-- <p class="card-text"></p> -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="./assets/images/apa/complain.webp" alt="logo"
                                                    width="110" />
                                            </div>
                                            <div class="col-sm-8">
                                                <ul>
                                                    <li>
                                                        <a href="apa.html">Grievance Redress System Guidelines 2015</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">GRS Instructions and Work Plan 2021-2022</a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">GRS Online Complain Instructions</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 apa-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title"><strong>Citizen Charter</strong></h6>
                                        <!-- <p class="card-text"></p> -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="./assets/images/apa/Citizens.webp" alt="logo"
                                                    width="110" />
                                            </div>
                                            <div class="col-sm-8">
                                                <ul>
                                                    <li>
                                                        <a href="apa.html">সেবা প্রদান প্রতিশ্রুতি </a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">ফোকাল পয়েন্ট কর্মকর্তা/পরিবীক্ষণ কমিটি
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">ত্রৈমাসিক/বার্ষিক পরিবীক্ষণ/মূল্যায়ন প্রতিবেদন
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="apa.html">আইন/বিধি/নীতিমালা/পরিপত্র/নির্দেশিকা/
                                                            প্রজ্ঞাপন</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!--========================
                    APA / NOC End
                ========================-->
        @endsection
