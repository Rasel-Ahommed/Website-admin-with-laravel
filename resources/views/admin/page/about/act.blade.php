@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / SHMU ACT</h1>
    </div>

    {{-- notic input form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Upload ACT Pdf</h1>
        </div>

        <div class="section-body pt30">
            <form action="{{route('act.doc')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        {{-- act pdf  --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Upload Act</label>
                            <input type="file" name='actDoc' class="form-control" id="exampleInputPassword1"
                            accept="application/pdf"    value="{{ old('actDoc') }}">
                        </div>
                        @error('actDoc')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        {{-- act title --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Act Title</label>
                            <input type="text" name="actTitle" class="form-control" id="exampleInputPassword1"
                                value="{{ old('actTitle') }}">
                        </div>
                        @error('actTitle')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                <div>
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</section>

<section class="page-content">
    <div class="section shadow">
        <div class="section-head">
            <h1>ACT TEXTS</h1>
            <div class="editbtn">
                <button onclick="editSection(this)">
                    <i id="editEnable" class="ri-pencil-fill"></i>
                    <i id="editDisable" class="ri-close-line"></i>
                </button>
            </div>
        </div>

        <div class="section-body pt30">
            <form action="{{ route('updateActText', ['id' => encrypt($data->id)]) }}" method="POST"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        <div class="text-title" id="">
                            <label for="title">
                                ACT Heading
                                <input class="input-item" type="text" name="heading" id="title"
                                    placeholder="Enter Title" value="{{ old('heading', $data->act_heading) }}" disabled>
                            </label>
                        </div>
                        @error('heading')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="text-name">
                            <label for="text-name">
                                ACT Title
                                <input class="input-item" type="text" name="title" id="text-name" 
                                    placeholder="Enter Link" value="{{ old('title', $data->act_title) }}" disabled>
                            </label>
                        </div>
                        @error('title')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="text-para">
                            <label for="paragraph">
                                ACT Text
                                <textarea class="input-item" name="text" id="paragraph" placeholder="Enter Paragraph" disabled>{{ old('text', $data->act_text) }}</textarea>
                            </label>
                        </div>
                        @error('text')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="sectionSubmit">
                    <input type="submit" value="Submit">
                    <button type="cancel"
                        onclick="editSection(this?.parentNode?.parentNode?.parentNode?.parentNode?.children[0]?.children[1]?.children[0])">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</section>

{{-- see all notice  --}}

<div class="container p-4">
    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr class="table-primary ">
                        <th scope="col">#</th>
                        <th scope="col">Act Title</th>
                        <th scope="col">Act Pdf</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($acts as $key => $act)
                        <tr>
                            <th scope="row">{{ ($acts->currentPage() - 1) * $acts->perPage() + $key + 1 }}</th>
                            <td>{{ $act->actDoc_heading }}</td>
                            <td><a href="{{$act->actDoc_file}}" target="_blank">view</a></td>

                            <td>
                                <div class="d-flex">
                                    <a  href="{{ route('act.edit', ['id' => encrypt($act->id)]) }}">
                                        <button class="btn btn-primary mx-2"><i class="bi bi-pencil-square"></i></button>
                                    </a>
                                
                             

                                <a onclick="return confirm('Are you sure to delete this notice')"
                                    href="{{ route('act.delete', ['id' => encrypt($act->id)]) }}">
                                    <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                </a>
                            </div>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
        {{ $acts->links() }}
    </div>
</div>

@include('admin/footer')
