@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Edit Event And Gallery</h1>
    </div>

    {{-- office member form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Edit Event And Gallery</h1>
        </div>

        <div class="section-body pt30">
            <form action="{{route('update.eventandgallery',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        <label for="">Event And Gallery Image : </label>
                        <div class="text-img" id="hero6">
                            <img class="img-group" src="{{asset('storage/eventAndGallery/'.$data->img)}}" id="heroimg" /><br>
                            <input type="file" accept="image/*" name="image" class="inpbox"
                                onchange="loadFile(this)" />
                        </div>

                        @error('image')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Event Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputPassword1"
                                value="{{ old('title',$data->title) }}">
                        </div>
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div>
                            <input type="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @include('admin/footer')