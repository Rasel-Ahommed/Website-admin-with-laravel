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

            <!--=====================================-->

            <!-- tender list start -->

            <div class="midlebody1 container">
                <div>
                    <p class="wellcome display-3 text-center">Tenders</p>
                </div>
                <div class="gazette_box">
                    <table class="content-table-all" width="570" cellspacing="0" cellpadding="0"
                        style="border: 1px solid #e8e7e1">
                        <thead>
                            <tr>
                                <td>Sr No</td>
                                <td>Tender Name</td>
                                <td>Download</td>
                                <td>Start Date</td>
                                <td>End Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                use App\Models\Tender;
                                $datas = Tender::latest()->paginate(10);
                            @endphp
                            @foreach ($datas as $key => $data)
                                <tr>
                                  <td> {{ ($datas->currentPage() - 1) * $datas->perPage() + $key + 1 }}
                                  </td>
                                    <td>
                                        <a target="_blank" href="{{ asset('storage/tender/' . $data->file) }}">
                                            {{$data->headline}}
                                        </a>
                                    </td>
                                    <td class="text-center fs-1 m-0">
                                        <a href="{{$data->file}}" download>
                                            <i class="ri-download-2-line"></i>
                                        </a>
                                    </td>
                                    <td>{{$data->startDate}}</td>
                                    <td>{{$data->endDate}}</td>
                                </tr>
                            @endforeach
                           

                        </tbody>
                    </table>
                </div>
                {{$datas->links()}}
            </div>
            
            <!-- tender list End -->
        @endsection
