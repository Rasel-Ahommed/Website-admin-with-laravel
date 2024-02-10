@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Univercity Syndicate</h1>
    </div>

    {{-- office member form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Univercity Syndicate Member</h1>
        </div>

        <div class="section-body pt30">
            <form action="{{ route('univercity.syndicate') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        <label for="">Vice Chancellor Image : </label>
                        <div class="text-img" id="hero6">
                            <img class="img-group" src="" id="heroimg" /><br>
                            <input type="file" accept="image/*" name="image" class="inpbox"
                                onchange="loadFile(this)" />
                        </div>

                        @error('image')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Member Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputPassword1"
                                value="{{ old('name') }}">
                        </div>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Member Post</label>
                            <input type="text" name="post" class="form-control" id="exampleInputPassword1"
                                value="{{ old('post') }}">
                        </div>
                        @error('post')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" name="email" class="form-control" id="exampleInputPassword1"
                                value="{{ old('email') }}">
                        </div>
                        @error('email')
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
                            <th scope="col">Name</th>
                            <th scope="col">Post</th>
                            <th scope="col">Email</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $key => $data)
                            <tr>
                                <th scope="row">{{ ($datas->currentPage() - 1) * $datas->perPage() + $key + 1 }}</th>
                                <td><img src="{{ asset('storage/syndicate/' . $data->img) }}" style="width:50px"
                                        alt="img"></td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->post }}</td>
                                <td>{{ $data->email }}</td>
                                <td class="d-flex">
                                    <a class="" href="{{ route('edit.univercity.syndicate', ['id' => $data->id]) }}"
                                        style="margin-right:10px">
                                        <button class="btn btn-primary mb-2"><i
                                                class="bi bi-pencil-square"></i></button>
                                    </a>

                                    <a onclick="return confirm('Are you sure to delete this notice')" href="{{route('delete.univercity.syndicate',['id'=>$data->id])}}">
                                        <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $datas->links() }}
            </div>

        </div>
    </div>

</section>


@include('admin/footer')
