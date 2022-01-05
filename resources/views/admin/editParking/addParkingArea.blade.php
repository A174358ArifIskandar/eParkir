<?php $page = 'parkingArea';?>
@extends('layouts.admin')

@section('title','Add Parking Area')
@section('content')
<!-- <body> -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 style="color: black;" class="m-0">Add Parking Area</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('parkingArea.index')}}">Parking Area</a></li>
            <li class="breadcrumb-item active">Add Parking Area</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      @if($errors->any())
      <div class="alert alert-danger">
        <h5><i class="icon fas fa-ban"></i> Error!</h5>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </div>
      @endif
      <form action="{{ route('parkingArea.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset>
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Add Parking Area</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="id">Area ID:</label>
                      <input type="text" name="area_id" id="id" class="form-control" placeholder="Enter ID">
                    </div>
                    <div class="form-group">
                      <label for="name">Area Name:</label>
                      <input type="text" name="area_name" id="name" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label for="quantity">No of Parking</label>
                      <input name="quantity" type="number" class="form-control" id="qty" min="1">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputFile">Area Image</label>
                      <!-- <div class="input-group"> -->
                      <div class="custom-file">
                        <img src="" id='image_preview' class="img-fluid">
                        <input type="file" accept="image/*" name="fileToUpload" id="inputImage" onchange="loadFile(event);" />
                        <!-- <input type="file" accept="image/*" name="fileToUpload" id="inputImage" onchange="loadFile(event);"/> -->
                        <!-- <input type="file" accept="image/*" name="fileToUpload" onchange="loadFile(event)" class="custom-file-input" id="exampleInputFile"> -->
                        <!-- <label class="custom-file-label" accept="image/*" name="fileToUpload" onchange="loadFile(event)" for="exampleInputFile">Choose file</label> -->
                      </div>
                      <!-- <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div> -->
                    </div>
                  </div>
                </div>
                <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div> -->
                <!-- /.card-body -->

                <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
     
        <div style="color: black;" style="text-align: center;">
            <h2>Add Parking Area</h2>
        </div>
    <div>
        <label for="id" class="mid">Area ID:</label>
        <input type="text" name="area_id" id="id" value="" tabindex="1">
    </div>
  
    <div>
        <label for="name" class="mid">Area Name:</label>
        <input type="text" name="area_name" id="name" value="" tabindex="2">
    </div>

    <div>
        <label for="quantity" class="mid">No of Parking</label>
            <input name="quantity" type="number" class="form-control" id="qty" min="1">
      </div> -->

                <!-- <div class="col-md-4" style="height: 100%" style="vertical-align: auto;">
                <div class="thumbnail">
                    <img src="images/no-photo.jpg" id="productPhoto" alt="Product Image" style="width: 100%;"> 
                    <div class="caption text-center">
                         <h3 id="productImageTitle" style="word-break: break-all;">Product Image</h3>
                         <p>
                            <label class="btn">
                                <input type="file" accept="image/*" name="fileToUpload" id="inputImage" onchange="loadFile(event);"/>
                                <span style="color: white" class="glyphicon glyphicon-cloud" aria-hidden="true"></span> Browse 
                            </label>
                        </p>
                    </div>
                </div>
            </div> -->

                <div class="text-center">
                  <input type="submit" value="Submit" class="btn btn-primary">
                </div>

        </fieldset>
    </div>
    <!-- /.content -->
    </form>

  </section>
</div>
<!-- </body> -->
@endsection
@push('scripts')
<script type="text/javascript">
  function readURL(input, previewId) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $(previewId).css('background-image', 'url(' + e.target.result + ')');
        $(previewId).hide();
        $(previewId).fadeIn(650);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function() {
      var output = document.getElementById('image_preview');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
    document.getElementById('image_preview').innerText = event.target.files[0]['name'];
  };
  // $(document).ready(function(){
  //     $('#inputImage').change(function(){
  //         readURL(this,'#image_preview')
  //     })
  // })
</script>
@endpush