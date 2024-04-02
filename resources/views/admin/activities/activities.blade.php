
@include('./admin/header')
<!--*****************************
     todays activities start
********************************-->
@php
     use Carbon\Carbon;
@endphp
<section class="activities">
    <div class="page-head">
        <h1>Activities</h1>
    </div>
    <div class="today-activities shadow">
        <div class="today-act-list">
            <div class="card-act">
                <div class="card-act-heading">
                    <h3>All Activities</h3>
                </div>
                @foreach ($datas as $data)
                    <div class="card-act-body">
                        <div class="card-act-img">
                            <img src="{{asset("storage/siteImg/avater.png")}}" alt="User Profile">
                        </div>
                        <div class="card-act-details">
                            <div class="act-work">
                                <p>You edit {{$data->name}}</p>
                            </div>
                            <div class="act-time">
                                
                            @php
                                $formattedDate = Carbon::parse($data->date_time)->format('y-M-d');

                                $formattedTime = Carbon::parse($data->date_time)->format('h:i:s A');
                               
                            @endphp

                                <p>Date: {{$formattedDate}} / Time: {{$formattedTime}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
    {{$datas->links()}}

</section>

<!--*****************************
     todays activities end
********************************-->
@include('./admin/footer')