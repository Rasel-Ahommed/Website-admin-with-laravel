@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Update Admin Council</h1>
    </div>

    {{-- office member form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Update Admin Council Member</h1>
        </div>

        <div class="section-body pt30">
            <form action="{{route('update.admin.council',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        <label for="">Vice Chancellor Image : </label>
                        <div class="text-img" id="hero6">
                            <img class="img-group" src="{{ asset('storage/adminCouncil/' . $data->img) }}" id="heroimg" /><br>
                            <input type="file" accept="image/*" name="image" class="inpbox"
                                onchange="loadFile(this)" />
                        </div>

                        @error('image')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Member Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputPassword1"
                                value="{{ old('name',$data->name) }}">
                        </div>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Member Post</label>
                            <input type="text" name="post" class="form-control" id="exampleInputPassword1"
                                value="{{ old('post',$data->post) }}">
                        </div>
                        @error('post')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" name="email" class="form-control" id="exampleInputPassword1"
                                value="{{ old('email',$data->email) }}">
                        </div>
                        @error('email')
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
</section>


@include('admin/footer')
