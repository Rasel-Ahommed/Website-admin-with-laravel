@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Edit Home Banner</h1>
    </div>
    <div class="section shadow">
        <div class="section-head">
            <h1>Edit Home Banner</h1>
        </div>
        <div class="section-body">
            <form action="{{ route('banner.update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                @csrf

                <label for="">Banner Image </label>
                <div class="text-img" id="hero6">
                    <img class="img-group" src="{{$data->img}}" id="heroimg" /><br>
                    <input type="file" accept="image/*" name="image" class="inpbox" onchange="loadFile(this)" />
                </div>

                @error('image')
                    <div class=" text-danger">{{ $message }}</div>
                @enderror

                <label for="title">Welcome text</label>
                <input class="input-item" type="text" name="welcome_text" id="title" placeholder="Welcome text"
                    value="{{$data->welcome_title}}">
                <label for="title">Title</label>
                <input class="input-item" type="text" name="title" id="title" placeholder="Title"
                    value="{{$data->title}}">

                <label for="title">Text</label>
                <input class="input-item" type="text" name="text" id="title" placeholder="Text"
                    value="{{$data->text}}">

                <div>
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>

@include('admin/footer')