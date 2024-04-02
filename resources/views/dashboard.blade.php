
  @include('admin/header')
      <section class="graph-chart">
        <div class="graph-chart-section">
          <div class="page-head">
            <h1>Dashboard</h1>
          </div>
          <div class="graph-body">
            <div class="graph-chart-card">
              <div class="chart-card shadow">
                <p>Subscriber</p>
                <p>{{$subscribers}}</p>
              </div>
              <div class="chart-card shadow">
                <p>Total Change</p>
                <p>{{$activities}}</p>
              </div>
            </div>
            <div class="graph-chart-ele">
              <div class="chart-bar shadow">
                  <canvas id="myChart"></canvas>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="chartline">
        <div class="chart-section shadow">
          <canvas id="myLineChart"></canvas>
        </div>
      </section>
    
      @include('admin/footer')
