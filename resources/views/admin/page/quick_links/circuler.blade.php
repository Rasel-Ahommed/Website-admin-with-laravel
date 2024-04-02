@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Circuler</h1>
    </div>
    {{-- notic input form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Add Circuler</h1>
        </div>


        <div class="section-body pt30">
            <form action="{{ route('store.circuler') }}" method="POST" enctype="multipart/form-data">
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
                                value="{{ old('headline') }}">

                            @error('headline')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-para">
                            <label for="paragraph">
                               Post</label>
                            <input class="form-control" name="post" type="text" id="formFile"
                                value="{{ old('post') }}">

                            @error('post')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-para">
                            <label for="paragraph">
                                End Date</label>
                            <input class="form-control" name="end_date" type="date" id="formFile"
                                value="{{ old('end_date') }}">

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



<div class="container p-5">
    <div class="row">

        <table class="table table-striped">
            <thead>
                <tr class="table-primary ">
                    <th scope="col">#</th>
                    <th scope="col">Headline</th>
                     <th scope="col">Post</th>
                     <th scope="col">End Date</th>
                    <th scope="col">Circuler</th>
                    <th scope="col">Apply Form</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                 @foreach ($datas as $key=>$data)
                    <tr>
                        <th scope="row"> {{ ($datas->currentPage() - 1) * $datas->perPage() + $key + 1 }}</th>
                        <td>{{$data->headline}}</td>
                         <td>{{$data->post}}</td>
                         <td>{{$data->endDate}}</td>
                        <td><a href="{{$data->file}}" target="_blank">View</a></td>
                        <td><a href="{{$data->form}}" target="_blank">View</a></td>
                       

                        <td>
                            <div class="d-flex">
                                <a href="{{route('edit.circuler',['id'=>$data->id])}}" style='margin-right: 10px'>
                                    <button class="btn btn-primary mb-2"><i class="bi bi-pencil-square"></i></button>
                                </a>
                                <a onclick="return confirm('Are you sure to delete this notice')"href="{{route('delete.circuler',['id'=>$data->id])}}">
                                    <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
        </table>
    </div>
    {{$datas->links()}}
</div>

@include('admin/footer')
