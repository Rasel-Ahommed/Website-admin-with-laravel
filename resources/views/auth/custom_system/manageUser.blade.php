@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Manage User</h1>
    </div>
    <div class="section shadow">
        <div class="section-head">
            <h4>Manage User</h4>
        </div>


        <div class="container p-4">
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-primary ">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">User Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <th scope="row">{{ $key+1}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->user_role}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a class="mx-2"
                                                href="{{route('edit.Manage.user',['id'=>$user->id])}}">
                                                <button class="btn btn-primary mb-2"><i
                                                        class="bi bi-pencil-square"></i></button>
                                            </a>
                                            <a onclick="return confirm('Are you sure to delete this notice')"
                                                href="{{route('delete.Manage.user',['id'=>$user->id])}}">
                                                <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@include('admin/footer')
