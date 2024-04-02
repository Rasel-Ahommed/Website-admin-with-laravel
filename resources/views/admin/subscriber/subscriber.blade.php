@include('admin/header')

<section class="subscriber">
    <div class="page-head">
        <h1>Subscriber</h1>
    </div>
    <div class="sub-line-chart shadow">
        <div class="chart-section">
            <canvas id="myLineChart"></canvas>
        </div>
    </div>

    <div class="subscriber-table shadow">
        <div class="mail-copy-btn">
            <h1>All Subscriber List</h1>
            {{-- <button>Copy mail</button> --}}
        </div>
        <div class="subscriber-list">
            <table>
                <thead>
                    <tr>
                        <th>Sr</th>
                        <th>Email</th>
                        <th>Subscribe Date</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        use Carbon\Carbon;
                    @endphp
                    @foreach ($datas as $key => $data)
                        <tr>

                            @php
                                $formattedCreatedAt = Carbon::parse($data->created_at)->format('Y-M-d');
                            @endphp
                            <td>{{ ($datas->currentPage() - 1) * $datas->perPage() + $key + 1 }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $formattedCreatedAt }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$datas->links()}}
        </div>
    </div>
</section>



@include('admin/footer')
