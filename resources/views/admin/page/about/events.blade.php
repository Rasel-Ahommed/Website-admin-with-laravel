@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / News & Events</h1>
    </div>
    {{-- notic input form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Add New News & Events</h1>
        </div>


        <div class="section-body pt30">
            <form action="{{ route('store.news&event') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        {{-- select date  --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Event Date</label>
                            <input type="date" name='event_date' class="form-control" id="exampleInputPassword1"
                                value="{{ old('event_date') }}">
                        </div>
                        @error('event_date')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        {{-- select start time  --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Start Time</label>
                            <input type="time" name="start_time" class="form-control" id="exampleInputPassword1"
                                value="{{ old('start_time') }}">
                        </div>
                        @error('start_time')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        {{-- select end time  --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">End Time</label>
                            <input type="time" name="end_time" class="form-control" id="exampleInputPassword1"
                                value="{{ old('end_time') }}">
                        </div>
                        @error('end_time')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        {{-- select location  --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Event Location</label>
                            <input type="text" name="event_location" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter Event Location" value="{{ old('event_location') }}">
                        </div>
                        @error('event_location')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        {{-- title  --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Event Title</label>
                            <input type="text" name="event_title" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter Event Title" value="{{ old('event_title') }}">
                        </div>
                        @error('event_title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        {{-- write text  --}}
                        <div class="text-para">
                            <label for="paragraph">
                                Event Description
                                <textarea class="input-item" name="event_text" id="paragraph" placeholder="Enter Paragraph">{{ old('event_text') }}</textarea>
                            </label>
                            @error('event_text')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</section>

{{-- see all notice  --}}
@php
    use App\Models\NewsAndEvents;
    use Carbon\Carbon;
    $events = NewsAndEvents::latest()->paginate(10);
@endphp

<div class="container p-4">
    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr class="table-primary ">
                        <th scope="col">#</th>
                        <th scope="col">Event Title</th>
                        <th scope="col">Start Text</th>
                        <th scope="col">Event Location</th>
                        <th scope="col">Event Date</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">End Time</th>
                        <th scope="col">Add Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $key => $event)
                        @php
                            // Convert s_time and e_time to 12-hour format with AM/PM
                            $startTime = Carbon::parse($event->s_time)->format('h:i A');
                            $endTime = Carbon::parse($event->e_time)->format('h:i A');

                        @endphp
                        <tr>
                            <th scope="row">{{ ($events->currentPage() - 1) * $events->perPage() + $key + 1 }}</th>
                            <td>{{ $event->event_title }}</td>
                            <td>{{ $event->event_text }}</td>
                            <td>{{ $event->location }}</td>
                            <td>{{ $event->date }}</td>
                            <td>{{ $startTime }}</td>
                            <td>{{ $endTime }}</td>

                            <td class="text-center"><a href="{{route('event.img',['id'=> encrypt($event->id)])}}" >Upload Images<i class="bi bi-cloud-arrow-up"></i></a></td>
                            
                            <td>
                                <a href="{{ route('editEvent', ['id' => encrypt($event->id)]) }}">
                                    <button class="btn btn-primary mb-2"><i class="bi bi-pencil-square"></i></button>
                                </a>
                                <a onclick="return confirm('Are you sure to delete this notice')" href="{{ route('delete.event', ['id' => encrypt($event->id)]) }}">
                                    <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
        {{ $events->links() }}
    </div>
</div>

@include('admin/footer')
