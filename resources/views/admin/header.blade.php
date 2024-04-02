<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- favicon -->
    <link
      rel="shortcut icon"
      href={{asset("admin/asset/img/favicon.png")}}
      type="image/x-icon"
    />
    <link rel="icon" href={{asset("admin/asset/img/favicon.png")}} type="image/x-icon" />
    <!-- custom css -->
    <link rel="stylesheet" href={{asset("admin/asset/css/style.css")}} />
    <!-- remix icon -->
    <link rel="stylesheet" href={{asset("admin/asset/font/fonts/remixicon.css")}} />
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- bootstrap icon  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- toster css  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <title>SHMU Admin Panel</title>
    <!-- jquery script -->
    <script src={{asset("admin/asset/script/jquery.min.js")}}></script>
  </head>

  <body>
    <!-- ************************* 
        navbar start here
    ****************************** -->
    @php
      use App\Models\SiteSetting;
      $data = SiteSetting::first();
    @endphp
    <section class="shmu-nav shadow">
      <div class="shmu-nav-section">
        <div class="side-nav">
          <aside>
            <div class="nav-header">
              <div class="nav-header-logo">
                <a href="dashboard">
                <img src={{$data->site_logo}} alt="Full Logo" 
                />
              </a>
              </div>
            </div>
            <div class="nav-menu">
              <nav>
                <ul>
                  <a href="dashboard">
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
                                       <li onclick="pageInnerData('facultynursing')">Faculty of Nursing</li>
                                     </ul>
                                   </div>
                              </ul>
                            </div>
                            <li class="hasDropdown">Academic</li>
                            <div class="dropdown-menu-list">
                              <ul class="dropdown-item">
                                  <li onclick="pageInnerData('program')">Program Offered</li>
                                  <li onclick="pageInnerData('academiccalender')">Academic Calender</li>
                                  {{-- <li onclick="pageInnerData('affiliatedins')">Affiliated Institute</li> --}}
                            </div>
                            <li onclick="pageInnerData('notice')">Notice</li>
                            <li onclick="pageInnerData('events&gallery')">Events & Gallery</li>

                            <li class="hasDropdown">Quick Links</li>
                            <div class="dropdown-menu-list">
                              <ul class="dropdown-item">
                                  <li onclick="pageInnerData('noc')">NOC</li>
                                  <li onclick="pageInnerData('apa')">APA</li>
                                  <li onclick="pageInnerData('tender')">Tender</li>
                                  <li onclick="pageInnerData('circuler')">Circuler</li>
                                  <li onclick="pageInnerData('forms')">Forms</li>
                            </div>
                        </ul>
                      </div>
                  </a>
                  <a href='activities'>
                    <li><i class="ri-history-line"></i> Activities</li>
                  </a>
                  <a href='subscriber'>
                    <li><i class="ri-folder-user-line"></i> Subscriber</li>
                  </a>
                  <a href='side-setting'>
                    <li><i class="ri-settings-4-fill"></i> Site Setting</li>
                  </a>
                  {{-- <a href='/report'>
                    <li><i class="ri-alarm-warning-line"></i> Report</li>
                  </a> --}}
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
              <a href="/subscriber" style="color: white;text-decoration: none">
                <i class="ri-mail-fill" title="Subscriber"></i>
              </a>
            </div>
            <div class="header-feature-ele">
              <a href="/activities" style="color: white;text-decoration: none"><i class="ri-folder-chart-fill" title="Activities"></i></a>
              
            </div>
            <div class="header-feature-ele">
              <div class="admin-section">
                
                {{-- <div class="admin-name">
                  <p class="username"><a href="{{route('logout')}}">Mr. Admin Sir</a></p>
                  <p class="userpost">Admin</p>
                </div> --}}
                <div class="profile mx-1" style="position: relative;min-width: 200px;">
                  <div class="d-flex" id="profile">
                    <div class="admin-img">
                      {{-- <img src="{{asset('admin/asset/img/avatar.png')}}" alt=""> --}}
                      {{-- <img src="{{asset('admin/asset/img/avatar.webp')}}" alt="img" > --}}
                    </div>
                    <div class="user">
                      <span>{{auth()->user()->name}}</span>
                    </div>
                  </div>
                  

                  <div  class="dropdown" style="background:white; padding: 10px;
                  border-radius: 5px; position:absolute; margin-top: 10px;display: none " >
                    <ul class="m-0 p-0 fs-6" style="padding-left:1rem">
                    @if (auth()->user()->role == 1)
                      <a href="{{route('add.user')}}"  style="color: black; text-decoration: none;"><li style="list-style: none; padding-bottom: 10px;"><i class="ri-user-add-line fs-6"></i>Create User</li></a>

                      <a href="{{route('manage.user')}}" style="color: black; text-decoration: none;"><li style="list-style: none; padding-bottom: 10px; display:flex"><i class="ri-user-line fs-6"></i>Manage User</li></a>
                    @endif
                    @if (auth()->user()->role == 2)
                      <a href="{{route('change.password')}}" style="color: black; text-decoration: none;"><li style="list-style: none; padding-bottom: 10px; display:flex"><i class="ri-key-line fs-6"></i>Change Password</li></a>
                    @endif
                      <li>
                          <form action="{{route('logout')}}" method="post">
                            @csrf
                            
                            <i class="ri-logout-circle-line fs-6 text-black"></i><input onclick="return confirm('Log Out')" type="submit" value="Log Out" style="border: none; background: white;"></input>
                          </form>
                      </li>



                      {{-- <a href="" style="color: black; text-decoration: none;"><li style="list-style: none; padding-bottom: 10px;"><i class="ri-logout-circle-line fs-6"></i>Log Out</li></a> --}}
                    </ul>
                  </div>
                </div>
                

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

<script>
  $(document).ready(function(){
    var dropdown = $('.dropdown');

    $('#profile').on('click', function(event){
        event.stopPropagation();
        dropdown.toggle('fast');
    });

   
    $(window).on('click', function(){
        if (dropdown.is(':visible')) {
            dropdown.hide('fast');
        }
    });

   
    dropdown.on('click', function(event){
        event.stopPropagation();
    });
  });
</script>