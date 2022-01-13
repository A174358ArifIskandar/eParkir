<?php $page = 'profile'; ?>
@extends('layouts.student')
@section('title','My Profile')
@section('content')
<!-- <body> -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
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
  <div class="col-md-6 offset-md-3">
    <div class="card card-primary card-outline">
      <div class="card-body box-profile">
        <div class="text-center">
          <img class="profile-user-img img-fluid img-circle" src="https://lh3.googleusercontent.com/ogw/ADea4I7C7F9mSg-v9Ior-s25WHMHkrJv6drbPMmSdrwK9Q=s83-c-mo" alt="User profile picture">
          <div class="form-group">
            <div class="custom-file">
              <input type="file" accept="image/*" name="fileToUpload" value="" id="inputImage" onchange="loadFile(event)" />
            </div>
          </div>
        </div>
        <br>
        <form class="form-horizontal">
          <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Matric Number</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputMatricNo" value="A174358" placeholder="Matric Number" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputName" value="Muhammad Arif Iskandar" placeholder="Name" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputName2" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputemail" value="a174358@siswa.ukm.edu.my" placeholder="Email" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputName2" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputemail" value="arif15iskandar@gmail.com" placeholder="Email">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputName2" class="col-sm-2 col-form-label">Faculty</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputemail" value="Teknologi & Sains Maklumat" placeholder="Faculty" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputName2" class="col-sm-2 col-form-label">Student Session</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputemail" value="2019/2020" placeholder="Student Session" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputSkills" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputSkills" value="+6019-3243235" placeholder="+601-####-####">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputName2" class="col-sm-2 col-form-label">Residential College</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputemail" value="Kolej Pendeta Za'ba" placeholder="Residential College" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputName2" class="col-sm-2 col-form-label">Room Number</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputemail" value="G012" placeholder="Room Number" readonly>
            </div>
          </div>
          <div class="form-group row">
            <a href="#" class="btn btn-primary btn-block"><b>Edit</b></a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection