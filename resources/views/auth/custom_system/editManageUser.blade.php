@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Update User</h1>
    </div>
    <div class="section shadow">
        <div class="section-head">
            <h4>Update User</h4>
        </div>
        <form action="{{route('updae.manage.user',['id'=>$data->id])}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">User name</label>
                <input type="text" class="form-control" name="name" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter name" value="{{old('name',$data->name)}}">

                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
               
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{old('email',$data->email)}}" >

            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
              <label for="exampleInputEmail1">User role</label>
              <select class="form-select" aria-label="Default select example" name="role">
                <option selected disabled>Select role</option>
                @foreach ($roles as $role)
                <option value="{{ $role->id }}" {{ $data->role == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>

                @endforeach
            </select>

            @error('role')
                <div class="text-danger">{{ $message }}</div>
            @enderror
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">New Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">

            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
           
            <button type="submit" class="btn btn-primary mt-4">Update</button>
          </form>
    </div>
</section>

@include('admin/footer')