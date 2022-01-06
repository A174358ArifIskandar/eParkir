<?php $page = 'decline'; ?>
@extends('layouts.admin')
@section('title','Decline Request')

@section('content')
<!-- <body> -->
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

  <section class="content">
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
            <h3 class="card-title">Decline Request</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group">
                <!-- <label for="id">Book ID:</label> -->
                <input type="hidden" name="book_details_id" id="id" class="form-control">
              </div>
              <div class="form-group">
                        <label for="matric">Matric No:</label>
                        <input type="" value="" name="matric_no" id="matric" class="form-control" placeholder="" readonly>
                      </div>
                      <div class="form-group">
                        <label for="name">Booking Status:</label>
                        <input type="" value="" name="book_status" id="name" class="form-control" placeholder="" readonly>
                      </div>
                <label for="matric">Reason to decline request:</label>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio" required>
                          <label for="customRadio1" class="custom-control-label">Invalid license</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" required>
                          <label for="customRadio2" class="custom-control-label">Year 1 Student</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio3" name="customRadio" required>
                          <label for="customRadio3" class="custom-control-label">Invalid student card</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio4" name="customRadio" required>
                          <label for="customRadio4" class="custom-control-label">Others</label>
                        </div>
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