@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / APA</h1>
    </div>
    {{-- notic input form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Add APA</h1>
        </div>


        <div class="section-body pt30">
            <form action="{{ route('update.apa',['id'=>$data->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">

                        <label for="paragraph">APA name </label>
                        <select name="apa_name" class="form-select" aria-label="Default select example">
                            <option selected disabled>Select APA name</option>
                            @foreach ($apaNames as $apaName)
                                <option value="{{$apaName->id}}" {{$apaName->id == $data->apa_name_id ? 'selected':''}}>{{$apaName->name}}</option>
                            @endforeach
                        </select>
                        @error('apa_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                        {{-- write text  --}}
                        <div class="text-para">
                            <label for="paragraph">
                                APA Headline</label>
                            <input class="form-control" name="headline" type="text" id="formFile"
                                value="{{ old('headline',$data->headline) }}">

                            @error('headline')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-para">
                            <label for="paragraph">
                                Link</label>
                            <input class="form-control" name="link" type="text" id="formFile"
                                value="{{ old('link',$data->links) }}">

                            @error('link')
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