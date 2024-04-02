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
        

        <!--========================
                APA / NOC Start
            ========================-->
            <!-- NOC Start here -->

            <div class="midlebody1 container">
              <div>
                  <p class="wellcome display-3 text-center">NOC</p>
              </div>
              <div class="gazette_box">
                <table
                  class="content-table-all mb-3"
                  width="570"
                  cellspacing="0"
                  cellpadding="0"
                  style="border: 1px solid #e8e7e1"
                >
                  <thead>
                    <tr>
                      <td>Sr No</td>
                      <td>Headline</td>
                      <td>Issue Date</td>
                      <td>Download</td>
                    </tr>
                  </thead>

                  @php
                      use App\Models\NOC;
                      $datas = NOC::latest()->paginate(10);
                  @endphp

                  <tbody>
                    @foreach ($datas as $key => $data)
                        
                    
                    <tr>
                      <td> {{ ($datas->currentPage() - 1) * $datas->perPage() + $key + 1 }}
                      </td>
                      <td>
                        <a target="_blank" href="{{$data->pdf}}">
                         {{$data->headline}}
                        </a>
                      </td>
                      <td>{{$data->date}}</td>
                      <td class="text-center fs-1 m-0">
                        <a class="fs-1" href="{{$data->pdf}}" download>
                          <i class="ri-download-2-line"></i>
                        </a>
                      </td>
                    </tr> 
                    @endforeach
                  </tbody>
                </table>
               
               
              </div>
              {{$datas->links()}}
            </div>

            <!-- NOC end here -->


        <!--========================
                APA / NOC End
            ========================-->
@endsection