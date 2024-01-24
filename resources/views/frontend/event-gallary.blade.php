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
          Cancel Preloader</span
        >
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
                        <h1 class="title">মহান স্বাধীনতা দিবসে স্মৃতিসৌধে শ্রদ্ধা নিবেদন করেন উপাচার্য মহোদয় এবং বিশ্ববিদ্যালয়ের কর্মকর্তা ও কর্মচারীগন </h1>
                    </div>
                    <ul class="edu-breadcrumb">
                        <li class="breadcrumb-item"><a href="index-one.html">Home</a></li>
                        <li class="separator"><i class="icon-angle-right"></i></li>
                        <li class="breadcrumb-item"><a href="event.html">Event</a></li>
                        <li class="separator"><i class="icon-angle-right"></i></li>
                        <li class="breadcrumb-item active" aria-current="page">মহান স্বাধীনতা দিবসে স্মৃতিসৌধে শ্রদ্ধা নিবেদন করেন উপাচার্য মহোদয় এবং বিশ্ববিদ্যালয়ের কর্মকর্তা ও কর্মচারীগন</li>
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
                event gallary
            ===================-->
      <div class="container py-5">
        <h4 class="text-center">
           EVENTS & GALLARY
        </h4>
        <div class="event-gallary">
          <a href="#">
            <div onclick="popUpModal(this)" class="gallary-img">
              <img loading="lazy" src="./assets/images/event/event-01.jpg" />
              <div class="gallary-img-title">
                  মহান স্বাধীনতা দিবসে স্মৃতিসৌধে শ্রদ্ধা নিবেদন করেন উপাচার্য মহোদয় এবং বিশ্ববিদ্যালয়ের কর্মকর্তা ও কর্মচারীগন
              </div>
            </div>
          </a>
          <a href="#">
            <div onclick="popUpModal(this)" class="gallary-img">
              <img loading="lazy" src="./assets/images/event/event-02.jpg" />
              <div class="gallary-img-title">
                  জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এঁর ১০৩ তম জন্মদিবস উপলক্ষে বঙ্গবন্ধুর প্রতিকৃতিতে পুষ্পস্তবক প্রদান করে শ্রদ্ধা নিবেদন করেন উপাচার্য মহোদয় ও শেহামেবি কর্মকর্তাবৃন্দ
              </div>
            </div>
          </a>
          <a href="#">
            <div onclick="popUpModal(this)" class="gallary-img">
              <img loading="lazy" src="./assets/images/event/event-03.jpg" />
              <div class="gallary-img-title">
                  মহান স্বাধীনতা দিবসে স্মৃতিসৌধে শ্রদ্ধা নিবেদন করেন উপাচার্য মহোদয় এবং বিশ্ববিদ্যালয়ের কর্মকর্তা ও কর্মচারীগন
              </div>
            </div>
          </a>
          <a href="#">
            <div onclick="popUpModal(this)" class="gallary-img">
              <img loading="lazy" src="./assets/images/event/hasina-daughter's tale.jpg" />
              <div class="gallary-img-title">
                    জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এঁর ১০৩ তম জন্মদিবস উপলক্ষে বঙ্গবন্ধুর প্রতিকৃতিতে পুষ্পস্তবক প্রদান করে শ্রদ্ধা নিবেদন করেন উপাচার্য মহোদয় ও শেহামেবি কর্মকর্তাবৃন্দ
                </div>
              </div>
          </a>
          <a href="#">
            <div onclick="popUpModal(this)" class="gallary-img">
              <img loading="lazy" src="./assets/images/event/rsz_1rsz_260220231-1.jpg" />
                <div class="gallary-img-title">
                    জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এঁর ১০৩ তম জন্মদিবস উপলক্ষে বঙ্গবন্ধুর প্রতিকৃতিতে পুষ্পস্তবক প্রদান করে শ্রদ্ধা নিবেদন করেন উপাচার্য মহোদয় ও শেহামেবি কর্মকর্তাবৃন্দ
                </div>
              </div>
          </a>
          <a href="#">
            <div onclick="popUpModal(this)" class="gallary-img">
              <img loading="lazy" src="https://source.unsplash.com/1300x1200/?oman" />
                <div class="gallary-img-title">
                    মহান স্বাধীনতা দিবসে স্মৃতিসৌধে শ্রদ্ধা নিবেদন করেন উপাচার্য মহোদয় এবং বিশ্ববিদ্যালয়ের কর্মকর্তা ও কর্মচারীগন
                </div>
              </div>
          </a>
          <a href="#">
            <div onclick="popUpModal(this)" class="gallary-img">
              <img loading="lazy" src="https://source.unsplash.com/1300x1200/?turkey" />
                <div class="gallary-img-title">
                    মহান স্বাধীনতা দিবসে স্মৃতিসৌধে শ্রদ্ধা নিবেদন করেন উপাচার্য মহোদয় এবং বিশ্ববিদ্যালয়ের কর্মকর্তা ও কর্মচারীগন
                </div>
              </div>
          </a>
          <a href="#">
            <div onclick="popUpModal(this)" class="gallary-img">
              <img loading="lazy" src="https://source.unsplash.com/1300x1200/?iran" />
                <div class="gallary-img-title">
                    জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এঁর ১০৩ তম জন্মদিবস উপলক্ষে বঙ্গবন্ধুর প্রতিকৃতিতে পুষ্পস্তবক প্রদান করে শ্রদ্ধা নিবেদন করেন উপাচার্য মহোদয় ও শেহামেবি কর্মকর্তাবৃন্দ
                </div>
              </div>
          </a>
          <a href="#">
            <div onclick="popUpModal(this)" class="gallary-img">
              <img loading="lazy" src="https://source.unsplash.com/1300x1200/?jordan" />
                <div class="gallary-img-title">
                    মহান স্বাধীনতা দিবসে স্মৃতিসৌধে শ্রদ্ধা নিবেদন করেন উপাচার্য মহোদয় এবং বিশ্ববিদ্যালয়ের কর্মকর্তা ও কর্মচারীগন
                </div>
              </div>
          </a>
          <a href="#">
            <div onclick="popUpModal(this)" class="gallary-img">
              <img loading="lazy" src="https://source.unsplash.com/1300x1200/?kuwait" />
                <div class="gallary-img-title">
                    জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এঁর ১০৩ তম জন্মদিবস উপলক্ষে বঙ্গবন্ধুর প্রতিকৃতিতে পুষ্পস্তবক প্রদান করে শ্রদ্ধা নিবেদন করেন উপাচার্য মহোদয় ও শেহামেবি কর্মকর্তাবৃন্দ
                </div>
              </div>
            </div>
          </a>
        <div class="d-flex justify-content-center">
            <button
                type="button"
                class="btn btn-success fs-3 btn-lg"
            >
                See More
            </button>
        </div>
      </div>

      <!-- modal img -->
      <!-- The Modal -->
      <div id="myModal" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="popUpModal()">&times;</span>

        <!-- Modal Content (The Image) -->
        <img loading="lazy" src="./assets/images/administration/2222222222221-231x300-Copy-1.jpg" class="modal-content" id="img01">

        <!-- Modal Caption (Image Text) -->
        <div id="caption">
          No Caption Found
        </div>
      </div>

 @endsection