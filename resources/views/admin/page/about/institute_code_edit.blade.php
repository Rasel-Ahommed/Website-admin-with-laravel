@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Institute Code</h1>
    </div>
    {{-- notic input form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Add New Institute Code</h1>
        </div>


        <div class="section-body pt30">
            <form action="{{ route('update.instituteCode',['id'=>encrypt($data->id)]) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        {{-- select date  --}}
                        <div class="form-group">

                            <label for="exampleInputPassword1">Institute Loge</label>

                            <input type="file" name='institiuteLoge' class="form-control" id="exampleInputPassword1"
                                value="{{ old('institiuteLoge') }}">
                        </div>
                        @error('institiuteLoge')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        {{-- select Institute Name --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Institute Name</label>
                            <input type="text" name="instituteName" class="form-control" id="exampleInputPassword1"
                                value="{{ old('instituteName',$data->ins_name) }}">
                        </div>
                        @error('instituteName')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Institute Type</label>
                            @php
                                $instituteTypes = DB::table('institute_type')->get();
                            @endphp
                            <select class="form-select" name="instituteType" aria-label="Default select example">
                                <option selected>Select Institute Type</option>
                                @foreach ($instituteTypes as $instituteType)
                                    <option value="{{ $instituteType->id }}" @if ($instituteType->id == $data->Institute_type_id) selected @endif>{{ $instituteType->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- select Institute Code  --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Institute Code</label>
                            <input type="text" name="instituteCode" class="form-control" id="exampleInputPassword1"
                                value="{{ old('instituteCode',$data->ins_code) }}">
                        </div>
                        @error('instituteCode')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        {{-- select location  --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Institute Website Link</label>
                            <input type="text" name="webLink" class="form-control" id="exampleInputPassword1"
                               value="{{ old('webLink',$data->web_link) }}">
                        </div>
                        @error('webLink')
                            <div class="text-danger">{{ $message }}</div>
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
