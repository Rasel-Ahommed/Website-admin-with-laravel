@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Edit Required Form</h1>
    </div>
    {{-- notic input form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Edit Required Form</h1>
        </div>


        <div class="section-body pt30">
            <form action="{{ route('update.form',['id'=>$data->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">


                        {{-- upload file --}}
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Form PDF:</label>
                            <input class="form-control" accept="application/pdf" name="file" type="file"
                                id="formFile">
                        </div>
                        @error('file')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        {{-- write text  --}}
                        <div class="text-para">
                            <label for="paragraph">
                                Headline</label>
                            <input class="form-control" name="headline" type="text" id="formFile"
                                value="{{ old('headline',$data->headline) }}">

                            @error('headline')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</section>

@include('admin/footer')