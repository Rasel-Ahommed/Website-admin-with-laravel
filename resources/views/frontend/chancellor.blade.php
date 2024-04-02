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
        <!--========================
            massage of chancellor starts
            ===========================-->

            @php
                use App\Models\Chancellor;
                $data = Chancellor::first();
            @endphp
            <div class="edu-team-details-area py-5">
                <div class="container">
                    <div class="row row--40">
                        <div class="col-lg-4">
                            <div class="team-details-thumb">
                                <div class="thumbnail">
                                    <img src="{{$data->chan_img}}" alt="Vice Chancellor" loading="lazy">
                                </div>
                                <ul class="social-share">
                                    <li><a href="{{$data->chan_web}}"><i class="icon-share-alt"></i></a></li>
                                    <li><a href="{{$data->chan_fb}}"><i class="icon-facebook"></i></a></li>
                                    <li><a href="{{$data->chan_tw}}"><i class="icon-twitter"></i></a></li>
                                    <li><a href="{{$data->chan_link}}"><i class="icon-linkedin2"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="team-details-content">
                                <div class="main-info">
                                    <span class="subtitle">Chancellor</span>
                                    <p>{{$data->chan_name}}</p>
                                    <span class="designation">President of Bangladesh</span>
                                </div>
                                <div class="bio-describe">
                                    <h4 class="title">About Me</h4>
                                    {!!$data->chan_about!!}
                                </div>
                                <!-- <div class="contact-info">
                                    <h4 class="title">Contact Me</h4>
                                    <ul>
                                        <li><span>Address:</span>Sheikh Hasina Medical University, Khulna</li>
                                        <li><span>Email:</span><a href="mailto:shmu@example.com" target="_blank">shmu@example.com</a></li>
                                        <li><span>Phone:</span><a href="tel:+37(417)683-4409">+37 (417) 683-4409</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="massage-chancellor">
                        <p></p>
                        {!!$data->chan_welcome!!}
                    </div>
                </div>
            </div>

        <!--========================
            massage of chancellor ends
            ===========================-->
        <!-- <div id="page-content" style="background-color:#fff;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <img src="./assets/images/administration/abdul-hadmi-presidnet-of-Bangladesh-1.jpg" align="right" class="img1">
                            <p></p>
                            
                            
                            <p>
                                <h6>সফল এবং আগামীর দিকে অগ্রগতি:</h6> আমরা আশা করছি আপনাদের যাত্রা সফল হবে এবং আপনার শিক্ষার মাধ্যমে নতুন দক্ষতা এবং উদ্দীপনা অর্জন করবে। আমরা সম্প্রদায়ের একটি অংশ হিসেবে আপনাদের সাথে থাকতে প্রতিশ্রুতিবদ্ধ এবং আপনাদের প্রগতি তে সাহায্য করতে আগ্রহী।
                            </p>
                            <p>
                                <h6>অবদানের অমূল্য রত্ন:</h6> এই ইউনিভার্সিটি আমাদের জীবনের একটি অমূল্য রত্ন, একটি সাক্ষরিক প্রতিষ্ঠান, এবং একটি সভ্য সম্প্রদায় যেখানে জ্ঞান এবং সংস্কৃতির মাধ্যমে জীবনের প্রাসাদ পাওয়া হয়। আমরা সম্মান্য শিক্ষকবৃন্দ, উন্নত শিক্ষামূলক সাধনা, এবং সকল ছাত্র-ছাত্রীদের প্রতি আমাদের দায়িত্বে গর্বিত।
                            </p>
                            <p>
                                <h6>সম্মান ও বিচার:</h6> এই ইউনিভার্সিটি একটি সম্মানযোগ্য পরিবেশ সৃষ্টি করতে প্রতিশ্রুতিবদ্ধ, যেখানে সবাই একে অপরকে মানযোগ্যভাবে বোঝে এবং মৌলিক বিচারের মাধ্যমে সমাধানে যায়। আমরা সকল সদস্যকে উচ্চ মান স্থাপন করতে উৎসাহিত করছি, যাতে সম্মান, বৈশিষ্ট্য, এবং ভিন্নতা মৌলিক অধিকার হোক।
                            </p>
                            <p>
                                <h6>অবদানের সম্মান:</h6> আমরা সকল অধ্যায়নকে অনুসন্ধানের এবং সৃজনশীল চিন্তা বৃদ্ধির জন্য উৎসাহিত করছি। ছাত্র-ছাত্রীদের কাজের ফিল্ডে অভিজ্ঞান অর্জন করতে এবং সমাজে প্রভৃতি দিতে উৎসাহিত করছি। সকলকে সাপেক্ষ অভিজ্ঞান এবং সৃজনশীলতার প্রতি আবদ্ধ করতে এবং একে অপরকে সাহায্য করতে উৎসাহিত করছি।
                            </p>
                            <p>
                                <strong>Abdul Hamid </strong><br>
                                CHAIRMAN &amp; PRESIDENT 
                            </p>
                        </div>
                   </div>
                </div>
             </div> -->
        <!--=====================================-->
        <!--=       Brand Area Start      		=-->
        <!--=====================================-->
        <!-- Start Brand Area  -->
        <!-- <div class="edu-brand-area brand-area-4 gap-lg-bottom-equal">
            <div class="container">
                <div class="brand-grid-wrap brand-style-2">
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/KMCH-Logo.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/Satkhira_Medical_College_logo_prev_ui.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/JMC_Logo_Official.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/Kushtia_Medical_College_logo.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/Magura_Medical_College_logo_prev_ui.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/images-removebg-preview-1.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/1580196858315_prev_ui.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/website_LOGO.x53526.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/239886925_201199132057068_8794747946884330164_n_prev_ui.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="assets/images/college_logo/Logo_prev_ui.png" alt="Brand Logo">
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Brand Area  -->
@endsection