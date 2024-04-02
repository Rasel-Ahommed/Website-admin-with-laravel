@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Event And Gallery</h1>
    </div>

    {{-- office member form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Event And Gallery</h1>
        </div>

        <div class="section-body pt30">
            <form action="{{ route('store.eventandgallery') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        <label for="">Event And Gallery Image : </label>
                        <div class="text-img" id="hero6">
                            <img class="img-group" src="" id="heroimg" /><br>
                            <input type="file" accept="image/*" name="image" class="inpbox"
                                onchange="loadFile(this)" />
                        </div>

                        @error('image')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Event Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputPassword1"
                                value="{{ old('title') }}">
                        </div>
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div>
                            <input type="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    {{-- see all member  --}}


    <div class="container p-4">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="table-primary ">
                            <th scope="col">#</th>
                            <th scope="col">Member Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $key => $data)
                            <tr>
                                <th scope="row">{{ ($datas->currentPage() - 1) * $datas->perPage() + $key + 1 }}</th>
                                <td><img src="{{$data->img}}" style="width:50px"
                                        alt="img"></td>
                                <td>{{ $data->title }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a class="" href="{{ route('edit.eventandgallery', ['id' => $data->id]) }}"
                                            style="margin-right:10px">
                                            <button class="btn btn-primary mb-2"><i
                                                    class="bi bi-pencil-square"></i></button>
                                        </a>

                                        <a onclick="return confirm('Are you sure to delete this notice')"
                                            href="{{ route('delete.eventandgallery', ['id' => $data->id]) }}">
                                            <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
            {{ $datas->links() }}
        </div>
    </div>

</section>


@include('admin/footer')
