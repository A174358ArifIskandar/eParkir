<?php $page = 'home'; ?>
@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">@yield('title')</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">@yield('title')</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <!-- ./col -->
            <div class="col-md-12">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  @foreach($histories as $history)
                  @if($history['book_status']=='approved')
                  <input type="hidden" id="id" value="{{++$count}}" class="form-control">
                  @else
                  @endif
                  @endforeach
                  <h3>{{$count}}<sup style="font-size: 20px"></sup></h3>
                  <input type="hidden" id="id" value="{{$count=0}}" class="form-control">
                  <p>Approved Request</p>
                </div>
                <div class="icon">
                  <i class="fas fa-check-circle"></i>
                </div>
                <a href="{{route('parkingStatus.create')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>


          <!-- /.card -->
          <!-- ./col -->
          <div class="row">
            <div class="col-md-12">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  @foreach($bookings as $booking)
                  @if($booking['lot_status']=='pending')
                  <input type="hidden" id="id" value="{{++$count}}" class="form-control">
                  @elseif($booking['lot_status']=='notpaid')
                  <input type="hidden" id="id" value="{{++$count}}" class="form-control">
                  @endif
                  @endforeach
                  <h3>{{$count}}<sup style="font-size: 20px"></sup></h3>
                  <input type="hidden" id="id" value="{{$count=0}}" class="form-control">
                  <p>Pending Requests</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user-plus"></i>
                </div>
                <a href="{{route('parkingStatus.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="row">
            <div class="col-md-12">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  @foreach($histories as $history)
                  @if($history['book_status']=='declined')
                  <input type="hidden" id="id" value="{{++$count}}" class="form-control">
                  @else
                  @endif
                  @endforeach

                  <h3>{{$count}}<sup style="font-size: 20px"></sup></h3>
                  <input type="hidden" id="id" value="{{$count=0}}" class="form-control">
                  <p>Declined Requests</p>
                </div>
                <div class="icon">
                  <i class="fas fa-times-circle"></i>
                </div>
                <a href="{{route('parkingStatus.create')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-8">
          <div class="card card-info">
            <div class="card-header">
              <h5 class="card-title">Preferred Area Comparison</h5>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>

              </div>
            </div>
            <!-- /.card-header -->
            <script type="text/javascript">
              google.charts.load('current', {
                'packages': ['corechart']
              });
              google.charts.setOnLoadCallback(drawChart);

              function drawChart() {

                var data = google.visualization.arrayToDataTable([
                  ['Parking', 'Occupied',{ role: 'annotation' }, 'Available',{ role: 'annotation' }],
                  <?php foreach ($parkings as $parking) {
                    foreach ($bookings as $booking) {
                      if ($booking['lot_status'] == 'approved' || 'pending' || 'notpaid') {
                        if ($booking['area_id'] == $parking['area_id']) {
                          $count++;
                        } else {
                        }
                      }
                    }
                    echo "['{$parking->area_name}', $count, $count, ({$parking->area_total_availability}-$count), {$parking->area_total_availability}-$count],";
                    $count = 0;
                  }
                  ?>
                ]);

                var options = {
                  title: 'Parking Area',
                  colors: ['#cc1100', '#389738'],
                  width: 750,
                  height: 400,
                  legend: {
                    position: 'top',
                    maxLines: 3
                  },
                  bar: {
                    groupWidth: '75%'
                  },
                  isStacked: true
                };

                var chart = new google.visualization.BarChart(document.getElementById('piechart'));

                chart.draw(data, options);
              }
            </script>

            <body>
              <div class="chart">
                <div id="piechart" style="width: 750px; height: 400px;"></div>
              </div>
            </body>
          </div>
        </div>
      </div>



      <!-- /.col -->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
              <h5 class="card-title">Parking Sold</h5>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>

            <script type="text/javascript">
              google.charts.load('current', {
                'packages': ['bar']
              });
              google.charts.setOnLoadCallback(drawChart);

              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Semester', 'Blok A', 'Blok C', 'Blok D', 'Blok F'],
                  ['Sem I 2019/2020', 40, 12, 30, 25],
                  ['Sem II 2019/2020', 38, 17, 31, 20],
                  ['Sem I 2020/2021', 42, 16, 32, 25],
                  ['Sem II 2020/2021', 41, 17, 33, 25]
                ]);

                var options = {
                  legend: {
                    alignment: 'start'
                  },
                  width: 1000,
                  height: 350,
                };

                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                chart.draw(data, google.charts.Bar.convertOptions(options));
              }
            </script>

            <body>
              <br>
              <h5 class="chartheader text-center">Parking Sold per Semester</h5>
              <h6 class="chartheader text-center">Blok A, Blok C, Blok D, Blok F: 2019-2021</h6>
              <br>
              <div id="columnchart_material" style="width: 1000px; height: 350px;"></div>
            </body>
          </div>
          <!-- /.col -->
          <!-- /.progress-group -->
        </div>
        <!-- /.col -->
      </div>
    </div>
  </section>
</div>



<!-- /.content-wrapper -->
@endsection