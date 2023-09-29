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
                <h5 class="card-title">Column Chart</h5>

                <!-- Column Chart -->
                <div id="columnChart"></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#columnChart"), {
                      series: [{
                        name: 'Net Profit',
                        data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
                      }, {
                        name: 'Revenue',
                        data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
                      }, {
                        name: 'Free Cash Flow',
                        data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
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
                        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
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
                            return "$ " + val + " thousands"
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
              <h5 class="card-title">Bar Chart</h5>

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
                      categories: ['South Korea', 'Canada', 'United Kingdom', 'Netherlands', 'Italy', 'France', 'Japan',
                        'United States', 'China', 'Germany'
                      ],
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
                    <h5 class="card-title">Pie Chart</h5>

                    <!-- Pie Chart -->
                    <div id="pieChart"></div>

                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#pieChart"), {
                            series: [44, 55, 13, 43, 22],
                            chart: {
                            height: 350,
                            type: 'pie',
                            toolbar: {
                                show: true
                            }
                            },
                            labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E']
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
              <h5 class="card-title">Donut Chart</h5>

              <!-- Donut Chart -->
              <div id="donutChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#donutChart"), {
                    series: [44, 55, 13, 43, 22],
                    chart: {
                      height: 350,
                      type: 'donut',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
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