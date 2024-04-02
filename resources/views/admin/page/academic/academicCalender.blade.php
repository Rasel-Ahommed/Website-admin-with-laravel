@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Academmic Calender</h1>
    </div>
    <div class="section shadow">
        <div class="section-head">
            <h1>Academmic Calender</h1>
            <div class="editbtn">
                <button onclick="editSection(this)">
                    <i id="editEnable" class="ri-pencil-fill"></i>
                    <i id="editDisable" class="ri-close-line"></i>
                </button>
            </div>
        </div>

        <div class="section-body pt30">
            <form action="{{route('update.academiccalender',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        <div class="text-img" id="hero6">
                            <img class="img-group" src="{{$data->img}}" id="heroimg"/>
                            <input type="file" accept="image/*" name="image" class="filehero inpbox" onchange="loadFile(this)"/>
                        </div>
                        @error('image')
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