@extends('layouts.student')
@section('title','Parking Status')

@section('content')

<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color: black;" class="m-0">Parking Status</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Parking Status</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset>
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
                          Blok A
                        </td>
                        <td style="width: 10%" class="text-center">
                          A01
                        </td>
                        <td style="width: 10%" class="text-center">
                          B001
                        </td>
                        <td style="width: 10%" class="text-center">
                          A123456
                        </td>
                        <td style="width: 10%" class="text-center">
                          MET 44
                        </td>
                        <td style="width: 10%" class="text-center">
                          1/1/2022
                        </td>
                        <td class="project-state">
                          <span class="badge badge-warning">Pending</span>
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
              <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <fieldset>
                  <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">Student Details</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                      <div class="card-body">
                        <div class="form-group">
                          <!-- <label for="id">Book ID:</label> -->
                          <input type="hidden" name="book_id" id="id" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="matric">Matric No:</label>
                          <input type="" value="{{ \Illuminate\Support\Facades\Auth::user()->matric_no }}" name="matric_no" id="matric" class="form-control" placeholder="" readonly>
                        </div>
                        <div class="form-group">
                          <label for="name">Student Name:</label>
                          <input type="" value="{{ \Illuminate\Support\Facades\Auth::user()->user_name }}" name="student_name" id="name" class="form-control" placeholder="" readonly>
                        </div>
                        <div class="form-group">
                          <label for="plate">Plate No:</label>
                          <input type="text" name="plate_no" id="name" class="form-control" placeholder="Enter plate no">
                        </div>
                        <div class="form-group">
                          <label for="area_name">Blok:</label>
                          <input type="" value="" name="area_id" id="area_id" class="form-control" placeholder="" readonly>
                        </div>
                        <div class="form-group">
                          <label for="lot_id">Lot ID:</label>
                          <input type="" value="" name="lot_id" id="lot_id" class="form-control" placeholder="" readonly>
                        </div>
                        <div class="form-group">
                          <input type="hidden" name="lot_status" value="pending" id="id" class="form-control">
                        </div>
                        <div>
                          <label for="exampleInputFile">License Card</label>
                          <div class="custom-file">
                            <input type="file" accept="image/*" name="fileToUpload" id="inputImage" onchange="loadFile(event);" />
                          </div>
                        </div>
                        <div class="text-center">
                          <input type="submit" value="Approve" class="btn btn-success">
                          <input type="submit" value="Decline" class="btn btn-danger">
                        </div>
                </fieldset>
          </div>
          <!-- /.content -->
      </form>
      <!-- </body> -->
      @endsection