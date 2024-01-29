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
            <form action="{{ route('store.instituteCode') }}" method="POST" enctype="multipart/form-data">
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
                                value="{{ old('instituteName') }}">
                        </div>
                        @error('instituteName')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        {{-- select Institute Code  --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Institute Code</label>
                            <input type="text" name="instituteCode" class="form-control" id="exampleInputPassword1"
                                value="{{ old('instituteCode') }}">
                        </div>
                        @error('instituteCode')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        {{-- select location  --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Institute Website Link</label>
                            <input type="text" name="webLink" class="form-control" id="exampleInputPassword1"
                               value="{{ old('webLink') }}">
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

{{-- see all institute code  --}}
@php
    use App\Models\InstituteCode;
    $institutes = InstituteCode::latest()->paginate(10);
@endphp

<div class="container p-4">
    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr class="table-primary ">
                        <th scope="col">#</th>
                        <th scope="col">Institute Logo</th>
                        <th scope="col">Institute Name</th>
                        <th scope="col">Code</th>
                        <th scope="col">Website Link</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($institutes as $key => $inst)
                        <tr>
                            <th scope="row">{{ ($institutes->currentPage() - 1) * $institutes->perPage() + $key + 1 }}</th>
                            <td ><img style="width: 100px;" src="{{ asset('storage/instituteCode/' . $inst->ins_logo) }}" alt="logo"></td>
                            <td>{{ $inst->ins_name }}</td>
                            <td>{{ $inst->ins_code }}</td>
                            <td>{{ $inst->web_link }}</td>
                            <td>
                                <a href="{{route('edit.institute',['id'=>encrypt($inst->id)])}}">
                                    <button class="btn btn-primary mb-2"><i class="bi bi-pencil-square"></i></button>
                                </a>
                                <a onclick="return confirm('Are you sure to delete this notice')" href="{{route('delete.institute',['id'=>encrypt($inst->id)])}}">
                                    <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
        {{ $institutes->links() }}
    </div>
</div>

@include('admin/footer')
