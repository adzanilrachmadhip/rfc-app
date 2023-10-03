<title>RFC - App | {{$title}}</title>
  @extends('partials.headerFooter')
  @include('partials.sidebar')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Sensor</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Satuan</th>
                    <!-- <th scope="col" disabled>Start Date</th> -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Nitrogen</td>
                    <td>Designer</td>
                    <td>28</td>
                    <!-- <td>2016-05-25</td> -->
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Fosfor</td>
                    <td>Developer</td>
                    <td>35</td>
                    <!-- <td>2014-12-05</td> -->
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Kalium</td>
                    <td>Finance</td>
                    <td>45</td>
                    <!-- <td>2011-08-12</td> -->
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Ph</td>
                    <td>HR</td>
                    <td>34</td>
                    <!-- <td>2012-06-11</td> -->
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Kelembaban</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <!-- <td>2011-04-19</td> -->
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>konduktivitas</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <!-- <td>2011-04-19</td> -->
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Tempratur</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <!-- <td>2011-04-19</td> -->
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection