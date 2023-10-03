<title>RFC - App | {{$title}}</title>
  @extends('partials.headerFooter')
  @include('partials.sidebar')
  @section('content')
<main id="main" class="main">

    <div class="pagetitle">
    <h1>Charts</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Charts</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <div class="row">
    <!-- baris 1 start -->
      <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Tekstur Tanah</h5>

                <!-- Column Chart -->
                <div id="columnChart"></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#columnChart"), {
                      series: [{
                        name: 'Nitrogen',
                        data: [41, 11, 16, 9, 14, 40,13]
                      }, {
                        name: 'Potassium',
                        data: [117, 30, 46, 25, 42, 113, 37]
                      }, {
                        name: 'Tempratur Tanah',
                        data: [34, 34, 35, 37, 35, 34, 32]
                      }],
                      chart: {
                        type: 'bar',
                        height: 350
                      },
                      plotOptions: {
                        bar: {
                          horizontal: false,
                          columnWidth: '55%',
                          endingShape: 'rounded'
                        },
                      },
                      dataLabels: {
                        enabled: false
                      },
                      stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                      },
                      xaxis: {
                        categories: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                      },
                      yaxis: {
                        title: {
                          text: '$ (thousands)'
                        }
                      },
                      fill: {
                        opacity: 1
                      },
                      tooltip: {
                        y: {
                          formatter: function(val) {
                            return " " + val + " satuan"
                          }
                        }
                      }
                    }).render();
                  });
                </script>
                <!-- End Column Chart -->

              </div>
            </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Humidity</h5>

              <!-- Bar Chart -->
              <div id="barChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#barChart"), {
                    series: [{
                      data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
                    }],
                    chart: {
                      type: 'bar',
                      height: 350
                    },
                    plotOptions: {
                      bar: {
                        borderRadius: 4,
                        horizontal: true,
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    xaxis: {
                      categories: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                    }
                  }).render();
                });
              </script>
              <!-- End Bar Chart -->

            </div>
          </div>
        </div>

    <!-- baris 1 ends -->

    <!-- baris 2 starts -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Level Baterai</h5>

                    <!-- Pie Chart -->
                    <div id="pieChart"></div>

                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#pieChart"), {
                            series: [44, 55, 13, 43, 22, 31, 32],
                            chart: {
                            height: 350,
                            type: 'pie',
                            toolbar: {
                                show: true
                            }
                            },
                            labels: ['pH1', 'Soil_Moisture1A', 'Soil_Temperature1A', 'Soil_Conductivity1A', 'Nitrogen1A', 'Phosphorus1A', 'Potassium1A']
                        }).render();
                        });
                    </script>
                    <!-- End Pie Chart -->
                </div>
            </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hasil Panen</h5>

              <!-- Donut Chart -->
              <div id="donutChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#donutChart"), {
                    series: [44, 55, 13, 43],
                    chart: {
                      height: 350,
                      type: 'donut',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Quartal 1', 'Quartal 2', 'Quartal 3', 'Quartal 4'],
                  }).render();
                });
              </script>
              <!-- End Donut Chart -->

            </div>
          </div>
        </div>
    <!-- baris 2 end -->
    </div>
</main>   
  @endsection