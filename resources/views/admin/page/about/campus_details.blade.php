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
        @php
            // store id for encryption
                $id = $data[0]->id;
            
        @endphp
        <div class="section-body pt30">
            <form action="{{ route('update.campusDtls', ['id' =>encrypt($id)]) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        <div class="text-img" id="hero6">
                            <img class="img-group" src="{{ asset('storage/aboutImages/' . $data[0]->cam_img) }}" id="heroimg"/>
                            <input type="file" accept="image/*" name="image" class="filehero inpbox" onchange="loadFile(this)"/>
                        </div>
                        @error('image')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="text-title" id="">
                            <label for="title">
                                Campus Title
                                <input class="input-item" type="text" name="title" id="title" placeholder="Enter Title" value="{{$data[0]->cam_title}}" disabled>
                            </label>
                        </div>
                        @error('title')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="text-para">
                            <label for="paragraph">
                                Campus Text
                                <textarea class="input-item" name="paragraph" id="paragraph" placeholder="Enter Paragraph" disabled>{{old('paragraph',$data[0]->cam_text)}}</textarea>
                            </label>
                        </div>
                        @error('paragraph')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="text-name">
                            <label for="text-name">
                                Map Link(with &lt;iframe&gt;&lt;/iframe&gt;)

                                <input class="input-item" type="text" name="map_link" id="text-name" placeholder="Enter Link" value="{{$data[0]->cam_map}}" disabled>
                            </label>
                        </div>
                        @error('map_link')
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