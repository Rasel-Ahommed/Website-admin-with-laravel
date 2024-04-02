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

            {{-- @php
                use App\Models\NewsAndEvents;
                use App\Models\EventImage;
                use Carbon\Carbon;
                $event = NewsAndEvents::FindOrFail($id);

                // Convert s_time and e_time to 12-hour format with AM/PM
                $startTime = Carbon::parse($event->s_time)->format('h:i A');
                $endTime = Carbon::parse($event->e_time)->format('h:i A');

                // formate date
                $formattedCreatedAt = Carbon::parse($event->date)->format('d-M-Y');

                // get event image
                $firstImg = EventImage::where('event_id', $event->id)->first();

                // Fetch all records
                $allImgs = EventImage::where('event_id', $event->id)->get();
{{$firstImg->e_img}} {{ $formattedCreatedAt}}{{$startTime ." - ". $endTime}}{{$event->location}}
            @endphp --}}

            <div class="event-details container">
                <div class="event-details-content py-3">
                    <div class="event-hero-img">
                        <div class="event-img-top">
                            <img src="" alt="Event Hero Banner"
                                class="" loading="lazy" />
                            <div class="event-img-data d-flex justify-content-between">
                                <div class="event-date-time d-flex flex-wrap">
                                    <p class="event-date m-0 d-flex align-items-center pe-4">
                                        <i class="ri-calendar-2-line"></i>
                                    </p>
                                    <p class="event-time m-0 d-flex align-items-center">
                                        <i class="ri-time-line"></i>
                                    </p>
                                </div>
                                <div class="event-location">
                                    <p class="event-loc m-0 d-flex align-items-center">
                                        <i class="ri-map-pin-2-line"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-title pt-3">
                        <p class="text-center h4">
                            {{-- {{$event->event_title}} --}}
                        </p>
                    </div>
                    <div class="event-paragraph">
                        <p>
                            {{-- {{$event->event_text}} --}}
                        </p>
                    </div>
                    <div class="event-gallery">
                        <p class="mb-2 fs-2 text-center">
                            Event Gallery
                        </p>
                        <div class="event-gallery-img">
                            {{-- @foreach ($allImgs as $allImg)
                                <img src="{{$allImg->e_img}}" alt="Event Gallery" class="gallery-img-event">
                               
                            @endforeach --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- events content end -->
        </div>
     @endsection
