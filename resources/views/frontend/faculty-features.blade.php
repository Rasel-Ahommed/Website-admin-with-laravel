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
      <!--=        Body Area Start       	    =-->
      <!--=====================================-->

      <!-- strategy section -->
      <div class="strategy-section" id="strategy">
        <div class="container py-5">
          <div class="section-title text-center section-left">
            <span class="pre-title">Our</span>
            <h2 class="title">STRATEGY</h2>
            <span class="shape-line"><i class="icon-19"></i></span>
          </div>
          <div class="main-strategy">
            <p>
              শেখ হাসিনা মেডিকেল ইউনিভার্সিটির শিক্ষকমন্ডল একটি উত্কৃষ্ট
              সমৃদ্ধির প্রতীক, যেখানে আমরা প্রতিটি শিক্ষককে শক্তিশালী করতে এবং
              শিক্ষার জগতে এক নতুন দিকে এগিয়ে যেতে উৎসাহিত করি।
            </p>
            <p>
              <span class="h6 d-block m-0">শিক্ষার মাধ্যমে মৌলিক উন্নতি:</span>
              আমরা শিক্ষার মাধ্যমে সকল ছাত্রদের জন্য একটি উচ্চ মানের শিক্ষা
              প্রদান করার দিকে মৌলিকভাবে বদ্ধপ্রজ্ঞ। আমরা উন্নত শিক্ষামূলক
              পদক্ষেপের মাধ্যমে ছাত্রদেরকে বিশ্বের চ্যালেঞ্জগুলির সামনে সজীব
              করতে উৎসাহিত করি।
            </p>
            <p>
              <span class="h6 d-block m-0">সহযোগিতামূলক অধ্যয়ন পরিবেশ:</span>
              আমরা শিক্ষকমন্ডলের মধ্যে সহযোগিতামূলক শেখার পরিবেশ সৃষ্টি করতে
              গুরুত্ব দিই। টীম ওয়ার্কের মাধ্যমে আমরা বৈদ্যুতিন্দ্রীয় উন্নতি
              এবং সমস্যার সমাধানের দক্ষতা উন্নত করতে চেষ্টা করি।
            </p>
            <p>
              <span class="h6 d-block m-0">গবেষণা এবং উদ্ভাবন:</span>
              শেখ হাসিনা মেডিকেল ইউনিভার্সিটি প্রযুক্তিগত বিজ্ঞানে অগ্রগতির
              চেষ্টা করে। আমাদের শিক্ষকমন্ডলকে অনুপ্রবেশন, বৃদ্ধি ও গবেষণা
              উদ্ভাবনের দিকে এক উচ্চ মাধ্যমিকা দেওয়া হয়।
            </p>
            <p>
              <span class="h6 d-block m-0">পেশাদানের উন্নতির সুযোগ:</span>
              আমরা শিক্ষকমন্ডলের বৃদ্ধি ও উন্নতি বজায় রাখার জন্য সকল ব্যাক্তিকে
              অনুশোচনা করি। কর্মশীলতা, কর্মক্ষমতা এবং একাধিকারণ উন্নতির পথে
              অবদান রাখার জন্য কর্মক্ষমতা উন্নত করতে আমরা উৎসাহিত করি।
            </p>
            <p>
              <span class="h6 d-block m-0">ছাত্র-কেন্দ্রিত দিকে অবদান:</span>
              আমাদের শিক্ষক রণনীতি শিক্ষার প্রতি একটি ছাত্র-কেন্দ্রিত দিকে
              মুখোমুখি থাকে। আমরা ছাত্রদের সাথে যোগাযোগ করে তাদের সাথে
              মেন্টরশীপের সম্পর্ক উন্নত করতে চেষ্টা করি এবং তাদের একাধিকারণ
              প্রয়োজনে পথনির্দেশন করতে হাতের মুড়ি হতে চাই।
            </p>
            <p>
              <span class="h6 d-block m-0"
                >বৈচিত্র্যবাদী এবং বৈশিষ্ট্যযুক্ত পরিবেশ:</span
              >
              বৈশিষ্ট্যযুক্ত মূল্যবোধ করে আমরা একটি বৈচিত্র্যবাদী শিক্ষকমন্ডল
              তৈরি করেছি যেখানে বিভিন্ন ধর্ম, জাতি, এবং সম্প্রদায়ের প্রতি
              শ্রদ্ধা ও সমর্থন আছে। এটি শিক্ষার অভিজ্ঞতা তৈরি করে এবং ছাত্রদেরকে
              একটি প্রশান্ত, উদ্যমিতা ভরপুর পরিবেশে শিক্ষা দান করার জন্য
              মাধ্যমিকা হয়।
            </p>
            <p>
              শেখ হাসিনা মেডিকেল ইউনিভার্সিটির শিক্ষক রণনীতি প্রধানত উন্নতি,
              সহযোগ, এবং নবজাগরূকতা উপকেন্দ্র করে। ছাত্র-মৌলিক শেখার, বিভিন্নতা
              ও বিশ্ব সংযোগে মুখোমুখি হতে, আমাদের শিক্ষকমন্ডল একটি চমকপ্রদ এবং
              পরিবর্তনাত্মক শিক্ষা পরিবেশ তৈরি করতে চেষ্টা করছে। অবশ্য, অবিরত
              উন্নতি এবং নতুন গবেষণায় প্রতিশ্রুতিবদ্ধ, আমরা ভবিষ্যতের
              স্বাস্থ্যসেবা নেতাদের রূপান্তর করতে নির্ধারিত। একসাথে, আমরা শিক্ষা
              প্রণালীর উন্নতি করতে, জ্ঞান, দয়া, এবং উন্নতির উপর ভিত্তি করা একটি
              সম্প্রদায় তৈরি করতে অবদানশীল হতে দগ্ধ শেখ হাসিনা মেডিকেল
              ইউনিভার্সিটিতে।
            </p>
          </div>
        </div>
      </div>

      <!-- faculty member -->
      <div class="faculty-member" id="member">
        <div class="container faculty-list">
          <div class="section-title text-center section-left">
            <span class="pre-title">List of</span>
            <h2 class="title">FACULTY MEMBER</h2>
            <span class="shape-line"><i class="icon-19"></i></span>
          </div>
          <div class="all-member">
            <div class="btn-list row">
              <button
                id="btn_member_all"
                onclick="getMemberList('btn_member_all')"
                class="col-md-4 btn btn-custom fs-2 p-3 selected-btn"
              >
                All
              </button>
              <button
                id="btn_member_mbbs"
                onclick="getMemberList('btn_member_mbbs')"
                class="col-md-4 btn btn-custom fs-2 p-3"
              >
                Faculty of MBBS
              </button>
              <button
                id="btn_member_nursing"
                onclick="getMemberList('btn_member_nursing')"
                class="col-md-4 btn btn-custom fs-2 p-3"
              >
                Faculty of Nursing
              </button>
            </div>
          </div>
          <div class="faculty-universal-member faculty-member-list-in">
            <div class="card d-md-flex my-3">
              <img
                width="150px"
                height="200px"
                class="card-img-right"
                src="./assets/images/administration/IMG-20220510-WA0048.jpg"
                alt="Title"
              />
              <div class="card-body">
                <h4 class="card-title">Professor Dr. Md. Mahbubur Rahman</h4>
                <p class="card-text">MBBS, FCPS (Haematology)</p>
                <p class="card-text">Vice Chancellor</p>
                <p>
                  <a href="tel:+">
                    <i title="+880 1873 873 945" class="ri-phone-line"></i>
                  </a>
                  <a href="mailto:">
                    <i title="mahbub.vc@shmu.ac.bd" class="ri-at-line"></i>
                  </a>
                </p>
              </div>
            </div>
            <div class="card d-md-flex my-3">
              <img
                width="150px"
                height="200px"
                class="card-img-right"
                src="./assets/images/administration/registraer.png"
                alt="Title"
              />
              <div class="card-body">
                <h4 class="card-title">Md. Abdur Rouf</h4>
                <p class="card-text"></p>
                <p class="card-text">Register</p>
                <p>
                  <a href="tel:+">
                    <i title="+880 1873 873 945" class="ri-phone-line"></i>
                  </a>
                  <a href="mailto:">
                    <i title="mahbub.vc@shmu.ac.bd" class="ri-at-line"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
          <div class="faculty-mbbs-member faculty-member-list-in">
            <div class="card d-md-flex my-3">
              <img
                width="150px"
                height="200px"
                class="card-img-right"
                src="./assets/images/administration/office-of-college-inspector/Md.-Maruf-Hossain.jpg"
                alt="Title"
              />
              <div class="card-body">
                <h4 class="card-title">Md. Maruf Islam</h4>
                <p class="card-text">MBBS</p>
                <p class="card-text">Assistant Professor</p>
                <p>
                  <a href="tel:+">
                    <i title="+880 1873 873 945" class="ri-phone-line"></i>
                  </a>
                  <a href="mailto:">
                    <i title="mahbub.vc@shmu.ac.bd" class="ri-at-line"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
          <div class="faculty-nursing-member faculty-member-list-in">
            <div class="card d-md-flex my-3">
              <img
                width="150px"
                height="200px"
                class="card-img-right"
                src="./assets/images/administration/planning-and-development/Md.-Rakibul-Islam-Khan.jpg"
                alt="Title"
              />
              <div class="card-body">
                <h4 class="card-title">Md. Rakibul Islam Khan</h4>
                <p class="card-text">ICT</p>
                <p class="card-text">P&D Team</p>
                <p>
                  <a href="tel:+">
                    <i title="+880 1873 873 945" class="ri-phone-line"></i>
                  </a>
                  <a href="mailto:">
                    <i title="mahbub.vc@shmu.ac.bd" class="ri-at-line"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- faculty-research -->

      <div id="research" class="faculty-research position-relative">
        <div class="section-title text-center section-left">
          <span class="pre-title"></span>
          <h2 class="title">Research Paper</h2>
          <span class="shape-line"><i class="icon-19"></i></span>
        </div>
        <div class="faculty-research-paper container">
          <article class="card">
            <header class="card__thumb">
              <a href="#">
                <img src="https://images.unsplash.com/photo-1512466699224-9d8217244131?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4b6f389eb54cb8e27ee8ee5d4040a5d7&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb"/>
              </a>
            </header>
            <div class="card__date">
              <span class="card__date__day">23</span>
              <span class="card__date__month">Mai</span>
            </div>
            <div class="card__body">
              <div class="card__category">
                <a href="#">Category</a>
              </div>
              <div class="card__title">
                <a href="#">Vivamus elementum semper nisivi troscup</a>
              </div>
              <!-- <div class="card__subtitle">Donec posuere vulputate</div> -->
              <!-- <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore sapiente doloremque recusandae, modi dolore velit, illum itaque minus inventore, omnis et nisi rem facere. Labore sapiente doloremque recusandae, modi dolore velit, illum itaque minus inventore, omnis et nisi rem facere.</p> -->
            </div>
            <footer class="card__footer">
              <span><i class="ri-time-line"></i> 6 min</span>
              <!-- <span class="icon icon--comment">
                <a href="#">2 comments</a>
              </span> -->
            </footer>
          </article>
          <article class="card">
            <header class="card__thumb">
              <a href="#">
                <img src="https://images.unsplash.com/photo-1512466699224-9d8217244131?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4b6f389eb54cb8e27ee8ee5d4040a5d7&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb"/>
              </a>
            </header>
            <div class="card__date">
              <span class="card__date__day">23</span>
              <span class="card__date__month">Mai</span>
            </div>
            <div class="card__body">
              <div class="card__category">
                <a href="#">Category</a>
              </div>
              <div class="card__title">
                <a href="#">Vivamus elementum semper nisivi troscup</a>
              </div>
              <!-- <div class="card__subtitle">Donec posuere vulputate</div> -->
              <!-- <p class="card__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                sapiente doloremque recusandae, modi dolore velit, illum itaque
                minus inventore, omnis et nisi rem facere. Labore sapiente
                doloremque recusandae, modi dolore velit, illum itaque minus
                inventore, omnis et nisi rem facere.
              </p> -->
            </div>
            <footer class="card__footer">
              <span class="ri-time-line">6 min</span>
              <!-- <span class="icon icon--comment">
                <a href="#">2 comments</a>
              </span> -->
            </footer>
          </article>
          <article class="card">
            <header class="card__thumb">
              <a href="#"
                ><img
                  src="https://images.unsplash.com/photo-1512466699224-9d8217244131?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4b6f389eb54cb8e27ee8ee5d4040a5d7&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb"
              /></a>
            </header>
            <div class="card__date">
              <span class="card__date__day">23</span>
              <span class="card__date__month">Mai</span>
            </div>
            <div class="card__body">
              <div class="card__category">
                <a href="#">Category</a>
              </div>
              <div class="card__title">
                <a href="#">Vivamus elementum semper nisivi troscup</a>
              </div>
              <!-- <div class="card__subtitle">Donec posuere vulputate</div>
              <p class="card__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                sapiente doloremque recusandae, modi dolore velit, illum itaque
                minus inventore, omnis et nisi rem facere. Labore sapiente
                doloremque recusandae, modi dolore velit, illum itaque minus
                inventore, omnis et nisi rem facere.
              </p> -->
            </div>
            <footer class="card__footer">
              <span class="ri-time-line">6 min</span>
              <!-- <span class="icon icon--comment">
                <a href="#">2 comments</a>
              </span> -->
            </footer>
          </article>
          <article class="card">
            <header class="card__thumb">
              <a href="#">
                <img src="https://images.unsplash.com/photo-1512466699224-9d8217244131?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4b6f389eb54cb8e27ee8ee5d4040a5d7&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb"/>
              </a>
            </header>
            <div class="card__date">
              <span class="card__date__day">23</span>
              <span class="card__date__month">Mai</span>
            </div>
            <div class="card__body">
              <div class="card__category">
                <a href="#">Category</a>
              </div>
              <div class="card__title">
                <a href="#">Vivamus elementum semper nisivi troscup</a>
              </div>
              <!-- <div class="card__subtitle">Donec posuere vulputate</div>
              <p class="card__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                sapiente doloremque recusandae, modi dolore velit, illum itaque
                minus inventore, omnis et nisi rem facere. Labore sapiente
                doloremque recusandae, modi dolore velit, illum itaque minus
                inventore, omnis et nisi rem facere.
              </p> -->
            </div>
            <footer class="card__footer">
              <span class="ri-time-line">6 min</span>
              <!-- <span class="icon icon--comment">
                <a href="#">2 comments</a>
              </span> -->
            </footer>
          </article>
          <article class="card">
            <header class="card__thumb">
              <a href="#">
                <img src="https://images.unsplash.com/photo-1512466699224-9d8217244131?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4b6f389eb54cb8e27ee8ee5d4040a5d7&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb"/>
              </a>
            </header>
            <div class="card__date">
              <span class="card__date__day">23</span>
              <span class="card__date__month">Mai</span>
            </div>
            <div class="card__body">
              <div class="card__category">
                <a href="#">Category</a>
              </div>
              <div class="card__title">
                <a href="#">Vivamus elementum semper nisivi troscup</a>
              </div>
              <!-- <div class="/card__subtitle">Donec posuere vulputate</div>
              <p class="card__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                sapiente doloremque recusandae, modi dolore velit, illum itaque
                minus inventore, omnis et nisi rem facere. Labore sapiente
                doloremque recusandae, modi dolore velit, illum itaque minus
                inventore, omnis et nisi rem facere.
              </p> -->
            </div>
            <footer class="card__footer">
              <span class="ri-time-line">6 min</span>
              <!-- <span class="icon icon--comment">
                <a href="#">2 comments</a>
              </span> -->
            </footer>
          </article>
          <article class="card">
            <header class="card__thumb">
              <a href="#">
                <img src="https://images.unsplash.com/photo-1512466699224-9d8217244131?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4b6f389eb54cb8e27ee8ee5d4040a5d7&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb"/>
              </a>
            </header>
            <div class="card__date">
              <span class="card__date__day">23</span>
              <span class="card__date__month">Mai</span>
            </div>
            <div class="card__body">
              <div class="card__category">
                <a href="#">Category</a>
              </div>
              <div class="card__title">
                <a href="#">Vivamus elementum semper nisivi troscup</a>
              </div>
              <!-- <div class="card__subtitle">Donec posuere vulputate</div>
              <p class="card__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                sapiente doloremque recusandae, modi dolore velit, illum itaque
                minus inventore, omnis et nisi rem facere. Labore sapiente
                doloremque recusandae, modi dolore velit, illum itaque minus
                inventore, omnis et nisi rem facere.
              </p> -->
            </div>
            <footer class="card__footer">
              <span class="ri-time-line">6 min</span>
              <!-- <span class="icon icon--comment">
                <a href="#">2 comments</a>
              </span> -->
            </footer>
          </article>
        </div>
      </div>

      <!--=====================================-->
      <!--=        Body Area End       	    =-->
      <!--=====================================-->
@endsection
