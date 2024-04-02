@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Notice</h1>
    </div>
    {{-- notic input form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Add New Notice</h1>
        </div>


        <div class="section-body pt30">
            <form action="{{ route('store.notice') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-section">
                    <div class="text-content">
                        {{-- select option  --}}
                        <label for="formFile" class="form-label">Select Notice Type</label>
                        <select class="form-select" name="selectOption" aria-label="Default select example">
                            <option selected disabled>Select an option</option>
                            <option value="Academic" {{ old('selectOption') == '1' ? 'selected' : '' }}>Academic
                            </option>
                            <option value="Administrative" {{ old('selectOption') == '0' ? 'selected' : '' }}>
                                Administrative</option>
                        </select>
                        @error('selectOption')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                        {{-- upload file --}}
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Notice:</label>
                            <input class="form-control" name="notice_file" type="file" id="formFile">
                        </div>
                        @error('notice_file')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        {{-- write text  --}}
                        <div class="text-para">
                            <label for="paragraph">
                                Notice text
                                <textarea class="input-item" name="notice_text" id="paragraph" placeholder="Enter Paragraph">{{ old('notice_text') }}</textarea>
                            </label>
                            @error('notice_text')
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

{{-- see all notice  --}}
@php
    use App\Models\Notice;
    use Carbon\Carbon;
    $notices = Notice::latest()->paginate(10);
@endphp
{{-- show massage  --}}

<div class="container p-5">
    <div class="row">
        @if (session('update'))
            <div class="alert alert-success" role="alert">
                {{ session('update') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr class="table-primary ">
                    <th scope="col" class="text-nowrap">#</th>
                    <th scope="col" class="text-nowrap">Notice-Text</th>
                    <th scope="col" class="text-nowrap">Options</th>
                    <th scope="col" class="text-nowrap">Files</th>
                    <th scope="col" class="text-nowrap">Created At</th>
                    <th scope="col" class="text-nowrap">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notices as $key => $notice)
                    @php
                        $formattedCreatedAt = Carbon::parse($notice->created_at)->format('Y-M-d');
                    @endphp
                    <tr>
                        <th scope="row">{{ ($notices->currentPage() - 1) * $notices->perPage() + $key + 1 }}</th>
                        <td>{!! $notice->notice_text !!}</td>
                        <td><a href="{{ $notice->notice_file }}" target="_blank">view</a></td>
                        <td>{{ $notice->is_academic }}</td>
                        <td>{{ $formattedCreatedAt }}</td>
                        <td>
                            <a href="{{ route('editNotice', ['id' => encrypt($notice->notice_id)]) }}">
                                <button class="btn btn-primary mb-2"><i class="bi bi-pencil-square"></i></button>
                            </a>
                            <a onclick="return confirm('Are you sure to delete this notice')"
                                href="{{ route('delete', ['id' => encrypt($notice->notice_id)]) }}">
                                <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                            </a>
                        </td>
                    </tr>
                @endforeach
        </table>
        {{ $notices->links() }}
    </div>
</div>

@include('admin/footer')
