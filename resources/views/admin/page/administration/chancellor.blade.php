@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Campus Details</h1>
    </div>
    <div class="section shadow">
        <div class="section-head">
            <h1>Campus Details</h1>
            <div class="editbtn">
                <button onclick="editSection(this)">
                    <i id="editEnable" class="ri-pencil-fill"></i>
                    <i id="editDisable" class="ri-close-line"></i>
                </button>
            </div>
        </div>
       
        <div class="section-body pt30">
            <form action="{{route('chancellor/update',['id'=>encrypt($data->id)])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">

                        <label for="">Chancellor Image : </label>
                        <div class="text-img" id="hero6">
                            <img class="img-group" src="{{asset('storage/chancellorImg/'.$data->chan_img)}}" id="heroimg"/>
                            <input type="file" accept="image/*" name="image" class="filehero inpbox" onchange="loadFile(this)"/>
                        </div>
                        @error('image')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        
                        <div class="text-title" id="">
                            <label for="title">
                                Chancellor Name
                                <input class="input-item" type="text" name="name" id="title" placeholder="Enter Title" value="{{$data->chan_name}}" disabled>
                            </label>
                        </div>
                        @error('name')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror


                        <div class="text-para">
                            <label for="paragraph">
                                About Chancellor
                                <textarea class="input-item" name="aboutChancellor" id="paragraph" placeholder="Enter about" disabled>{{$data->chan_about}}</textarea>
                            </label>
                        </div>
                        @error('aboutChancellor')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror


                        {{-- weblink  --}}
                        <div class="text-title" id="">
                            <label for="title">
                                Chancellor Web Link
                                <input class="input-item" type="text" name="webLink" id="title" placeholder="Enter Title" value="{{$data->chan_web}}" disabled>
                            </label>
                        </div>
                        @error('webLink')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror


                         {{-- facebook link  --}}
                         <div class="text-title" id="">
                            <label for="title">
                                Chancellor Facebook Link
                                <input class="input-item" type="text" name="fbLink" id="title" placeholder="Enter Title" value="{{$data->chan_fb}}" disabled>
                            </label>
                        </div>
                        @error('fbLink')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror


                        {{-- twiter link  --}}
                        <div class="text-title" id="">
                            <label for="title">
                                Chancellor Twitter Link
                                <input class="input-item" type="text" name="twLink" id="title" placeholder="Enter Title" value="{{$data->chan_tw}}" disabled>
                            </label>
                        </div>
                        @error('twLink')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror


                        {{-- linkedin link  --}}
                        <div class="text-title" id="">
                            <label for="title">
                                Chancellor Linkedin Link
                                <input class="input-item" type="text" name="linkedLink" id="title" placeholder="Enter Title" value="{{$data->chan_link}}" disabled>
                            </label>
                        </div>
                        @error('linkedLink')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror


                        {{-- text area  --}}
                        <div class="text-para">
                            <label for="paragraph">
                                Welcome Text 
                                <textarea class="input-item" name="paragraph" id="paragraph" placeholder="Enter Paragraph" disabled>{{$data->chan_welcome}}</textarea>
                            </label>
                        </div>
                        @error('paragraph')
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