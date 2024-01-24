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
      <!-- campus details -->
      <div class="campus-details pt-5">
        <div class="campus-info container">
          <div class="campus-full-info">
            <h3>CAMPUS DETAILS</h3>
            <div class="campus-img text-center">
              <img
                class="w-25"
                src="./assets/images/about/campus.webp"
                alt="campus image"
              />
              <p class="campus-img-caption">
                Sheikh Hasina Medical University Campus
              </p>
            </div>
          </div>
          <!-- campus overview -->
          <h3>মেডিকেল ইউনিভার্সিটির ক্যাম্পাস সংক্ষেপ:</h3>
          <p class="fs-2">
            এই ইউনিভার্সিটির ক্যাম্পাসে সকল দিকে শিক্ষার উচ্চমান এবং আধুনিক
            মানসম্মত সুযোগ সৃষ্টি হয়েছে। ক্যাম্পাসের একাডেমিক পরিসর অধ্যাপকগণের
            প্রশাসনিক কার্যক্রম ও শিক্ষার পাঠ্যক্রম একসঙ্গে একটি পুরোপুরি
            সমন্বিত উপায়ে সংক্রান্ত রয়েছে। ইউনিভার্সিটির গভর্ণ্যাংশে আছে
            উচ্চমানের শিক্ষা প্রদানের জন্য যোগ্য অধ্যাপকদের সম্ভার, যারা
            ছাত্র-ছাত্রীদেরকে চিকিৎসা এবং স্বাস্থ্য বিজ্ঞানে প্রস্তুত করতে
            অগ্রগতির সঙ্গে জড়িত আছেন।
          </p>
          <p class="fs-2">
            ক্যাম্পাসে অবদান রয়েছে বিভিন্ন গবেষণা প্রকল্পে এবং একাডেমিক
            ইভেন্টে, যা ছাত্র-ছাত্রীদের আধুনিক এবং বৈজ্ঞানিক মাধ্যমে জ্ঞান অর্জন
            করতে উৎসাহিত করে। ইউনিভার্সিটি সংক্রান্ত নতুন উদ্ভাবনের প্রযুক্তি
            সম্মেলন, বিশেষ লেকচার, এবং বিভিন্ন প্রতিযোগিতা এবং কার্যক্রমের
            মাধ্যমে ছাত্র-ছাত্রীদের কর্মসূচির মাধ্যমে উৎসাহিত করে।
          </p>
          <p class="fs-2">
            সাথে সাথে, ক্যাম্পাস জোগান সংস্কৃতি আয়োজন করে, যা একত্রে
            ছাত্র-ছাত্রীদের জনপ্রিয় সাংস্কৃতিক কর্মসূচির হস্তক্ষেপ করে। এই একক
            এবং বিবিধ কর্মসূচিতে অংশ নেওয়া ছাত্র-ছাত্রীদের কর্মসূচি এবং
            উদ্যোগের মাধ্যমে সৃজনশীল আত্মবিশ্বাস বাড়ানো হয়েছে। একসঙ্গে এই
            ক্যাম্পাস একটি আত্মনির্ভর এবং প্রবীণ চিকিৎসা শিক্ষা প্রতিষ্ঠান
            হিসেবে অগ্রণী হতে উদ্দীপ্ত হচ্ছে।
          </p>
          <!-- university map -->
        <div class="campus-map">
          <h3>CAMPUS MAP:</h3>
          <div class="campus-google-map text-center">
            <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d919.5046021139315!2d89.55506304932128!3d22.801781772406077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9b46575def09%3A0x4c999584178abdac!2sSheikh%20Hasina%20Medical%20University%2C%20Khulna!5e0!3m2!1sen!2sbd!4v1703585520453!5m2!1sen!2sbd"
            width="600"
            height="450"
            style="border: 1px solid #aaa"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
          </div>
        </div>
        </div>
      </div>

@endsection