@extends('layouts.admin')
@section('title','Edit Parking')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@section('content')

<style>
  .button {
  border: none;
  color: white;
  padding: 30px 35px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 7px 9px;
  cursor: pointer;
  }

  .button1 {background-color: #CD0046;} 
  
  .container1 { 
  height: 500px;
  position: relative; 
  }

  .center {
   margin: 0;
   position: absolute;
   top: 50%;
   left: 50%;
   -ms-transform: translate(-50%, -50%);
   transform: translate(-50%, -50%);
  }

</style>
<!-- <body> -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Parking</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Parking</li>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Parking Area</h3>
              </div>
              <div class="container">
                <br>
                      <div class="container1" style="border:3px solid black;">
                      <br>
                      <a href="editParkingLot"><button class="button button1">BLOK A</button></a>
                      <button class="button button1">BLOK C</a></button>
                      <button class="button button1">BLOK F</a></button>
                      <button class="button button1">DATARAN DINAMIS</a></button>
                      
                      <a href="addParkingArea"><button type="button" class="btn btn-outline-secondary">
                    
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" fill="currentColor" color="#000000" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                      </svg>
                        <span class="visually-hidden"></span>
                        
                      </button></a>
                    </div>
                  </div>
                  </div>
                  </div>
            
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    

<!-- </body> -->
@endsection
