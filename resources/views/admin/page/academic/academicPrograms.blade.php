@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Academic Programs</h1>
    </div>

    {{-- office member form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Academic Programs</h1>
        </div>

        <div class="section-body pt30">
            <form action="{{ route('academicProgram') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        <label for="">Image : </label>
                        <div class="text-img" id="hero6">
                            <img class="img-group" src="" id="heroimg" /><br>
                            <input type="file" accept="image/*" name="image" class="inpbox"
                                onchange="loadFile(this)" />
                        </div>

                        @error('image')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Program Time</label>
                            <input type="text" name="time" class="form-control" id="exampleInputPassword1"
                                value="{{ old('time') }}">
                        </div>
                        @error('time')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Program name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputPassword1"
                                value="{{ old('name') }}">
                        </div>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="d-flex justify-content-between">
                            <div class="form-group" style="min-width: 45%;">
                                <label for="exampleInputPassword1">Faculty </label>
                                <input type="text" name="faculty1" class="form-control" id="exampleInputPassword1"
                                    value="{{ old('faculty1') }}">
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
                                    id="exampleInputPassword1" value="{{ old('facultyLink1') }}">
                            </div>
                            @error('facultyLink1')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-group" style="min-width: 45%;">
                                <label for="exampleInputPassword1">Faculty </label>
                                <input type="text" name="faculty2" class="form-control" id="exampleInputPassword1"
                                    value="{{ old('faculty2') }}">
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
                                    id="exampleInputPassword1" value="{{ old('facultyLink2') }}">
                            </div>
                            @error('facultyLink2')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-group" style="min-width: 45%;">
                                <label for="exampleInputPassword1">Faculty </label>
                                <input type="text" name="faculty3" class="form-control" id="exampleInputPassword1"
                                    value="{{ old('faculty3') }}">
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
                                    id="exampleInputPassword1" value="{{ old('facultyLink3') }}">
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


    {{-- see all member  --}}

    <div class="container p-4">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped" id="tableScroll">
                    <thead>
                        <tr class="table-primary ">
                            <th scope="col" class="text-nowrap">#</th>
                            <th scope="col" class="text-nowrap">Program Image</th>
                            <th scope="col" class="text-nowrap">Program Name</th>
                            <th scope="col" class="text-nowrap">Program Time</th>
                            <th scope="col" class="text-nowrap">Faculty 1</th>
                            <th scope="col" class="text-nowrap">Faculty Link 1</th>
                            <th scope="col" class="text-nowrap">Faculty 2</th>
                            <th scope="col" class="text-nowrap">Faculty Link 2</th>
                            <th scope="col" class="text-nowrap">Faculty 3</th>
                            <th scope="col" class="text-nowrap">Faculty Link 3</th>
                            <th scope="col" class="text-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                            <tr>
                                <th scope="row"></th>
                                <td><img src="{{$data->img}}" style="width:50px"
                                        alt="img"></td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->time }}</td>
                                <td>{{ $data->faculty1 }}</td>
                                <td>{{ $data->facultyLink1 }}</td>
                                <td>{{ $data->faculty2 }}</td>
                                <td>{{ $data->facultyLink2 }}</td>
                                <td>{{ $data->faculty3 }}</td>
                                <td>{{ $data->facultyLink3 }}</td>
                               
                                    <td>
                                        <div class="d-flex">
                                        <a class="" href="{{ route('edit.program', ['id' => $data->id]) }}"
                                            style="margin-right:10px">
                                            <button class="btn btn-primary mb-2"><i
                                                    class="bi bi-pencil-square"></i></button>
                                        </a>
                                        <a onclick="return confirm('Are you sure to delete this notice')"
                                            href="{{ route('delete.program', ['id' => $data->id]) }}">
                                            <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                        </a>
                                    </div>
                                    </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</section>


@include('admin/footer')
