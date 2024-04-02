@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Home</h1>
    </div>
    <div class="section shadow">
        <div class="section-head">
            <h1>Banner Section - 1</h1>
        </div>
        <div class="section-body">
            <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <label for="">Banner Image </label>
                <div class="text-img" id="hero6">
                    <img class="img-group" src="" id="heroimg" /><br>
                    <input type="file" accept="image/*" name="image" class="inpbox" onchange="loadFile(this)" />
                </div>

                @error('image')
                    <div class=" text-danger">{{ $message }}</div>
                @enderror

                <label for="title">Welcome text</label>
                <input class="input-item" type="text" name="welcome_text" id="title" placeholder="Welcome text"
                    value="{{old('welcome_text')}}">
                <label for="title">Title</label>
                <input class="input-item" type="text" name="title" id="title" placeholder="Title"
                value="{{old('title')}}">

                <label for="title">Text</label>
                <input class="input-item" type="text" name="text" id="title" placeholder="Text"
                value="{{old('text')}}">

                {{-- </div> --}}
                <div>
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>


    <div class="container p-5">
        <div class="row">

            <table class="table table-striped">
                <thead>
                    <tr class="table-primary ">
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Welcome Text</th>
                        <th scope="col">Title</th>
                        <th scope="col">Text</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $key => $data)
                        <tr>
                            <th scope="row"> {{ $key + 1 }}</th>
                            <td><img style="width:50px" src="{{$data->img}}"
                                    alt="img">
                            </td>
                            <td>{{ $data->welcome_title }}</td>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->text }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('edit.home.banner', ['id' => $data->id]) }}"
                                        style='margin-right: 10px'>
                                        <button class="btn btn-primary mb-2"><i
                                                class="bi bi-pencil-square"></i></button>
                                    </a>
                                    <a
                                        onclick="return confirm('Are you sure to delete this notice')"href="{{ route('delete.home.banner', ['id' => $data->id]) }}">
                                        <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>


    <div class="section shadow">
        <div class="section-head">
            <h1>About us - 2</h1>
            <div class="editbtn">
                <button onclick="editSection(this)">
                    <i class="ri-pencil-fill"></i>
                </button>
            </div>
        </div>
        <div class="section-body pt30">
            <form action="{{ route('update.aboutus', ['id' => $aboutUs->id]) }} " method="post">
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        <div class="text-title">
                            <label for="title">
                                Title</label>
                            <input class="input-item" type="text" name="title" id="title"
                                placeholder="Enter Title" value="{{ $aboutUs->title }}" disabled>

                        </div>
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="text-para">
                            <label for="paragraph">
                                Paragraph
                                <textarea class="input-item" name="paragraph" id="paragraph" placeholder="Enter Paragraph" disabled>{{ $aboutUs->text }}</textarea>
                            </label>
                        </div>
                        @error('paragraph')
                            <div class="text-danger">{{ $message }}</div>
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

    <div class="section shadow">
        <div class="section-head">
            <h1>Campus Life - 4</h1>
            <div class="editbtn">
                <button onclick="editSection(this)">
                    <i class="ri-pencil-fill"></i>
                </button>
            </div>
        </div>
        <div class="section-body pt30">
            <form action="{{ route('update.campusLife', ['id' => $campusLife->id]) }}" method="Post"
                enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        <div class="text-img" id="hero6">
                            <img class="img-group" src="{{$campusLife->img}}" id="heroimg"/>
                            <input type="file" accept="image/*" name="file" class="filehero inpbox" onchange="loadFile(this)"/>
                        </div>
                        @error('file')
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

@include('admin/footer')
