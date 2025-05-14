<!-- STACKED BAR CHART -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<section class="content">
  <div class="container-fluid">
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Stacked Bar Chart</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="chart">
          <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          <script>
            // Use a more descriptive ID for the canvas
            var ctx = document.getElementById("stackedBarChart").getContext('2d');
            
            // Use let or const for variable declaration
            let myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                labels: ["Jambu", "Mangga", "Manggis","Alpukat", "Buah Naga", "Melon", "Semangka", "Apel", "Durian", "Jeruk", "Strawberry" ],
                datasets: [{
                  label: 'Data',
                  data: [
                    <?php
                    $connect = mysqli_connect("localhost", "root", "", "db_sistem");
                    $Jambuu = mysqli_query($connect, "select * from penjualan_buah where nama ='Jambu'");
                    echo mysqli_num_rows($Jambuu);
                    ?>,
                    <?php
                    $Mangga = mysqli_query($connect, "select * from penjualan_buah where nama ='Mangga'");
                    echo mysqli_num_rows($Mangga);
                    ?>,
                    <?php
                    $Manggis = mysqli_query($connect, "select * from penjualan_buah where nama='Manggis'");
                    echo mysqli_num_rows($Manggis);
                    ?>,
                    <?php
                    $Alpukat = mysqli_query($connect, "select * from penjualan_buah where nama ='Alpukat'");
                    echo mysqli_num_rows($Alpukat);
                    ?>,
                    <?php
                    $BuahNaga = mysqli_query($connect, "select * from penjualan_buah where nama ='Buah Naga'");
                    echo mysqli_num_rows($BuahNaga);
                    ?>,
                    <?php
                    $Melon = mysqli_query($connect, "select * from penjualan_buah where nama ='Melon'");
                    echo mysqli_num_rows($Melon);
                    ?>,
                    <?php
                    $Semangka = mysqli_query($connect, "select * from penjualan_buah where nama ='Semangka'");
                    echo mysqli_num_rows($Semangka);
                    ?>,
                    <?php
                    $Apel = mysqli_query($connect, "select * from penjualan_buah where nama ='Apel'");
                    echo mysqli_num_rows($Apel);
                    ?>,
                    <?php
                    $Durian = mysqli_query($connect, "select * from penjualan_buah where nama ='Durian'");
                    echo mysqli_num_rows($Durian);
                    ?>,
                    <?php
                    $Jeruk = mysqli_query($connect, "select * from penjualan_buah where nama ='Jeruk'");
                    echo mysqli_num_rows($Jeruk);
                    ?>,
                    <?php
                    $Strawberry = mysqli_query($connect, "select * from penjualan_buah where nama ='Strawberry'");
                    echo mysqli_num_rows($Strawberry);
                    ?>,
                    <?php
                    $Alpukat = mysqli_query($connect, "select * from penjualan_buah where nama ='Alpukat'");
                    echo mysqli_num_rows($Alpukat);
                    ?>
                    ],
                  backgroundColor: [
                    'rgba(100, 99, 132)',
                    'rgba(54, 162, 235)',
                    'rgba(355, 670, 86)',
                    'rgba(5, 786, 86)',
                    'rgba(555, 886, 86)',
                    'rgba(55, 206, 86)',
                    'rgba(700, 66, 86)',
                    'rgba(987, 6, 86)',
                    'rgba(55, 746, 86)',
                    'rgba(155, 936, 86)',
                    'rgba(275, 26, 86)'
                  ],
                  borderColor: [
                    'rgba(100, 99, 132)',
                    'rgba(54, 162, 235)',
                    'rgba(355, 670, 86)',
                    'rgba(5, 786, 86)',
                    'rgba(555, 886, 86)',
                    'rgba(55, 206, 86)',
                    'rgba(700, 66, 86)',
                    'rgba(987, 6, 86)',
                    'rgba(55, 746, 86)',
                    'rgba(155, 936, 86)',
                    'rgba(275, 26, 86)'
                  ],
                  borderWidth: 1 // Correct the typo in borderWidth
                }]
              }
            });
          </script>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.container-fluid -->
</section>
