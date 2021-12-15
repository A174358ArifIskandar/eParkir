@extends('layouts.admin')

@section('title','Update & Edit Parking Area')
@section('content')

<style>
  form {
    /* border-top: 5px solid ; */
    width: 552px;
    margin: 40px auto;
  }
</style>

<!-- <body> -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 style="color: black;" class="m-0">Update & Edit Parking Area</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('parkingArea.index')}}">Parking Area</a></li>
            <li class="breadcrumb-item active">Update & Edit Parking Area</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <form action="{{ route('parkingArea.update',$parkings->area_id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <fieldset>
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Update Parking Area</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
          <div class="card-body">
            <div class="form-group">
              <label for="id">Area ID:</label>
              <input type="text" name="area_id" value="{{ $parkings->area_id }}" id="id" class="form-control">
            </div>
            <div class="form-group">
              <label for="name">Area Name:</label>
              <input type="text" name="area_name" value="{{ $parkings->area_name }}" id="name" class="form-control">
            </div>
            <div>
              <label for="quantity">No of Parking</label>
              <input name="quantity" type="number" value="{{ $parkings->area_total_availability }}" class="form-control" id="qty" min="1">
            </div>
            <div>
              <label for="exampleInputFile">Area Image</label>
              <!-- <div class="input-group"> -->
              <div class="custom-file">
                <input type="file" accept="image/*" name="fileToUpload" value="{{ $parkings->area_image }}" id="inputImage" onchange="loadFile(event);" />
                <!-- <input type="file" accept="image/*" name="fileToUpload" id="inputImage" onchange="loadFile(event);"/> -->
                <!-- <input type="file" accept="image/*" name="fileToUpload" onchange="loadFile(event)" class="custom-file-input" id="exampleInputFile"> -->
                <!-- <label class="custom-file-label" accept="image/*" name="fileToUpload" onchange="loadFile(event)" for="exampleInputFile">Choose file</label> -->
              </div>
              
            </div>
            
            <div class="text-center">
              <input type="submit" value="Update" class="btn btn-primary">
            </div>

    </fieldset>
</div>
<!-- /.content -->
</form>



<!-- </body> -->
@endsection