<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- favicon -->
    <link
      rel="shortcut icon"
      href={{url("admin/asset/img/favicon.png")}}
      type="image/x-icon"
    />
    <link rel="icon" href={{url("admin/asset/img/favicon.png")}} type="image/x-icon" />
    <!-- custom css -->
    <link rel="stylesheet" href={{url("admin/asset/css/style.css")}} />
    <!-- remix icon -->
    <link rel="stylesheet" href={{url("admin/asset/font/fonts/remixicon.css")}} />
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- bootstrap icon  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- toster css  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <title>SHMU Admin Panel</title>
    <!-- jquery script -->
    <script src={{url("admin/asset/script/jquery.min.js")}}></script>
    <!-- page inner data script -->
    <script src={{url("admin/asset/script/page_data.js")}}></script>
  </head>

  <body>
    <!-- ************************* 
        navbar start here
    ****************************** -->

    <section class="shmu-nav shadow">
      <div class="shmu-nav-section">
        <div class="side-nav">
          <aside>
            <div class="nav-header">
              <div class="nav-header-logo">
                <img
                  src={{url("admin/asset/img/logo/Website-Final-1-2.png")}}
                  alt="Full Logo"
                />
              </div>
            </div>
            <div class="nav-menu">
              <nav>
                <ul>
                  <a href={{url("/dashboard")}}>
                    <li><i class="ri-home-4-line"></i> Dashboard</li>
                  </a>
                  <a href="javascript:void(0);">
                    <li class="hasDropdown">
                      <i class="ri-article-fill"></i> Page
                    </li>
                      <div class="dropdown-menu-list">
                        <ul class="dropdown-item">
                            <li onclick="pageInnerData('home')">Home</li>
                            <li class="hasDropdown">About us</li>
                            <div class="dropdown-menu-list">
                              <ul class="dropdown-item">
                                  <li onclick="pageInnerData('shmuact')">SHMU Act</li>
                                 
                                  <li onclick="pageInnerData('inscode')">Institute Code</li>
                                  <li onclick="pageInnerData('campusdetails')">Campus Details</li>
                                  <li onclick="pageInnerData('campusmap')">Campus Map</li>
                                  <li onclick="pageInnerData('mission')">Mission & Vision</li>
                                  <li onclick="pageInnerData('news&event')">News & Events</li>
                              </ul>
                            </div>
                            <li class="hasDropdown">Administrative</li>
                            <div class="dropdown-menu-list">
                              <ul class="dropdown-item">
                                  <li onclick="pageInnerData('chancellor')">Chancellor</li>
                                  <li onclick="pageInnerData('vc')">Vice Chancellor</li>
                                  <li onclick="pageInnerData('syndicate')">University Syndicate</li>
                                  <li onclick="pageInnerData('academiccouncil')">Academic Council</li>
                                  <li onclick="pageInnerData('admincouncil')">Admin Council</li>
                                  <li class="hasDropdown">Dean of Faculty</li>
                                   <div class="dropdown-menu-list">
                                     <ul class="dropdown-item">
                                       <li onclick="pageInnerData('facultymedicine')">Faculty of Medicine</li>
                                       <li onclick="pageInnerData('facultybspcs')">Faculty of Besic Science & Para Clinical Science</li>
                                       <li onclick="pageInnerData('facultynurse')">Faculty of Nursing</li>
                                     </ul>
                                   </div>
                              </ul>
                            </div>
                            <li class="hasDropdown">Academic</li>
                            <div class="dropdown-menu-list">
                              <ul class="dropdown-item">
                                  <li onclick="pageInnerData('program')">Program Offered</li>
                                  <li onclick="pageInnerData('academiccalender')">Academic Calender</li>
                                  <li onclick="pageInnerData('affiliatedins')">Affiliated Institute</li>
                            </div>
                            <li onclick="pageInnerData('notice')">Notice</li>
                            <li onclick="pageInnerData('events&gallery')">Events & Gallery</li>
                            <li class="hasDropdown">Quick Links</li>
                        </ul>
                      </div>
                  </a>
                  <a href='/activities'>
                    <li><i class="ri-history-line"></i> Activities</li>
                  </a>
                  <a href='/subscriber'>
                    <li><i class="ri-folder-user-line"></i> Subscriber</li>
                  </a>
                  <a href='/report'>
                    <li><i class="ri-alarm-warning-line"></i> Report</li>
                  </a>
                </ul>
              </nav>
            </div>
            <div class="nav-footer">
              <p>
                &copy; Copyright 2024 All right reserve to
                <a href="#">Sheikh hasina medical university, Khulna</a> and
                develop by <a href="#">&#128295; ussbd</a>
              </p>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <!-- ************************* 
        navbar end here
    ****************************** -->
    <!-- ************************* 
        Header Start here
    ****************************** -->

    <section class="shmu-header shadow">
      <div class="shmu-header-section">
        <header>
          <div class="header-menu-icon" onclick="navresize()">
            <i class="burger-menu-ani"></i>
          </div>
          <div class="header-title">
            <h1>SHMU Admin Panel</h1>
          </div>
          <div class="header-feature">
            <div class="header-feature-ele">
              <i class="ri-mail-fill" title="Subscriber"></i>
            </div>
            <div class="header-feature-ele">
              <i class="ri-folder-chart-fill" title="Activities"></i>
            </div>
            <div class="header-feature-ele">
              <div class="admin-section">
                <div class="admin-img">
                  <img src={{url("admin/asset/img/favicon.png")}} alt="admin" loading="lazy">
                </div>
                {{-- <div class="admin-name">
                  <p class="username"><a href="{{route('logout')}}">Mr. Admin Sir</a></p>
                  <p class="userpost">Admin</p>
                </div> --}}
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  {{auth()->user()->name}} <br>
                  <x-dropdown-link :href="route('logout')"
                          style="text-decoration: none"
                          onclick="event.preventDefault(); this.closest('form').submit();">
                      {{-- {{ __('Logout') }} --}}
                      <span class="text-white" >Log Out</span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right text-white" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                      </svg>
                  </x-dropdown-link>
              </form>

              </div>
            </div>
          </div>
        </header>
      </div>
    </section>

    <!-- ************************* 
        Header End here
    ****************************** -->
    <!-- ************************* 
        Main start here
    ****************************** -->
    <main>