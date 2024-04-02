@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page /Edit Notice</h1>
    </div>
    {{-- notic input form  --}}
    <div class="section shadow">
        <div class="section-head">
            <h1>Edit Notice</h1>
        </div>

        <div class="section-body pt30">
            <form action="{{ route('update.notice', ['id' => encrypt($data->notice_id)]) }}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="text-section">
                    <div class="text-content">
                        {{-- select option  --}}
                        <div class="text-title">
                            <label for="title">Select an option :</label>
                            <select id="selectExample" name="selectOption">
                                <option value="" selected disabled>Select an option</option>

                                <option value="Academic" @if ($data->is_academic === 'Academic') selected @endif>
                                    Academic
                                </option>

                                <option value="Administrative" @if ($data->is_academic === 'Administrative') selected @endif>
                                    Administrative
                                </option>
                            </select>
                            @error('selectOption')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- upload file --}}
                        <div class="" id="hero1">
                            <label for="">Upload Notice:</label>
                            <input type="file" name="notice_file" />
                            @error('notice_file')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- write text  --}}
                        <div class="text-para">
                            <label for="paragraph">
                                Notice text
                                <textarea class="input-item" name="notice_text" id="paragraph" placeholder="Enter Paragraph">{{ old('notice_text', $data->notice_text) }}</textarea>
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
</div>

@include('admin/footer')
