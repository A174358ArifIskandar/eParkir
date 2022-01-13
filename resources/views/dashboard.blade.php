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
    <div class="col-12">
      <div class="row">
        <div class="col-md-4 card-deck row">
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">

                <img class="profile-user-img img-fluid img-circle" src="{{Storage::url($student->student_image)}}" alt="User profile picture">
              </div>
              <h3 class="profile-username text-center">{{$student->user->user_name}}</h3>
              <p class="text-muted text-center">{{$student->matric_no}}</p>
              <hr>
              <p><i class="far fa-building"></i> College: {{$student->college_name}}</p>
              <p><i class="fas fa-book mr-1"></i> Faculty: {{$student->student_faculty}}</p>
              <p><i class="far fa-envelope-open"></i> Email: {{$student->user->user_email}}</p>
              <p><i class="fas fa-phone-alt mr-1"></i> Phone Number: {{$student->user->user_phone}}</p>

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

                      <div id="piechart" style="width: 900px; height: 350px;"></div>

                    </div>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Occupied Parking</strong>
                  </p>

                  <div class="progress-group">
                    Blok A
                    <span class="float-right"><b>16</b>/40</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-primary" style="width: 40%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    Blok C
                    <span class="float-right"><b>25</b>/30</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-warning" style="width: 80%"></div>
                    </div>
                  </div>
                  <div class="progress-group">
                    Blok F
                    <span class="float-right"><b>12</b>/30</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-danger" style="width: 40%"></div>
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


    </div>

  </section>
</div>
<!-- /.content-wrapper -->
@endsection