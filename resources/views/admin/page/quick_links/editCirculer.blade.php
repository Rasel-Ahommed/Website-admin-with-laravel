@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Edit Circuler</h1>
    </div>
    {{-- notic input form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Edit Circuler</h1>
        </div>


        <div class="section-body pt30">
            <form action="{{ route('update.circuler',['id'=>$data->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">


                        {{-- upload file --}}
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload PDF:</label>
                            <input class="form-control" name="file" type="file"
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

                        <div class="text-para">
                            <label for="paragraph">
                               Post</label>
                            <input class="form-control" name="post" type="text" id="formFile"
                                value="{{ old('post',$data->post) }}">

                            @error('post')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-para">
                            <label for="paragraph">
                                End Date</label>
                            <input class="form-control" name="end_date" type="date" id="formFile"
                                value="{{ old('end_date',$data->endDate) }}">

                            @error('end_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                         {{-- upload file --}}
                         <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Form PDF:</label>
                            <input class="form-control" accept="application/pdf" name="form" type="file"
                                id="formFile">
                        </div>
                        @error('form')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
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