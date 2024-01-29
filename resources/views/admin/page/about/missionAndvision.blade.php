@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Mission and vision</h1>
    </div>

    @php
        use App\Models\MissionVision;
        $data =  MissionVision::first();
    @endphp

    <div class="section shadow">
        <div class="section-head">
            <h1>Mission Section</h1>
            <div class="editbtn">
                <button onclick="editSection(this)">
                    <i id="editEnable" class="ri-pencil-fill"></i>
                    <i id="editDisable" class="ri-close-line"></i>
                </button>
            </div>
        </div>
        <div class="section-body pt30">
            <form action="{{route('update.mission',['id'=>encrypt($data->id)])}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        
                        <label for="img">Mission Image:</label>
                        <div class="text-img" id="hero6">
                            <img class="img-group" src="{{asset('storage/mission_visionImg/'. $data->mv_img)}}" id="heroimg"/>
                            <input type="file" accept="image/*" name="image" class="filehero inpbox" onchange="loadFile(this)"/>
                        </div>
                        @error('image')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="text-title" id="">
                            <label for="title">
                                Mission Title:
                                <input class="input-item" type="text" name="title" id="title" placeholder="Enter Title" value="{{ old('title', $data->mv_title)}}" disabled>
                            </label>
                        </div>
                        @error('title')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="text-para">
                            <label for="paragraph">
                                Mission Text:
                                <textarea class="input-item" name="text" id="paragraph" placeholder="Enter Paragraph" disabled>{{ old('text', $data->mv_text)}}</textarea>
                            </label>
                        </div>
                        @error('text')
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



    {{-- for Vission  --}}

    @php
        $data2 =  MissionVision::skip(1)
                ->take(1)
                ->first();
    @endphp

    <div class="section shadow">
        <div class="section-head">
            <h1>Vision Section</h1>
            <div class="editbtn">
                <button onclick="editSection(this)">
                    <i id="editEnable" class="ri-pencil-fill"></i>
                    <i id="editDisable" class="ri-close-line"></i>
                </button>
            </div>
        </div>
        <div class="section-body pt30">
            <form action="{{route('update.vision',['id'=>encrypt($data2->id)])}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        <label for="img">Vision Image:</label>
                        <div class="text-img" id="hero6">
                            <img class="img-group" src="{{asset('storage/mission_visionImg/'. $data2->mv_img)}}" id="heroimg"/>
                            <input type="file" accept="image/*" name="image" class="filehero inpbox" onchange="loadFile(this)"/>
                        </div>
                        @error('image')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="text-title" id="">
                            <label for="title">
                                Vision Title:
                                <input class="input-item" type="text" name="title" id="title" placeholder="Enter Title" value="{{ old('title', $data2->mv_title)}}" disabled>
                            </label>
                        </div>
                        @error('title')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="text-para">
                            <label for="paragraph">
                                Vision Text:
                                <textarea class="input-item" name="text" id="paragraph" placeholder="Enter Paragraph" disabled>{{ old('text', $data2->mv_text)}}</textarea>
                            </label>
                        </div>
                        @error('text')
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