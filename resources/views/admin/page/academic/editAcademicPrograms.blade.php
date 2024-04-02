@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Edit Academic Programs</h1>
    </div>

    {{-- office member form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Edit Academic Programs</h1>
        </div>

        <div class="section-body pt30">
            <form action="{{ route('update.academicProgram',['id'=>$data->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        <label for="">Image : </label>
                        <div class="text-img" id="hero6">
                            <img class="img-group" src="{{asset('storage/programsimg/' . $data->img)}}" id="heroimg" /><br>
                            <input type="file" accept="image/*" name="image" class="inpbox"
                                onchange="loadFile(this)" />
                        </div>

                        @error('image')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Program Time</label>
                            <input type="text" name="time" class="form-control" id="exampleInputPassword1"
                                value="{{ old('time',$data->time) }}">
                        </div>
                        @error('time')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Program name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputPassword1"
                                value="{{ old('name',$data->name) }}">
                        </div>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="d-flex justify-content-between">
                            <div class="form-group" style="min-width: 45%;">
                                <label for="exampleInputPassword1">Faculty </label>
                                <input type="text" name="faculty1" class="form-control" id="exampleInputPassword1"
                                    value="{{ old('faculty1',$data->faculty1) }}">
                            </div>
                            @error('faculty1')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div style="display: flex; align-items: center;">
                                ==
                            </div>
                            <div class="form-group" style="min-width: 45%;">
                                <label for="exampleInputPassword1">Faculty Link</label>
                                <input type="text" name="facultyLink1" class="form-control"
                                    id="exampleInputPassword1" value="{{ old('facultyLink1',$data->facultyLink1) }}">
                            </div>
                            @error('facultyLink1')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-group" style="min-width: 45%;">
                                <label for="exampleInputPassword1">Faculty </label>
                                <input type="text" name="faculty2" class="form-control" id="exampleInputPassword1"
                                    value="{{ old('faculty2',$data->faculty2) }}">
                            </div>
                            @error('faculty2')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div style="display: flex; align-items: center;">
                                ==
                            </div>
                            <div class="form-group" style="min-width: 45%;">
                                <label for="exampleInputPassword1">Faculty Link</label>
                                <input type="text" name="facultyLink2" class="form-control"
                                    id="exampleInputPassword1" value="{{ old('facultyLink2',$data->facultyLink2) }}">
                            </div>
                            @error('facultyLink2')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-group" style="min-width: 45%;">
                                <label for="exampleInputPassword1">Faculty </label>
                                <input type="text" name="faculty3" class="form-control" id="exampleInputPassword1"
                                    value="{{ old('faculty3',$data->faculty3) }}">
                            </div>
                            @error('faculty3')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div style="display: flex; align-items: center;">
                                ==
                            </div>
                            <div class="form-group" style="min-width: 45%;">
                                <label for="exampleInputPassword1">Faculty Link</label>
                                <input type="text" name="facultyLink3" class="form-control"
                                    id="exampleInputPassword1" value="{{ old('facultyLink3',$data->facultyLink3) }}">
                            </div>
                            @error('facultyLink3')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <input type="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</section>


@include('admin/footer')