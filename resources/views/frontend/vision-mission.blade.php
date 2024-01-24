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
                        <h1 class="title">Vision & Mission</h1>
                    </div>
                    <ul class="edu-breadcrumb">
                        <li class="breadcrumb-item"><a href="index-one.html">Home</a></li>
                        <li class="separator"><i class="icon-angle-right"></i></li>
                        <li class="breadcrumb-item">Vision & Mission</li>
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

      <!-- Mission vission start here -->

      <!-- <div class="mission-vission-section">
            <div class="flex-container-mission">
                <div class="flex-slide-mission home-mission">
                    <div class="flex-title-mission flex-title-home-mission">মিশন এবং উদ্দেশ্য:</div>
                    <div class="flex-about-mission flex-about-home-mission">
                        <p>
                            আমাদের ইউনিভার্সিটির মূল মিশন হলো উচ্চমানের শিক্ষার মাধ্যমে বুদ্ধিমান, নৈতিক, এবং উন্নত নাগরিক তৈরি করা। আমরা প্রযুক্তি, গবেষণা, এবং সেবা মাধ্যমে সমাজে প্রযুক্তিগত এবং সামাজিক পরিবর্তন উৎসাহিত করি। আমরা সামাজিক সংকট, আর্থিক বিপন্নতা, এবং পরিবেশ সম্পর্কিত সমস্যার সমাধানে মোকাবেলা করতে প্রতিশ্রুতিবদ্ধ। আমরা একটি সহযোগিতামূলক ও সম্প্রদায়বাদী পরিবেশ সৃষ্টি করতে চাই, যেখানে প্রতিটি সদস্য সহযোগিতা এবং উন্নতমান অর্জনের অভিজ্ঞান করে। আমাদের মিশনের মাধ্যমে আমরা একটি উদ্বিগ্ন এবং সমৃদ্ধ সমাজ স্থাপন করতে প্রতিবদ্ধ।
                        </p>
                    </div>
                </div>
                <div class="flex-slide-mission about-mission">
                    <div class="flex-title-mission">
                        ভিশন
                    </div>
                    <div class="flex-about-mission">
                        <p>
                            আমাদের ইউনিভার্সিটির দর্শন হলো একটি উন্নত, আদর্শ এবং বিশ্বমানে পূর্ণতা অর্জন করা। আমরা অনুসন্ধানবাজ, উদ্ভাবনশীল, এবং সম্প্রদায়বাদী প্রতিষ্ঠান হতে চাই, যেখানে প্রযুক্তির মাধ্যমে নতুন দক্ষতা বা পরিচিতি তৈরি হবে। আমরা সৃজনশীল, স্বয়ংপ্রকাশশীল, এবং একটি ভবিষ্যত্তের দিকে অগ্রগতির দিকে মুখোমুখি হব। আমরা একটি উদ্দীপক সৃষ্টি করতে চাই, যেখানে ছাত্র-ছাত্রীদেরকে আত্মনির্ভর এবং সৃজনশীল আত্মবিশ্বাস অর্জন করতে অনুমতি দেওয়া হবে। আমরা একটি বিশ্বমান সম্প্রদায়ের সঙ্গে জড়িত হতে চাই, যাতে প্রত্যেকেরই জীবনে একটি উদ্দীপন থাকে এবং সকলের উন্নতমানের দিকে অগ্রগতি হয়।
                        </p>
                    </div>
                </div>
                <div class="flex-slide-mission work-mission">
                    <div class="flex-title-mission">নীতিমালা:</div>
                    <div class="flex-about-mission">
                        <p>
                            আমাদের ইউনিভার্সিটির কোড অব কন্ডাক্ট মৌলিকভাবে আমাদের সকল সদস্যের জন্য একটি সম্মানজনক, নৈতিক, এবং আদর্শমূলক পরিবেশ নিশ্চিত করতে উদ্দীপ্ত হয়েছে। কোড অব কন্ডাক্টটি মানবিক সম্প্রদায়, যোগাযোগের উপর ভিত্তি করে এবং উদাহরণের মাধ্যমে একটি সৃজনশীল এবং সহযোগিতামূলক ভাবনা বজায় রাখতে উৎসাহিত করে।
                        </p>
                        <p>
                            আমরা একে অপরের সম্মান করতে প্রতিবদ্ধ, এবং প্রতিটি সদস্যকে একটি সুরক্ষিত এবং আদর্শ পরিবেশ এনে দেওয়ার লক্ষ্যে কোড অব কন্ডাক্টটি প্রণালীত বিবেচনা করতে অভ্যন্তরীণভাবে নিশ্চিত হয়েছে।
                        </p>
                    </div>
                </div>
            </div>
        </div> -->

      <!-- Mission vission end here -->

      <!-- new mission vission -->

      <div class="mission-vision-section">
        <div class="mission-vision-content container">
          <div class="mission-content">
            <div class="row align-items-center">
              <div class="col-md-6">
                <h3 class="m-0">Mission</h3>
                <p>
                  At Sheikh Hasina Medical University, our mission is to
                  cultivate healthcare leaders through transformative education.
                  Grounded in excellence, compassion, and innovation, we equip
                  students with essential skills and ethical values. We
                  prioritize diversity, fostering a collaborative and global
                  community. Through rigorous academic programs and community
                  service, we instill social responsibility and advocate for
                  health equity. Our commitment extends to impactful medical
                  research, contributing to scientific knowledge and improved
                  patient care. We aim to produce skilled clinicians and
                  compassionate advocates, dedicated to shaping a healthier
                  society.
                </p>
              </div>
              <div class="col-md-6">
                <div class="content-img">
                  <img
                    class="img-fluid"
                    src="./assets/images/about/mission.webp"
                    alt="mission"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="vision-content my-5">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="content-img">
                  <img
                    class="img-fluid"
                    src="./assets/images/about/vission.webp"
                    alt="mission"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <h3 class="m-0">Vision</h3>
                <p>
                  Our vision at Sheikh Hasina Medical University is to be a
                  global leader in medical education, research, and healthcare.
                  We envision graduates as recognized leaders, contributing to
                  improved health worldwide. Our focus is on continuous
                  learning, innovation, and impactful research. We aspire to
                  cultivate a diverse and culturally competent healthcare
                  workforce, addressing global health disparities. Through
                  international collaborations, we aim to exchange knowledge and
                  advance healthcare practices globally. Our vision extends to
                  community engagement, actively addressing healthcare needs and
                  fostering well-being. Through unwavering dedication to our
                  mission, we strive to shape the future of medicine for the
                  betterment of humanity.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--=====================================-->
@endsection