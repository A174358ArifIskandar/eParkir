@extends('layouts.admin')

@section('title','Add Parking Area')
@section('content')
<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
<style>
     body {
  background-color: #efefef;
  color: white;
  font-size: 100%;
  font-family: 'PT Sans Caption', sans-serif;
  font-weight: 400;
}

form {
  border-top: 5px solid ;
  width: 552px;
  margin: 40px auto;
}

fieldset {
  margin: auto;
  width: auto;
  height: auto;
  border: 1px solid #e5e5e5;
  border-top: 0px solid #e5e5e5;
  background: #fdfdfd;
  padding: 40px;
}

form div {
  padding: 0 0 40px 0;
}

form label {
  float: left;
  width: 200px;
  font-size: 1em;
  color: #111;
}

form label.mid {
  line-height: 40px;
}

form input, select {
 /* background: #01949A; */
	border: 2px solid #fff;
  /* border-color: #01949A; */
	color: black;
	font-family: 'PT Sans Caption', sans-serif;
	font-size: 1em;
	font-weight: 400;
	height: 40px;
	margin: 0;
	padding: 0 10px;
	width: auto;
 vertical-align: middle;
}

form input:hover, form select:hover, form textarea:hover {
	border: 2px solid #CD0046;
}

form input:focus, form select:focus, form textarea:focus {
  border-color: #CD0046;
  outline: none;
}

form select {
  float: left;
  margin-bottom: 40px;
  appearance: none;
  width: 260px;
  border-radius: 0;
}

form input.button {
  width: 270px;
  height: 40px;
  border: 0px solid #fff;
}


form input.submit { 
  float: left;
  margin-left: 200px;
  width: 100px;
  height: 40px;
  color: #fff;
}

form input.submit:hover { 
 background: #CD0046;
	/* background: -webkit-linear-gradient(#CD0046, #01caa7);	
	background: -moz-linear-gradient(#CD0046, #01caa7);	
	background: -o-linear-gradient(#CD0046, #01caa7);	
	background: -ms-linear-gradient(#CD0046, #01caa7);	
	background: linear-gradient(#CD0046, #01caa7);	 */
} 
</style>

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
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item"><a href="editParkingArea">Edit Parking</a></li>
              <li class="breadcrumb-item active">Add Parking Area</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
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
                  <div class="form-group">
                    <label for="id">Area ID:</label>
                    <input type="text" name="area_id" id="id" class="form-control" placeholder="Enter ID" >
                  </div>
                  <div class="form-group">
                    <label for="name" >Area Name:</label>
                    <input type="text" name="area_name" id="name" class="form-control" placeholder="Enter Name">
                  </div>
                  <div>
                    <label for="quantity">No of Parking</label>
                    <input name="quantity" type="number" class="form-control" id="qty" min="1">
                  </div>
                  <div>
                    <label for="exampleInputFile">Area Image</label>
                    <!-- <div class="input-group"> -->
                      <div class="custom-file" >
                        <input type="file" accept="image/*" name="fileToUpload" id="inputImage" onchange="loadFile(event);"/>
                        <!-- <input type="file" accept="image/*" name="fileToUpload" id="inputImage" onchange="loadFile(event);"/> -->
                        <!-- <input type="file" accept="image/*" name="fileToUpload" onchange="loadFile(event)" class="custom-file-input" id="exampleInputFile"> -->
                        <!-- <label class="custom-file-label" accept="image/*" name="fileToUpload" onchange="loadFile(event)" for="exampleInputFile">Choose file</label> -->
                      </div>
                      <!-- <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div> -->
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
                    <!-- <img src="images/no-photo.jpg" id="productPhoto" alt="Product Image" style="width: 100%;"> 
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

    <div style="align-content: right;">
        <input style="background-color: #CD0046;" type="submit" value="Submit" class="submit">
    </div>
      
    </fieldset>
    </div>
    <!-- /.content -->
</form>

    
    
<!-- </body> -->
@endsection