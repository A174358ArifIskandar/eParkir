@extends('layouts.student')
@section('title','Book Parking')

@section('content')
<!-- <body> -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 style="color: black;" class="m-0">Book Parking</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('parkingArea.index')}}">Parking Area</a></li>
            <li class="breadcrumb-item active">Book Parking</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <form action="" method="post" enctype="multipart/form-data">
    @csrf
    <fieldset>
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Book Parking</h3>
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
              <input type="" name="matric" id="matric" class="form-control" placeholder="">
            </div>
            <div class="form-group">
              <label for="name">Student Name:</label>
              <input type="" name="student_name" id="name" class="form-control" placeholder="">
            </div>
            <div class="form-group">
              <label for="session">Student Session:</label>
              <input type="" name="student_session" id="student_session" class="form-control" placeholder="">
            </div>
            <div class="form-group">
              <label for="plate">Plate No:</label>
              <input type="text" name="plate" id="name" class="form-control" placeholder="Enter plate no">
            </div>
            <div class="form-group">
              <label for="area_name">Area Name:</label>
              <input type="" value="" name="area_name" id="area_name" class="form-control" placeholder="">
            </div>
            <div class="form-group">
              <label for="lot_id">Lot ID:</label>
              <input type="" value="" name="lot_id" id="lot_id" class="form-control" placeholder="">
            </div>
            <div>
            <div>
              <label for="exampleInputFile">License Card</label>
              <div class="custom-file">
                <input type="file" accept="image/*" name="fileToUpload" id="inputImage" onchange="loadFile(event);" />
            </div>
            </div>


            <div class="text-center">
              <input type="submit" value="Submit" class="btn btn-primary">
            </div>

    </fieldset>
</div>
<!-- /.content -->
</form>



<!-- </body> -->
@endsection