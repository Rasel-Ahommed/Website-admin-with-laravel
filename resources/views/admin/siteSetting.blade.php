@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Site Setting </h1>
    </div>
    <div class="section shadow">
        <div class="section-head">
            <h1>Site Setting</h1>
            <div class="editbtn">
                <button onclick="editSection(this)">
                    <i id="editEnable" class="ri-pencil-fill"></i>
                    <i id="editDisable" class="ri-close-line"></i>
                </button>
            </div>
        </div>
       
        <div class="section-body pt30">
            <form action="{{route('update.siteSetting',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        <div class="d-flex justify-content-between">
                            <div class="img">
                                <label for="">Site logo :</label>
                                <div class="text-img" id="hero6">
                                    <img class="img-group" src="{{$data->site_logo}}" id=""/>
                                    <input type="file" accept="image/*" name="siteLogo" class="filehero inpbox" onchange="loadFile(this)"/>
                                </div>
                                @error('siteLogo')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="img">
                                <label for="">Manu bar banner image :</label>
                                <div class="text-img" id="hero6">
                                    <img class="img-group" src="{{$data->manu_banner}}" id=""/>
                                    <input type="file" accept="image/*" name="bannerImg" class="filehero inpbox" onchange="loadFile(this)"/>
                                </div>
                                @error('bannerImg')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="img">
                                <label for="">Favicon logo :</label>
                                <div class="text-img" id="hero6">
                                    <img class="img-group" src="{{$data->favicon}}" id=""/>
                                    <input type="file" accept="image/*" name="faviconLogo" class="filehero inpbox" onchange="loadFile(this)"/>
                                </div>
                                @error('faviconLogo')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="text-title" id="">
                            <label for="title">
                                Address</label>
                                <input class="input-item" type="text" name="address" id="title" placeholder="Address" value="{{$data->address}}" disabled>
                        </div>
                        @error('address')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror
                        {{-- weblink  --}}
                        <div class="text-title" id="">
                            <label for="title">
                                Phone number  </label>
                                <input class="input-item" type="number" name="phone" id="title" placeholder="Phone number" value="{{$data->phone}}" disabled>
                            
                        </div>
                        @error('phone')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="text-title" id="">
                            <label for="title">
                                Email  </label>
                                <input class="input-item" type="email" name="email" id="title" placeholder="Email" value="{{$data->email}}" disabled>
                            
                        </div>
                        @error('email')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror


                         {{-- facebook link  --}}
                         <div class="text-title" id="">
                            <label for="title">
                                Facebook Link</label>
                                <input class="input-item" type="text" name="fbLink" id="title" placeholder="Facebook Link" value="{{$data->facebook}}" disabled>
                            
                        </div>
                        @error('fbLink')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror


                        {{-- twiter link  --}}
                        <div class="text-title" id="">
                            <label for="title">
                                Twitter Link</label>
                                <input class="input-item" type="text" name="twLink" id="title" placeholder="Twitter Link" value="{{$data->twitter}}" disabled>
                            
                        </div>
                        @error('twLink')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror


                        {{-- linkedin link  --}}
                        <div class="text-title" id="">
                            <label for="title">
                                Linkedin Link</label>
                                <input class="input-item" type="text" name="linkedLink" id="title" placeholder="Linkedin Link" value="{{$data->linkedIn}}" disabled>
                            
                        </div>
                        @error('linkedLink')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        {{-- instagram link  --}}
                        <div class="text-title" id="">
                            <label for="title">
                                Instagram Link</label>
                                <input class="input-item" type="text" name="instaLink" id="title" placeholder="Instagram Link" value="{{$data->instagram}}" disabled>
                            
                        </div>
                        @error('instaLink')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        {{-- youtube link  --}}
                        <div class="text-title" id="">
                            <label for="title">
                                Youtube Link</label>
                                <input class="input-item" type="text" name="youtubeLink" id="title" placeholder="Youtube Link" value="{{$data->youtube}}" disabled>
                            
                        </div>
                        @error('youtubeLink')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="sectionSubmit">
                    <input type="submit" value="Submit">
                    {{-- <div type='cancel'  onclick="editSection(this?.parentNode?.parentNode?.parentNode?.parentNode?.children[0]?.children[1]?.children[0])">Cancel</div> --}}
                </div>
            </form>
        </div>
    </div>
</section>

@include('admin/footer')