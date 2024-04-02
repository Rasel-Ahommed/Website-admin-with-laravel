@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Change password</h1>
    </div>
    <div class="section shadow">
        <div class="section-head">
            <h4>Change password</h4>
        </div>
        <form action="{{route('edit.password')}}" method="post">
            @csrf
           
            <div class="form-group">
              <label for="exampleInputEmail1">Enter user email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{old('email')}}" >

            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
            <label for="exampleInputPassword1">New Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">

            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>


            <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1" placeholder="Password">

            @error('password_confirmation')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
           
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
          </form>
    
</section>

@include('admin/footer')