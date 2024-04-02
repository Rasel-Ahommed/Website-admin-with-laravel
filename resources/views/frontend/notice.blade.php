@extends('layout\main')

@section('main-contant')

    <body class="sticky-header">


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
                                ->get();

                            // Administrative data
                            $notices2 = DB::table('notice')
                                ->where('is_academic', 'Administrative')
                                ->latest()
                                ->get();
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
                                                        <a href="{{$notice->notice_file}}"
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
                                                        <a href="{{$notice->notice_file}}"
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
                        </div>

             
                    </div>

                </div>
            </div>
        </div>

      
    @endsection
