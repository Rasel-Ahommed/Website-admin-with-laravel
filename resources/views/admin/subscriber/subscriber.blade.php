
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
            <button>Copy mail</button>
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
                    <tr>
                        <td>1</td>
                        <td>ridoysheikh15@gmail.com</td>
                        <td>Jan 17, 2024</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ridoysheikh15@gmail.com</td>
                        <td>Jan 17, 2024</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ridoysheikh15@gmail.com</td>
                        <td>Jan 17, 2024</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ridoysheikh15@gmail.com</td>
                        <td>Jan 17, 2024</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ridoysheikh15@gmail.com</td>
                        <td>Jan 17, 2024</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@include('admin/footer')