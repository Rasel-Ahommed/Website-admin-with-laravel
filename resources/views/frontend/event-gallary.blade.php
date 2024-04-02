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
                            event gallary
                        ===================-->
            <div class="container py-5">
                <h4 class="text-center">
                    EVENTS & GALLARY
                </h4>

                @php
                    use App\Models\EventGallery;
                    $datas = EventGallery::paginate(10);
                @endphp
                <div class="event-gallary">
                    @foreach ($datas as $data)
                        <a href="#">
                            <div onclick="popUpModal(this)" class="gallary-img">
                                <img loading="lazy" src="{{$data->img}}" />
                                <div class="gallary-img-title">
                                    {{ $data->title }}
                                </div>

                            </div>
                        </a>
                    @endforeach
                </div>
                  
            </div>
            {{ $datas->links() }}
            <!-- modal img -->
            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- The Close Button -->
                <span class="close" onclick="popUpModal()">&times;</span>

                <!-- Modal Content (The Image) -->
                <img loading="lazy" src="assets/images/administration/2222222222221-231x300-Copy-1.jpg"
                    class="modal-content" id="img01">

                <!-- Modal Caption (Image Text) -->
                <div id="caption">
                    No Caption Found
                </div>
            </div>
        @endsection
