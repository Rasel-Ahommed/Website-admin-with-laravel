@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Add Event Images</h1>
    </div>
    {{-- notic input form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Add Event Images</h1>
        </div>

        <div class="section-body pt30">
            <form action='{{ route('store.event.img', ['id' => encrypt($id)]) }}' method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        {{-- select img  --}}
                        <div class="form-group">

                            <label for="formFileMultiple" class="form-label">Select Images (You can select multiple
                                images)</label>
                            <input class="form-control" required  type="file" name="eventImg[]" id="formFileMultiple"
                                multiple />
                        </div>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="text-danger">{{ $error }}</div>
                            @endforeach
                        @endif

                        {{-- select start time  --}}
                        <div class="form-group">
                            <input type="hidden" name="event_id" class="form-control" id="exampleInputPassword1"
                                value="{{ $id }}">
                        </div>

                    </div>
                </div>
                <div>
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>

    <div class="section shadow">

        <h1>Events Images</h1>

        <div class="section-body">
            <div class="img-element-group d-flex justify-content-around flex-wrap">
                @foreach ($data as $d)
                    <div class="img-group text-center" id="hero1" style="width: 12rem;position: relative;">

                        <img style="width: 100%;position: relative;"
                            src="{{ asset('storage/eventImage/' . $d->e_img) }}" alt="img">
                        <a style="position: absolute;top: -5px;right: -20px;" onclick="return confirm('You want to delete this image?')"
                            href="{{route('delete.eventImg',['id'=>$d->id])}}"><i class="bi bi-x-circle-fill text-danger"></i></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</section>




@include('admin/footer')
