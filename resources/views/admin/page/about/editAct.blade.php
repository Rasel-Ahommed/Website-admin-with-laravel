@include('admin/header')


<section class="page-content">
    <div class="page-head">
        <h1>Page / SHMU ACT</h1>
    </div>

    {{-- notic input form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Update ACT</h1>
        </div>

        <div class="section-body pt30">
            <form action="{{route('act.update',['id'=>encrypt($data->id)])}}" method="POST" enctype="multipart/form-data">
                @method("PUT")
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        {{-- act pdf  --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Upload Act</label>
                            <input type="file" name='actDoc' class="form-control" id="exampleInputPassword1"
                                value="{{ old('actDoc') }}">
                        </div>
                        @error('actDoc')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        {{-- act title --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Act Title</label>
                            <input type="text" name="actTitle" class="form-control" id="exampleInputPassword1"
                                value="{{ old('actTitle',$data->actDoc_heading) }}">
                        </div>
                        @error('actTitle')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                <div>
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</section>

@include('admin/footer')