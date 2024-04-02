@extends('layout\main')

@section('main-contant')

    <body class="sticky-header ">

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

            <div class="midlebody1 container">
                <div>
                    <p class="wellcome display-3 text-center">Circuler</p>
                </div>
                <div class="gazette_box">
                    <table class="content-table-all" width="570" cellspacing="0" cellpadding="0"
                        style="border: 1px solid #e8e7e1">
                        <thead>
                            <tr>
                                <td>Circuler</td>
                                <td>Post</td>
                                <td>End Date</td>
                                <td>Apply Link</td>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                use App\Models\Circuler;
                                $datas = Circuler::latest()->paginate(10);
                            @endphp

                            @foreach ($datas as $data)
                                <tr>
                                    <td>
                                        <a target="_blank" href="{{$data->file}}">
                                            {{ $data->headline }}
                                        </a>
                                    </td>
                                    <td>{{ $data->post }}</td>
                                    <td>{{ $data->endDate }}</td>
                                    <td>
                                        <a href="{{$data->form}}" target="_blank" download="filename.pdf">
                                            <button class="btn btn-success fs-3">Apply Now</button>
                                        </a>
                                    </td>
                                    
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                {{$datas->links()}}
            </div>

            <!--==========================
                Main Content start here
                ==========================-->
        @endsection
