@extends('layouts.admin')
@section('title','Parking Area')

@section('content')

<!-- <body> -->
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
          <div class="col-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">List of @yield('title')</h3>
              </div>
              <!-- /.card-header -->
              @foreach($parkings as $parking)
              <div class="card-body">
              <div class="row">
              <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box bg-danger">
              <!-- <span class="info-box-icon"><i class="far fa-bookmark"></i></span> -->

              <div class="info-box-content">
                
                <span class="info-box-text">{{$parking->area_name}}</span>
                <span class="info-box-number">20 Parking Lots</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  5 Parking Lots Available
                </span>
                <div class="btn-group">
                          <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                          </div>
                        </div>
              </div>
              <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
              </div>
              </div>
              </div>
              
              @endforeach
                      <!-- @foreach($parkings as $parking)
                      <div class="card-tools">
                      
                      <a href="editParkingLot"><button class="button button1">{{$parking->area_name}}</button></a>
                      <div class="card-tools">
                      <a href="#" class="btn btn-tool">
                        <i class="fas fa-pen"></i>
                      </a>
                
                      @endforeach -->
                      
                      <a href="addParkingArea"><button type="button" class="btn btn-outline-secondary">
                    
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" fill="currentColor" color="#000000" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                      </svg>
                        <span class="visually-hidden"></span>
                        
                      </button></a>
                    </div>
                  </div>
                  <!-- </div> -->
                  <!-- </div> -->
            
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    

<!-- </body> -->
@endsection
