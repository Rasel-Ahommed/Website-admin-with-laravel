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
                                <h1 class="title">Notice</h1>
                            </div>
                            <ul class="edu-breadcrumb">
                                <li class="breadcrumb-item"><a href="index-one.html">Home</a></li>
                                <li class="separator"><i class="icon-angle-right"></i></li>
                                <li class="breadcrumb-item">Notice</li>
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
                        notice
                    ===================-->
            <!-- notice section start here -->

            <div class="notice-section">
                <div class="notice-section-details container">
                    <div class="notice-list-section">
                        <div class="notice-heading d-sm-flex align-items-center justify-content-start">
                            <h4>
                                <i class="ri-file-list-3-line"></i>
                                NOTICE
                            </h4>
                            {{-- search  --}}
                            {{-- <div class="position-relative">
                                <div class="searchBox">
                                    <input class="searchInput" type="text" name="" placeholder="Search" />
                                    <button class="searchButton" href="#">
                                        <i class="icon-2"></i>
                                    </button>
                                </div>
                            </div> --}}
                        </div>
                        <!-- notice -->
                        <div class="all-notice-list btn-grid-size-gap py-5">
                            <button id="notice-btn1" onclick="fullNoticeBtnToggle('notice-btn1')" type="button"
                                class="btn btn-outline-success btn-success fs-3 notice-toggle-btn">
                                Academic
                            </button>
                            <button id="notice-btn2" onclick="fullNoticeBtnToggle('notice-btn2')" type="button"
                                class="btn btn-outline-success fs-3 notice-toggle-btn">
                                Administrative
                            </button>
                        </div>

                        @php
                            use App\Models\Notice;
                            use Illuminate\Support\Facades\DB;
                            use Carbon\Carbon;
                            // academic data
                            $notices = DB::table('notice')
                                ->where('is_academic', 'Academic')
                                ->latest()
                                ->paginate(2);

                            // Administrative data
                            $notices2 = DB::table('notice')
                                ->where('is_academic', 'Administrative')
                                ->latest()
                                ->paginate(2);
                        @endphp
                        <div class="row academic">
                            @foreach ($notices as $notice)
                                @php
                                    $formattedCreatedAt = Carbon::parse($notice->created_at)->format('y-M-d');

                                    [$year, $month, $day] = explode('-', $formattedCreatedAt);
                                @endphp

                                <div class="col-lg-6 my-2">
                                    <div class="card-notice">
                                        <div class="card-body notice_list">
                                            <div class="row">
                                                <div class="col-lg-2" style="border-right: 2px dashed #1a3156">
                                                    <div class="notice_date_time align-middle">
                                                        <p class="notice-date">
                                                            {{ $day }}<span
                                                                class="d-block">{!! $month . ',' . $year !!}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-10 notice_body">
                                                    <h5 class="font_weight500 headline">
                                                        <a href="{{asset('storage/notice/' . $notice->notice_file) }}"
                                                            download="{{ $notice->notice_file }}">
                                                            {!! $notice->notice_text !!}
                                                        </a>
                                                    </h5>
                                                    <small class="text-justify float-left"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{ $notices->links() }}
                        </div>

                        <div class="row administrative">
                            @foreach ($notices2 as $notice)
                                @php
                                    $formattedCreatedAt = Carbon::parse($notice->created_at)->format('y-M-d');

                                    [$year, $month, $day] = explode('-', $formattedCreatedAt);
                                @endphp
                                <div class="col-lg-6 my-2">
                                    <div class="card-notice">
                                        <div class="card-body notice_list">
                                            <div class="row">
                                                <div class="col-lg-2" style="border-right: 2px dashed #1a3156">
                                                    <div class="notice_date_time align-middle">
                                                        <p class="notice-date">
                                                            {{ $day }}<span
                                                                class="d-block">{{ $month . ',' . $year }}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-10 notice_body">
                                                    <h5 class="font_weight500 headline">
                                                        <a href="{{ asset('storage/notice/' . $notice->notice_file) }}"
                                                          download="{{ $notice->notice_file }}">
                                                            {!! $notice->notice_text !!}
                                                        </a>
                                                    </h5>
                                                    <small class="text-justify float-left"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{ $notices2->links() }}
                        </div>

                        {{-- <div class="row">
                <div class="notice-type-btn py-md-5">
                    <button
                      type="button"
                      class="btn btn-outline-notice fs-3"
                      data-bs-toggle="button"
                      aria-pressed="false"
                      autocomplete="off"
                    >
                      Prev
                    </button>
                    <button
                      type="button"
                      class="btn btn-outline-notice fs-3"
                      data-bs-toggle="button"
                      aria-pressed="false"
                      autocomplete="off"
                    >
                      Next
                    </button>
                  </div>
              </div> --}}
                    </div>

                </div>
            </div>
        </div>

        <!-- notice section end here -->
        <!-- <div class="notice-board">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="edu-course course-style-4 course-style-9">
                                    <div class="inner">
                                        <div class="content">
                                            <div class="course-price">March 23, 2023</div>
                                            <h6 class="title">
                                                <a href="notice1.html">পবিত্র রমজান ( হিজরী- ১৪৪৪, ২০২৩ খ্রিস্টাব্দ)মাসব্যাপী অত্র বিশ্ববিদ্যালয়ের পরিবর্তিত সময়সূচীর নোটিশ |</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="hover-content-aside">
                                        <div class="content">
                                            <span class="course-level">March 23, 2023</span>
                                            <h5 class="title">
                                                <a href="notice1.html">পবিত্র রমজান ( হিজরী- ১৪৪৪, ২০২৩ খ্রিস্টাব্দ)মাসব্যাপী অত্র বিশ্ববিদ্যালয়ের পরিবর্তিত সময়সূচীর নোটিশ |</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="edu-course course-style-4 course-style-9">
                                    <div class="inner">
                                        <div class="content">
                                            <div class="course-price">March 23, 2023</div>
                                            <h6 class="title">
                                                <a href="notice2.html">জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এঁর জন্মবার্ষিকী ও জাতীয় শিশু দিবসের কর্মসূচি |</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="hover-content-aside">
                                        <div class="content">
                                            <span class="course-level">March 23, 2023</span>
                                            <h5 class="title">
                                                <a href="notice2.html">জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এঁর জন্মবার্ষিকী ও জাতীয় শিশু দিবসের কর্মসূচি |</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
    @endsection
