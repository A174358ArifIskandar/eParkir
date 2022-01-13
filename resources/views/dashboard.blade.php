<?php $page = 'home'; ?>
@extends('layouts.student')
@section('title','Dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="row">
      <div class="col-md-3">
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
             
              <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
            </div>
            <h3 class="profile-username text-center">Hanis Batrisyia</h3>
            <p class="text-muted text-center">A175218</p>
            <hr>
            <p><i class="far fa-building"></i> Kolej: Kolej Pendeta Za'ba</p>
            <p><i class="fas fa-book mr-1"></i> Fakulti: Teknologi & Sains Maklumat</p>
            <p><i class="far fa-envelope-open"></i> Email: A175218@siswa.ukm.edu.my</p>
            <p><i class="fas fa-phone-alt mr-1"></i> No Tel: 019-3883177</p>
            
          </div>
        </div>
      </div>

      <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Preferred Area Comparison</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <a href="#" class="dropdown-item">Action</a>
                  <a href="#" class="dropdown-item">Another action</a>
                  <a href="#" class="dropdown-item">Something else here</a>
                  <a class="dropdown-divider"></a>
                  <a href="#" class="dropdown-item">Separated link</a>
                </div>
              </div>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <!-- <p class="text-center">
                    <strong>Booking Area Comparison</strong>
                  </p> -->

                <div class="card-body">
                  <div class="chart">

                    <div id="piechart" style="width: 900px; height: 300px;"></div>

                  </div>
                </div>
                <!-- /.chart-responsive -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <p class="text-center">
                  <strong>Parking Availability</strong>
                </p>

                <div class="progress-group">
                  Blok A
                  <span class="float-right"><b>160</b>/200</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->

                <div class="progress-group">
                  Blok F
                  <span class="float-right"><b>310</b>/400</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                  </div>
                </div>

                <!-- /.progress-group -->
                <div class="progress-group">
                  <span class="progress-text">Dataran Dinamis</span>
                  <span class="float-right"><b>480</b>/800</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 60%"></div>
                  </div>
                </div>

                <!-- /.progress-group -->
                <div class="progress-group">
                  Blok C
                  <span class="float-right"><b>250</b>/500</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">My Parking</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table">
              <tbody>

                <tr>
                  <td>Parking Area</td>
                  <td>Blok {{$myParking->area_id}}</td>
                  <td class="text-right py-0 align-middle">

                  </td>
                </tr>
                <tr>
                  <td>Lot ID</td>
                  <td>{{$myParking->lot_id}}</td>
                  <td class="text-right py-0 align-middle">

                  </td>
                </tr>

                <tr>
                  <td>Plate No</td>
                  <td>{{$myParking->plate_no}}</td>
                  <td class="text-right py-0 align-middle">

                  </td>

                </tr>

                <tr>
                  <td>Status</td>
                  <td>@if($myParking['lot_status']=='approved')
                    <span class="badge badge-success">Approved</span>
                    @else
                    <span class="badge badge-warning">Pending</span>
                    @endif
                  </td>
                  <td class="text-right py-0 align-middle">

                  </td>

                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
    <!-- /.content -->
    <!-- Main content -->
    <!--
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-primary">
                <div class="card-header">
                  <a href="{{route('parkingArea.index')}}">
                    <h3 class="card-title">Parking Area</h3>
                  </a>
                </div> -->
    <!-- /.card-header -->
    <!--   <div class="card-body">
                  <div class="row">
                    @foreach($parkings as $parking)
                    <div class="col-md-3 col-sm-6 col-12">
                      <div class="info-box bg-success">
                        <div class="info-box-content">
                          <span class="info-box-text">{{$parking->area_name}}</span>
                          <span class="info-box-number">{{$parking->area_total_availability}} Parking Lots</span>
                          <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                          </div>
                          <span class="progress-description">{{$parking->area_total_availability}} Parking Lots Available</span>
                        </div> -->
    <!-- /.info-box-content -->
    <!--    </div> -->
    <!-- /.info-box -->
    <!--   </div>
                    @endforeach-->
    <!-- /.card-body -->

    <!-- /.container-fluid -->
    <!-- /.content -->
</div>
</section>

<!-- /.content-wrapper -->
@endsection