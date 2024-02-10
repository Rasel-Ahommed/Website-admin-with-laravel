@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Vice Chancellor</h1>
    </div>
    <div class="section shadow">
        <div class="section-head">
            <h1>Vice Chancellor Details</h1>
            <div class="editbtn">
                <button onclick="editSection(this)">
                    <i id="editEnable" class="ri-pencil-fill"></i>
                    <i id="editDisable" class="ri-close-line"></i>
                </button>
            </div>
        </div>

        <div class="section-body pt30">
            <form action="{{ route('viceChancellor.update', ['id' => $data->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        <label for="">Vice Chancellor Image : </label>
                        <div class="text-img" id="hero6">
                            <img class="img-group" src="{{ asset('storage/chancellorImg/' . $data->img) }}"
                                id="heroimg" />
                            <input type="file" accept="image/*" name="image" class="filehero inpbox"
                                onchange="loadFile(this)" />
                        </div>
                        @error('image')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="makeWarp"
                            style="display: flex;
                                    flex-wrap: wrap;
                                    justify-content: space-between;">
                            <div class="text-title" id="">
                                <label for="title">
                                    Vice Chancellor Name
                                    <input class="input-item" type="text" name="name" id="title"
                                        placeholder="Vice Chancellor Name" value="{{ $data->name }}" disabled>
                                </label>
                            </div>
                            @error('name')
                                <div class=" text-danger">{{ $message }}</div>
                            @enderror

                            <div class="text-title" id="">
                                <label for="title">
                                    Vice Chancellor Degree
                                    <input class="input-item" type="text" name="Degree" id="title"
                                        placeholder="Vice Chancellor Degree" value="{{ $data->degree }}" disabled>
                                </label>
                            </div>
                            @error('name')
                                <div class=" text-danger">{{ $message }}</div>
                            @enderror

                            <div class="text-title" id="">
                                <label for="title">
                                    Vice Chancellor Address
                                    <input class="input-item" type="text" name="address" id="title"
                                        placeholder="Address" value="{{ $data->address }}" disabled>
                                </label>
                            </div>
                            @error('name')
                                <div class=" text-danger">{{ $message }}</div>
                            @enderror

                            <div class="text-title" id="">
                                <label for="title">
                                    Vice Chancellor Email
                                    <input class="input-item" type="text" name="emali" id="title"
                                        placeholder="Email" value="{{ $data->email }}" disabled>
                                </label>
                            </div>
                            @error('name')
                                <div class=" text-danger">{{ $message }}</div>
                            @enderror

                            <div class="text-title" id="">
                                <label for="title">
                                    Vice Chancellor Phone
                                    <input class="input-item" type="text" name="phone" id="title"
                                        placeholder="phone" value="{{ $data->phone }}" disabled>
                                </label>
                            </div>
                            @error('name')
                                <div class=" text-danger">{{ $message }}</div>
                            @enderror

                            {{-- weblink  --}}
                            <div class="text-title" id="">
                                <label for="title">
                                    Vice Chancellor Web Link
                                    <input class="input-item" type="text" name="webLink" id="title"
                                        placeholder="Web Link" value="{{ $data->webLink }}" disabled>
                                </label>
                            </div>
                            @error('webLink')
                                <div class=" text-danger">{{ $message }}</div>
                            @enderror


                            {{-- facebook link  --}}
                            <div class="text-title" id="">
                                <label for="title">
                                    Vice Chancellor Facebook Link
                                    <input class="input-item" type="text" name="fbLink" id="title"
                                        placeholder="Facebook Link" value="{{ $data->facebook }}" disabled>
                                </label>
                            </div>
                            @error('fbLink')
                                <div class=" text-danger">{{ $message }}</div>
                            @enderror


                            {{-- twiter link  --}}
                            <div class="text-title" id="">
                                <label for="title">
                                    Vice Chancellor Twitter Link
                                    <input class="input-item" type="text" name="twLink" id="title"
                                        placeholder="  Twitter Link" value="{{ $data->Twitter }}" disabled>
                                </label>
                            </div>
                            @error('twLink')
                                <div class=" text-danger">{{ $message }}</div>
                            @enderror


                            {{-- linkedin link  --}}
                            <div class="text-title" id="">
                                <label for="title">
                                    Vice Chancellor Linkedin Link
                                    <input class="input-item" type="text" name="linkedLink" id="title"
                                        placeholder="Linkedin Link" value="{{ $data->linkedIn }}" disabled>
                                </label>
                            </div>
                            @error('linkedLink')
                                <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>



                        <div class="text-para">
                            <label for="paragraph">
                                About Vice Chancellor
                                <textarea class="input-item" name="aboutChancellor" id="paragraph" placeholder="Enter about" disabled>{{ $data->about }}</textarea>
                            </label>
                        </div>
                        @error('aboutChancellor')
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



    {{-- office member form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Add vc office member</h1>
        </div>

        <div class="section-body pt30">
            <form action="{{ route('vc.Office.Member') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        <label for="">Vice Chancellor Image : </label>
                        <div class="text-img" id="hero6">
                            <img class="img-group" src="" id="heroimg" /><br>
                            <input type="file" accept="image/*" name="mem_image" class="inpbox"
                                onchange="loadFile(this)" />
                        </div>

                        @error('mem_image')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Member Name</label>
                            <input type="text" name="mem_name" class="form-control" id="exampleInputPassword1"
                                value="{{ old('mem_name') }}">
                        </div>
                        @error('mem_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Member Post</label>
                            <input type="text" name="mem_post" class="form-control" id="exampleInputPassword1"
                                value="{{ old('mem_post') }}">
                        </div>
                        @error('mem_post')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Facebook</label>
                            <input type="text" name="mem_facebook" class="form-control"
                                id="exampleInputPassword1" value="{{ old('mem_facebook') }}">
                        </div>
                        @error('mem_facebook')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Twitter</label>
                            <input type="text" name="mem_twitter" class="form-control" id="exampleInputPassword1"
                                value="{{ old('twitter') }}">
                        </div>
                        @error('twitter')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputPassword1">Linkedin</label>
                            <input type="text" name="mem_linkedIn" class="form-control"
                                id="exampleInputPassword1" value="{{ old('mem_linkedIn') }}">
                        </div>
                        @error('mem_linkedIn')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div>
                            <input type="submit" value="Submit">
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
                            <th scope="col">Facebook</th>
                            <th scope="col">Twitter</th>
                            <th scope="col">Linkedin</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $key=>$member)

                            <tr>
                                <th scope="row">{{ ($members->currentPage() - 1) * $members->perPage() + $key + 1 }}</th>

                                <td><img src="{{asset('storage/vc-office-member/'.$member->img)}}" style="width:50px" alt="img"></td>
                                <td>{{$member->name}}</td>
                                <td>{{$member->post}}</td>
                                <td>{{$member->facebook}}</td>
                                <td>{{$member->twitter}}</td>
                                <td>{{$member->linkedin}}</td>

                                <td class="d-flex">
                                    <a class="ml-1" href="{{route('edit.vcOfficeMember',['id'=>encrypt($member->id)])}}">
                                        <button class="btn btn-primary mb-2"><i
                                                class="bi bi-pencil-square"></i></button>
                                    </a>

                                    <a onclick="return confirm('Are you sure to delete this notice')"
                                        href="{{route('delete.vcOfficeMember',['id'=>encrypt($member->id)])}}">
                                        <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        
                </table>
            </div>
            {{$members->links()}}
        </div>
    </div>

</section>


@include('admin/footer')
