@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Update Vc Office Member</h1>
    </div>

    {{-- office member form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Update vc office member</h1>
        </div>
        
        <div class="section-body pt30">
            <form action="{{ route('update.vcMember', ['id' => encrypt($data->id)]) }}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="text-section">
                    <div class="text-content">
                        <label for="">Vice Chancellor Image : </label>
                        <div class="text-img" id="hero6">
                            <img class="img-group" src="{{asset('storage/vc-office-member/'.$data->img)}}" id="heroimg" /><br>
                            <input type="file" accept="image/*" name="mem_image" class="inpbox"
                                onchange="loadFile(this)" />
                        </div>

                        @error('mem_image')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Member Name</label>
                            <input type="text" name="mem_name" class="form-control" id="exampleInputPassword1"
                                value="{{ old('mem_name',$data->name) }}">
                        </div>
                        @error('mem_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Member Post</label>
                            <input type="text" name="mem_post" class="form-control" id="exampleInputPassword1"
                                value="{{ old('mem_post',$data->post) }}">
                        </div>
                        @error('mem_post')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Facebook</label>
                            <input type="text" name="mem_facebook" class="form-control"
                                id="exampleInputPassword1" value="{{ old('mem_facebook',$data->facebook) }}">
                        </div>
                        @error('mem_facebook')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Twitter</label>
                            <input type="text" name="mem_twitter" class="form-control" id="exampleInputPassword1"
                                value="{{ old('twitter',$data->twitter) }}">
                        </div>
                        @error('twitter')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Linkedin</label>
                            <input type="text" name="mem_linkedIn" class="form-control"
                                id="exampleInputPassword1" value="{{ old('mem_linkedIn',$data->linkedin) }}">
                        </div>
                        @error('mem_linkedIn')
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
