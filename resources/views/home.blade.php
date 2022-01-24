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
        <!-- ./col -->
        <div class="col-lg-4 col-6">
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
        <!-- ./col -->
        <div class="col-lg-4 col-6">
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
        <!-- ./col -->
        <div class="col-lg-4 col-6">
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

      <div class="row">
        <div class="col-md-12">
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
  </section>
</div>

<!-- /.content-wrapper -->
@endsection