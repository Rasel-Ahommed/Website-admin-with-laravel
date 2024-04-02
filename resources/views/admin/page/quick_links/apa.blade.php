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
            <form action="{{ route('store.apa') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">

                        <label for="paragraph">APA name </label>
                        <select name="apa_name" class="form-select" aria-label="Default select example">
                            <option selected disabled>Select APA name</option>
                            @foreach ($apaNames as $apaName)
                                <option value="{{$apaName->id}}">{{$apaName->name}}</option>
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
                                value="{{ old('headline') }}">

                            @error('headline')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-para">
                            <label for="paragraph">
                                Link</label>
                            <input class="form-control" name="link" type="text" id="formFile"
                                value="{{ old('link') }}">

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



<div class="container p-5">
    <div class="row">

        <table class="table table-striped">
            <thead>
                <tr class="table-primary ">
                    <th scope="col">#</th>
                    <th scope="col">Apa Name</th>
                    <th scope="col">Headline</th>
                    <th scope="col">Link</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($datas as $key => $data)
                <tr>
                    <th scope="row">{{ ($datas->currentPage() - 1) * $datas->perPage() + $key + 1 }} </th>
                    <td>{{$data->apa_name}}</td>
                    <td>{{$data->headline}}</td>
                    <td>{{$data->links}}</td>


                    <td>
                        <div class="d-flex">
                            <a href="{{route('edit.apa',['id'=>$data->id])}}" style='margin-right: 10px'>
                                <button class="btn btn-primary mb-2"><i class="bi bi-pencil-square"></i></button>
                            </a>
                            <a onclick="return confirm('Are you sure to delete this notice')"href="{{route('delete.apa',['id'=>$data->id])}}">
                                <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
        </table>
        {{$datas->links()}}
    </div>
</div>

@include('admin/footer')
