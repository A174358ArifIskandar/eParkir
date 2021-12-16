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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">My Profile</h3>
              </div>
                  <div class="card-body">
                    <p class="card-text">Hanis Batrisyia</p>
                    <p class="card-text">A123456</p>
                    <a href="#" class="card-link">See more</a>
                    <a href="#" class="card-link text-danger">Edit profile</a>
                  
                  </div>
                  </div>
            
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <a href="{{route('parkingArea.index')}}"><h3 class="card-title">Parking Area</h3></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
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
                </div>
                <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                </div>
              @endforeach
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    <!-- /.content -->
  </div>
  </section>
  </div>
  <!-- /.content-wrapper -->
@endsection