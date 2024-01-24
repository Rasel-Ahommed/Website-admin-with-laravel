  <?php include '../header.php';?>
      <section class="graph-chart">
        <div class="graph-chart-section">
          <div class="page-head">
            <h1>Dashboard</h1>
          </div>
          <div class="graph-body">
            <div class="graph-chart-card">
              <div class="chart-card shadow">
                <p>Subscriber</p>
                <p>2235</p>
              </div>
              <div class="chart-card shadow">
                <p>Total Change</p>
                <p>53</p>
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
    
      <?php include '../footer.php'; ?>
