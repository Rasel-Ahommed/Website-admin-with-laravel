@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Faculty of Basic Science
            and para clinical
            Science </h1>
    </div>
    <div class="section shadow">
        <div class="section-head">
            <h1>Faculty Of Basic Science  and para clinical
                Science</h1>
            <div class="editbtn">
                <button onclick="editSection(this)">
                    <i id="editEnable" class="ri-pencil-fill"></i>
                    <i id="editDisable" class="ri-close-line"></i>
                </button>
            </div>
        </div>
        <div class="section-body pt30">
            <form action="{{route('update.facultynursing',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        <div class="text-img" id="hero6">
                            <img class="img-group" src="{{asset('storage/deanImg/'.$data->img)}}" id="heroimg"/>
                            <input type="file" accept="image/*" name="image" class="filehero inpbox" onchange="loadFile(this)"/>
                        </div>
                        @error('image')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="text-title" id="">
                            <label for="title">
                                Name
                                <input class="input-item" type="text" name="name" id="title" placeholder="Enter name" value="{{old('name',$data->name)}}" disabled>
                            </label>
                        </div>
                        @error('name')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="text-title" id="">
                            <label for="title">
                                Post
                                <input class="input-item" type="text" name="post" id="title" placeholder="Enter Post" value="{{old('post',$data->post)}}" disabled>
                            </label>
                        </div>
                        @error('post')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="text-title" id="">
                            <label for="title">
                                Phone
                                <input class="input-item" type="text" name="phone" id="title" placeholder="Phone Name" value="{{old('phone',$data->phone)}}" disabled>
                            </label>
                        </div>
                        @error('phone')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="text-title" id="">
                            <label for="title">
                                email
                                <input class="input-item" type="text" name="email" id="title" placeholder="Email " value="{{old('phone',$data->email)}}" disabled>
                            </label>
                        </div>
                        @error('email')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="sectionSubmit">
                    <input type="submit" value="Submit">
                    <button type="cancel" onclick="editSection(this?.parentNode?.parentNode?.parentNode?.parentNode?.children[0]?.children[1]?.children[0])">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</section>

@include('admin/footer')