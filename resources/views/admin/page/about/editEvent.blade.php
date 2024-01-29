@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Edit News & Events</h1>
    </div>
    {{-- notic input form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Edit News & Events</h1>
        </div>


        <div class="section-body pt30">
            <form action="{{ route('update.event', ['id' =>encrypt($data->id)]) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        {{-- select date  --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Event Date</label>
                            <input type="date" name='event_date' class="form-control" id="exampleInputPassword1"
                                value="{{ old('event_date',$data->date )}}">
                        </div>
                        @error('event_date')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        {{-- select start time  --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Start Time</label>
                            <input type="time" name="start_time" class="form-control" id="exampleInputPassword1"
                            value="{{ old('start_time',$data->s_time )}}">
                        </div>
                        @error('start_time')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        {{-- select end time  --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">End Time</label>
                            <input type="time" name="end_time" class="form-control" id="exampleInputPassword1"
                                value="{{ old('end_time',$data->e_time) }}">
                        </div>
                        @error('end_time')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        {{-- select location  --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Event Location</label>
                            <input type="text" name="event_location" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter Event Location" value="{{ old('event_location',$data->location) }}">
                        </div>
                        @error('event_location')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        {{-- title  --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Event Title</label>
                            <input type="text" name="event_title" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter Event Title" value="{{ old('event_title',$data->event_title) }}">
                        </div>
                        @error('event_title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        {{-- write text  --}}
                        <div class="text-para">
                            <label for="paragraph">
                                Event Description
                                <textarea class="input-item" name="event_text" id="paragraph" placeholder="Enter Paragraph">{{ old('event_text',$data->event_text) }}</textarea>
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


@include('admin/footer')
