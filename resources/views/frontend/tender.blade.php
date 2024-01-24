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

      <!--=====================================-->
      <!-- <div class="entry_content teder">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h1>Tender</h1>                        
                        <a href="https://shmu.ac.bd/wp-content/uploads/2023/04/MicroBus.pdf">১০ সিটের মাইক্রোবাস ভাড়া- এর জন্য কোটেশন প্রদানের অনুরোধ</a>
                        <a href="https://shmu.ac.bd/wp-content/uploads/2023/02/Calender.pdf">বিশ্ববিদ্যালয়ের ক্যালেন্ডার প্রকাশনা ও সংশ্লিষ্ট সেবার জন্য কোটেশন প্রদানের অনুরোধ</a>
                        <a href="https://shmu.ac.bd/wp-content/uploads/2023/02/Stationary.pdf">বিভিন্ন প্রকার মনিহারি সামগ্রী ও সংশ্লিষ্ট সেবার জন্য কোটেশন প্রদানের অনুরোধ</a>
                        <a href="https://shmu.ac.bd/wp-content/uploads/2023/02/Sanitation.pdf">বিভিন্ন প্রকার স্যানিটেশন সামগ্রী ও সংশ্লিষ্ট সেবার জন্য কোটেশন প্রদানের অনুরোধ&nbsp;</a>
                        <a href="https://shmu.ac.bd/wp-content/uploads/2023/02/Keyboard.pdf">বিভিন্ন প্রকার কম্পিউটার সামগ্রী ও সংশ্লিষ্ট সেবার জন্য কোটেশন প্রদানের অনুরোধ</a>
                        <a href="https://shmu.ac.bd/wp-content/uploads/2023/02/CCTV.pdf">সিসিটিভি ক্যামেরা ও সংশ্লিষ্ট সেবার জন্য কোটেশন প্রদানের অনুরোধ</a>
                    </div>
                </div>
            </div>
        </div> -->
      <!-- tender list start -->

      <div class="midlebody1 container">
        <div>
            <p class="wellcome display-3 text-center">Tenders</p>
        </div>
        <div class="gazette_box">
          <table
            class="content-table-all"
            width="570"
            cellspacing="0"
            cellpadding="0"
            style="border: 1px solid #e8e7e1"
          >
            <thead>
              <tr>
                <td>Tender Name</td>
                <td>Download</td>
                <td>Start Date</td>
                <td>End Date</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <a target="_blank" href="./assets/pdf/MicroBus.pdf">
                    ১০ সিটের মাইক্রোবাস ভাড়া- এর জন্য কোটেশন প্রদানের অনুরোধ
                  </a>
                </td>
                <td class="text-center fs-1 m-0">
                  <a href="./assets/pdf/MicroBus.pdf" download>
                    <i class="ri-download-2-line"></i>
                  </a>
                </td>
                <td>2023-12-26</td>
                <td>2024-02-14</td>
              </tr>

              <tr>
                <td>
                  <a target="_blank" href="https://shmu.ac.bd/wp-content/uploads/2023/02/Calender.pdf">
                    বিশ্ববিদ্যালয়ের ক্যালেন্ডার প্রকাশনা ও সংশ্লিষ্ট সেবার জন্য কোটেশন প্রদানের অনুরোধ
                  </a>
                </td>
                <td class="text-center fs-1 m-0">
                  <a href="https://shmu.ac.bd/wp-content/uploads/2023/02/Calender.pdf" download>
                    <i class="ri-download-2-line"></i>
                  </a>
                </td>
                <td>2023-12-26</td>
                <td>2024-02-13</td>
              </tr>

              <tr>
                <td>
                  <a target="_blank" href="https://shmu.ac.bd/wp-content/uploads/2023/02/Stationary.pdf">
                    বিভিন্ন প্রকার মনিহারি সামগ্রী ও সংশ্লিষ্ট সেবার জন্য কোটেশন প্রদানের অনুরোধ
                  </a>
                </td>
                <td class="text-center fs-1 m-0">
                  <a href="https://shmu.ac.bd/wp-content/uploads/2023/02/Stationary.pdf" download>
                    <i class="ri-download-2-line"></i>
                  </a>
                </td>
                <td>2023-12-26</td>
                <td>2024-02-13</td>
              </tr>

              <tr>
                <td>
                  <a target="_blank" href="https://shmu.ac.bd/wp-content/uploads/2023/02/Sanitation.pdf">
                    বিভিন্ন প্রকার স্যানিটেশন সামগ্রী ও সংশ্লিষ্ট সেবার জন্য কোটেশন প্রদানের অনুরোধ&nbsp;
                  </a>
                </td>
                <td class="text-center fs-1 m-0">
                  <a href="https://shmu.ac.bd/wp-content/uploads/2023/02/Sanitation.pdf" download>
                    <i class="ri-download-2-line"></i>
                  </a>
                </td>
                <td>2023-12-26</td>
                <td>2024-02-13</td>
              </tr>

              <tr>
                <td>
                  <a target="_blank" href="https://shmu.ac.bd/wp-content/uploads/2023/02/Keyboard.pdf">
                    বিভিন্ন প্রকার কম্পিউটার সামগ্রী ও সংশ্লিষ্ট সেবার জন্য কোটেশন প্রদানের অনুরোধ
                  </a>
                </td>
                <td class="text-center fs-1 m-0">
                  <a href="https://shmu.ac.bd/wp-content/uploads/2023/02/Keyboard.pdf" download>
                    <i class="ri-download-2-line"></i>
                  </a>
                </td>
                <td>2023-12-26</td>
                <td>2024-02-13</td>
              </tr>

              <tr>
                <td>
                  <a href="https://shmu.ac.bd/wp-content/uploads/2023/02/CCTV.pdf">
                    সিসিটিভি ক্যামেরা ও সংশ্লিষ্ট সেবার জন্য কোটেশন প্রদানের অনুরোধ
                  </a>
                </td>
                <td class="text-center fs-1 m-0">
                  <a href="https://shmu.ac.bd/wp-content/uploads/2023/02/CCTV.pdf" download>
                    <i class="ri-download-2-line"></i>
                  </a>
                </td>
                <td>2023-12-12</td>
                <td>2023-12-27</td>
              </tr>

              <tr>
                <td>
                  <a target="_blank" href="https://shmu.ac.bd/wp-content/uploads/2023/04/MicroBus.pdf">
                    ১০ সিটের মাইক্রোবাস ভাড়া- এর জন্য কোটেশন প্রদানের অনুরোধ
                  </a>
                </td>
                <td class="text-center fs-1 m-0">
                  <a href="https://shmu.ac.bd/wp-content/uploads/2023/04/MicroBus.pdf" download>
                    <i class="ri-download-2-line"></i>
                  </a>
                </td>
                <td>2023-12-26</td>
                <td>2024-02-14</td>
              </tr>

              <tr>
                <td>
                  <a target="_blank" href="https://shmu.ac.bd/wp-content/uploads/2023/02/Calender.pdf">
                    বিশ্ববিদ্যালয়ের ক্যালেন্ডার প্রকাশনা ও সংশ্লিষ্ট সেবার জন্য কোটেশন প্রদানের অনুরোধ
                  </a>
                </td>
                <td class="text-center fs-1 m-0">
                  <a href="https://shmu.ac.bd/wp-content/uploads/2023/02/Calender.pdf" download>
                    <i class="ri-download-2-line"></i>
                  </a>
                </td>
                <td>2023-12-26</td>
                <td>2024-02-13</td>
              </tr>

              <tr>
                <td>
                  <a target="_blank" href="https://shmu.ac.bd/wp-content/uploads/2023/02/Stationary.pdf">
                    বিভিন্ন প্রকার মনিহারি সামগ্রী ও সংশ্লিষ্ট সেবার জন্য কোটেশন প্রদানের অনুরোধ
                  </a>
                </td>
                <td class="text-center fs-1 m-0">
                  <a href="https://shmu.ac.bd/wp-content/uploads/2023/02/Stationary.pdf" download>
                    <i class="ri-download-2-line"></i>
                  </a>
                </td>
                <td>2023-12-26</td>
                <td>2024-02-13</td>
              </tr>

              <tr>
                <td>
                  <a target="_blank" href="https://shmu.ac.bd/wp-content/uploads/2023/02/Keyboard.pdf">
                    বিভিন্ন প্রকার স্যানিটেশন সামগ্রী ও সংশ্লিষ্ট সেবার জন্য কোটেশন প্রদানের অনুরোধ&nbsp;
                  </a>
                </td>
                <td class="text-center fs-1 m-0">
                  <a href="https://shmu.ac.bd/wp-content/uploads/2023/02/Keyboard.pdf" download>
                    <i class="ri-download-2-line"></i>
                  </a>
                </td>
                <td>2023-12-26</td>
                <td>2024-02-13</td>
              </tr>

              <tr>
                <td>
                  <a target="_blank" href="https://shmu.ac.bd/wp-content/uploads/2023/02/Keyboard.pdf">
                    বিভিন্ন প্রকার কম্পিউটার সামগ্রী ও সংশ্লিষ্ট সেবার জন্য কোটেশন প্রদানের অনুরোধ
                  </a>
                </td>
                <td class="text-center fs-1 m-0">
                  <a href="https://shmu.ac.bd/wp-content/uploads/2023/02/Keyboard.pdf" download>
                    <i class="ri-download-2-line"></i>
                  </a>
                </td>
                <td>2023-12-26</td>
                <td>2024-02-13</td>
              </tr>

              <tr>
                <td>
                  <a href="https://shmu.ac.bd/wp-content/uploads/2023/02/CCTV.pdf">
                    সিসিটিভি ক্যামেরা ও সংশ্লিষ্ট সেবার জন্য কোটেশন প্রদানের অনুরোধ
                  </a>
                </td>
                <td class="text-center fs-1 m-0">
                  <a href="https://shmu.ac.bd/wp-content/uploads/2023/02/CCTV.pdf" download>
                    <i class="ri-download-2-line"></i>
                  </a>
                </td>
                <td>2023-12-12</td>
                <td>2023-12-27</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>

      <!-- tender list End -->
 @endsection