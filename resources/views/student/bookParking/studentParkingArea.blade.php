<?php $page = 'parkingArea'; ?>
@extends('layouts.student')
@section('title','Parking Area')

@section('content')
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
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <h5><i class="icon fas fa-check"></i> Success!</h5>
        <p>{{ $message }}</p>
      </div>
      @endif
      <div class="row">
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">List of @yield('title')</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                @foreach($parkings as $parking)
                @foreach($bookings as $booking)
                @if($booking['lot_status']=='approved'||'pending'||'notpaid')
                @if($booking['area_id']==$parking['area_id'])
                <input type="hidden" id="id" value="{{++$count}}" class="form-control">
                @else
                @endif
                @else
                @endif
                @endforeach
                <div class="col-md-3 col-sm-6 col-12">
                  <a href="{{route('parkingArea.show', $parking->area_id)}}">
                    <div class="info-box bg-success">
                      <div class="info-box-content">
                        <span class="info-box-text">{{$parking->area_name}}</span>
                        <span class="info-box-number">{{$parking->area_total_availability-$count}} Parking Lots Available</span>
                        <div class="progress">
                          <input type="hidden" id="id" value="{{$countperc=$count/$parking->area_total_availability*100}}" class="form-control">
                          <div class="progress-bar" style="width: {{$countperc}}%"></div>
                        </div>
                        <span class="progress-description">
                          {{$parking->area_total_availability}} Total Parking Lots
                        </span>
                        <!-- <form action="{{route('parkingArea.destroy', $parking->area_id)}}" method="post">
                        @csrf
                        @method('delete')
                        <div class="btn-group">
                          <a href="{{route('parkingArea.show', $parking->area_id)}}" class="btn btn-default">
                            <i class="fas fa-info-circle"></i>
                          </a>
                          <a href="{{route('parkingArea.edit', $parking->area_id)}}" class="btn btn-default">
                            <i class="far fa-edit"></i>
                          </a>
                          <button type="submit" onclick="return confirm('Are you sure you want to delete this parking area?');" class="btn btn-default">
                            <i class="far fa-trash-alt"></i>
                          </button>
                        </div>

                      </form> -->
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </a>
                </div>
                <input type="hidden" id="id" value="{{$count=0}}" class="form-control">
                @endforeach
                <!-- </div> -->
              </div>
            </div>
          </div>
          <!-- </div> -->
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
</div>
<!-- /.content -->
@endsection