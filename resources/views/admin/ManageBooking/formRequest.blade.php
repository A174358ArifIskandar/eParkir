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
      <section class="content">
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
                    Blok {{$bookings->area_id}}
                  </td>
                  <td style="width: 10%" class="text-center">
                    {{$bookings->lot_id}}
                  </td>
                  <td style="width: 10%" class="text-center">
                    {{$bookings->book_id}}
                  </td>
                  <td style="width: 10%" class="text-center">
                    {{$bookings->matric_no}}
                  </td>
                  <td style="width: 10%" class="text-center">
                    {{$bookings->plate_no}}
                  </td>
                  <td style="width: 10%" class="text-center">
                    {{$bookings->updated_at}}
                  </td>
                  <td class="project-state">
                    @if($bookings['lot_status']=='approved')
                    <span class="badge badge-success">Approved</span>
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
          <fieldset>

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Student Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="card-body">
                      <div class="form-group">
                        <!-- <label for="id">Book ID:</label> -->
                        <input type="hidden" name="book_details_id" value="{{$bookings->book_id}}" id="id" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="matric">Matric No:</label>
                        <input type="" value="{{$bookings->matric_no}}" name="matric_no" id="matric" class="form-control" placeholder="" readonly>
                      </div>
                      <div class="form-group">
                        <label for="name">Student Name:</label>
                        <input type="" value="{{$bookings->user->user_name}}" name="student_name" id="name" class="form-control" placeholder="" readonly>
                      </div>
                      <div class="form-group">
                        <label for="plate">Plate No:</label>
                        <input type="text" value="{{$bookings->plate_no}}" name="plate_no" id="name" class="form-control" placeholder="Enter plate no" readonly>
                      </div>
                      <div class="form-group">
                        <label for="area_name">Blok:</label>
                        <input type="" value="{{$bookings->area_id}}" name="area_id" id="area_id" class="form-control" placeholder="" readonly>
                      </div>
                      <div class="form-group">
                        <label for="lot_id">Lot ID:</label>
                        <input type="" value="{{$bookings->lot_id}}" name="lot_id" id="lot_id" class="form-control" placeholder="" readonly>
                      </div>
                      <!-- <div class="form-group">
                        <input type="hidden" name="lot_status" value="pending" id="id" class="form-control">
                      </div> -->
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <label for="exampleInputFile">License Card</label>
                      <div class="card-body">
                        <img src="{{Storage::url($bookings->license_image)}}" id='image_preview' class="img-fluid">
                      </div>

                      <div class="form-group">
                        <input type="hidden" value="approved" name="book_status" id="name" class="form-control" placeholder="" readonly>
                      </div>
                      <div class="form-group">
                        <input type="hidden" value="-" name="description" id="name" class="form-control" placeholder="" readonly>
                      </div>
                      <div class="text-center">
                        <input type="submit" value="Approve" class="btn btn-success">
                        <a href="{{route('parkingStatus.edit', $bookings->book_id)}}" class="btn btn-danger" style="margin-right: 0px;">
                          Decline
                        </a>
                        <!-- <input type="submit" value="Decline" class="btn btn-danger"> -->
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </fieldset>
        </form>
      </section>
    </div>
    <!-- /.content -->
    <!-- </body> -->
  </section>
</div>

@endsection