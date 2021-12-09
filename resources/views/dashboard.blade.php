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
                <h3 class="card-title">Parking Area</h3>
                <i class="fas fa-angle-double-right"></i>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-info">
              <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Blok A</span>
                <span class="info-box-number">20 Parking Lots</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  5 Parking Lots Available
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-success">
              <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Blok C</span>
                <span class="info-box-number">10 Parking Lots</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                    3 Parking Lots Available
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-warning">
              <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Blok F</span>
                <span class="info-box-number">15 Parking Lots</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                9 Parking Lots Available
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-danger">
              <span class="info-box-icon"><i class="fas fa-comments"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Dataran Dinamis</span>
                <span class="info-box-number">25 Parking Lots</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                18 Parking Lots Available
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
                
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