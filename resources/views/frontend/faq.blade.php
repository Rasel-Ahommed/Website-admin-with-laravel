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

    <!-- faq section start -->

    <div class="faq-section">
        <div class="all-faq-body container">
            <section class="page">
                <section class="content">
                    <aside>
                        <h1>FAQ</h1>
                        <p>We understand that you may have questions about our baked goods, so we've compiled a list of frequently asked questions to help you find the information you need.</p>
                        <img src="./assets/images/about/campus.webp"/>
                    </aside>
                    <main>
                        <h2>Product Information</h2>
                        <details>
                              <summary>What dietary options do you offer?<span class="ms-auto my-auto fs-2"><i class="ri-add-circle-line"></i></span></summary>
                              <p>We offer a range of options, including gluten-free, vegan, and nut-free treats. Our goal is to ensure that everyone can indulge in our delicious baked goods without compromising their dietary preferences or restrictions.</p>
                        </details>
                        <details>
                              <summary>Can I place a custom order?<span class="ms-auto my-auto fs-2"><i class="ri-add-circle-line"></i></span></summary>
                              <p>Absolutely! We love helping you celebrate special moments with our custom creations. To ensure we can fulfill your request, we recommend placing custom orders at least 72 hours in advance. This allows us to carefully craft and personalize your order, guaranteeing a fresh and exquisite experience for your special occasion.</p>
                        </details>
                        <details>
                              <summary>Do you offer delivery services?<span class="ms-auto my-auto fs-2"><i class="ri-add-circle-line"></i></span></summary>
                              <p>Yes, we provide delivery services to make enjoying our treats even more convenient. Simply add your desired items to the cart and proceed to checkout to see if your location is eligible for delivery.</p>
                        </details>
                    </main>
                </section>
            </section>
        </div>
    </div>

    <!-- faq section End -->

<!--=====================================-->
    <!--=       CTA Banner Area Start      =-->
    <!--=====================================-->
    <!-- Start Ad Banner Area  -->
    <div class="university-cta-wrapper edu-cta-banner-area bg-image">
        <div class="container">
          <div class="edu-cta-banner">
            <div class="row justify-content-center">
              <div class="col-lg-7">
                <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up"
                  data-sal-duration="800">
                  <h2 class="title">
                    Get Your Quality Skills
                    <span class="color-primary">Certificate</span> Through SHMU
                  </h2>
                  <a href="contact-us.html" class="edu-btn btn-secondary">Get started now <i class="icon-4"></i></a>
                </div>
              </div>
            </div>
            <ul class="shape-group">
              <li class="shape-01 scene">
                <img data-depth="2.5" src="assets/images/cta/shape-10.png" alt="shape" />
              </li>
              <li class="shape-02 scene">
                <img data-depth="-2.5" src="assets/images/cta/shape-09.png" alt="shape" />
              </li>
              <li class="shape-03 scene">
                <img data-depth="-2" src="assets/images/cta/shape-08.png" alt="shape" />
              </li>
              <li class="shape-04 scene">
                <img data-depth="2" src="assets/images/about/shape-13.png" alt="shape" />
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Ad Banner Area  -->
@endsection