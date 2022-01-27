<?php $page = 'parkingStatus'; ?>
@extends('layouts.admin')
@section('title','Booking Status')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 style="color: black;" class="m-0">@yield('title')</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('parkingStatus.index')}}">Booking Request</a></li>
            <li class="breadcrumb-item active">@yield('title')</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Parking Details</h3>
      </div>
      <!-- /.card-header -->

      <!-- Default box -->

      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>
        </div>

        <div class="card-body p-0">
          <table class="table table-striped projects">
            <thead>
              <tr>
                <th style="width: 10%" class="text-center">
                  Parking Area
                </th>
                <th style="width: 10%" class="text-center">
                  Lot ID
                </th>
                <th style="width: 10%" class="text-center">
                  Booking ID
                </th>
                <th style="width: 10%" class="text-center">
                  Matric No
                </th>
                <th style="width: 10%" class="text-center">
                  Plate No
                </th>
                <th style="width: 10%" class="text-center">
                  Date
                </th>
                <th style="width: 10%" class="text-center">
                  Status
                </th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td style="width: 10%" class="text-center">
                  Blok {{$bookingids->area_id}}
                </td>
                <td style="width: 10%" class="text-center">
                  {{$bookingids->lot_id}}
                </td>
                <td style="width: 10%" class="text-center">
                  {{$bookingids->book_id}}
                </td>
                <td style="width: 10%" class="text-center">
                  {{$bookingids->matric_no}}
                </td>
                <td style="width: 10%" class="text-center">
                  {{$bookingids->plate_no}}
                </td>
                <td style="width: 10%" class="text-center">
                  {{$bookingids->updated_at}}
                </td>
                <td class="project-state">
                  @if($bookingids['lot_status']=='approved')
                  <span class="badge badge-success">Approved</span>
                  @elseif($bookingids['lot_status']=='notpaid')
                  <span class="badge bg-orange color-palette">Not Paid</span>
                  @else
                  <span class="badge badge-warning">Pending</span>
                  @endif
                </td>

              </tr>
            </tbody>

          </table>

        </div>
      </div>
      <!-- <body> -->

      @if($errors->any())
      <div class="alert alert-danger">
        <h5><i class="icon fas fa-ban"></i> Error!</h5>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </div>
      @endif
      <form action="{{ route('parkingStatus.store') }}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Student Details</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->

          <div class="row">
            <div class="col-md-6">
              <div class="card-body">
                <div class="form-group">
                  <!-- <label for="id">Book ID:</label> -->
                  <input type="hidden" name="book_details_id" value="{{$bookingids->book_id}}" id="id" class="form-control">
                </div>
                <div class="form-group">
                  <label for="matric">Matric No:</label>
                  <input type="" value="{{$bookingids->matric_no}}" name="matric_no" id="matric" class="form-control" placeholder="" readonly>
                </div>
                <div class="form-group">
                  <label for="name">Student Name:</label>
                  <input type="" value="{{$bookingids->user->user_name}}" name="student_name" id="name" class="form-control" placeholder="" readonly>
                </div>
                <div class="form-group">
                  <label for="plate">Plate No:</label>
                  <input type="text" value="{{$bookingids->plate_no}}" name="plate_no" id="name" class="form-control" placeholder="Enter plate no" readonly>
                </div>
                <div class="form-group">
                  <label for="area_name">Blok:</label>
                  <input type="" value="{{$bookingids->area_id}}" name="area_id" id="area_id" class="form-control" placeholder="" readonly>
                </div>
                <div class="form-group">
                  <label for="lot_id">Lot ID:</label>
                  <input type="" value="{{$bookingids->lot_id}}" name="lot_id" id="lot_id" class="form-control" placeholder="" readonly>
                </div>

              </div>
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <label for="exampleInputFile">License Card</label>
                <div class="card-body">
                  <img src="{{Storage::url($bookingids->license_image)}}" id='image_preview' class="img-fluid">
                </div>
                @if($bookingids['lot_status']=='pending')
                <div class="form-group">
                  <input type="hidden" value="notpaid" name="book_status" id="name" class="form-control" placeholder="" readonly>
                </div>
                <div class="form-group">
                  <input type="hidden" value="-" name="description" id="name" class="form-control" placeholder="" readonly>
                </div>
                <div class="text-center">
                  <input type="submit" value="Approve" class="btn btn-success">
                  <a href="{{route('parkingStatus.edit', $bookingids->book_id)}}" class="btn btn-danger" style="margin-right: 0px;">
                    Decline
                  </a>
                </div>
                @elseif($bookingids['lot_status']=='notpaid')
                <div class="form-group">
                  <input type="hidden" value="approved" name="book_status" id="name" class="form-control" placeholder="" readonly>
                </div>
                <div class="form-group">
                  <input type="hidden" value="-" name="description" id="name" class="form-control" placeholder="" readonly>
                </div>
                <div class="text-center">
                  <input type="submit" value="Approve Payment" class="btn btn-success">
                </div>

              </div>
            </div>
          </div>
        </div>
      </form>

      <form action="{{ route('parkingStatus.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="book_details_id" value="{{$bookingids->book_id}}" id="id" class="form-control">
        <input type="hidden" value="{{$bookingids->matric_no}}" name="matric_no" id="matric" class="form-control" placeholder="" readonly>
        <input type="hidden" value="declined" name="book_status" id="name" class="form-control" placeholder="" readonly>
        <input type="hidden" value="Cancel" name="description" id="name" class="form-control" placeholder="" readonly>
        <div class="row">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <div class="text-center">
              <input type="submit" value="Cancel" class="btn btn-danger">
            </div>
          </div>
        </div>
      </form>
  
@endif
</div>
</section>
</div>
@endsection