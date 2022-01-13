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

  <div class="col-md-7 offset-md-2">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <h5><i class="icon fas fa-check"></i> Success!</h5>
      <p>{{ $message }}</p>
    </div>
    @endif
    <div class="card card-primary card-outline">
      <div class="card-body box-profile">
        <div class="text-center">
          <img class="img-fluid img-circle" src="{{Storage::url($student->student_image)}}" style="width: 180px; height:180px" id='image_preview' alt="User profile picture">
        </div>
        <br>
        <form class="form-horizontal" action="{{ route('profile.update',$student->matric_no) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <div class="custom-file text-center">
              <input type="file" accept="image/*" name="fileToUpload" value="{{$student->student_image}}" id="inputImage" onchange="loadFile(event)" />
            </div>
          </div>
          <div class="form-group row">
            <label for="inputName" class="col-sm-3 col-form-label">Matric Number</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" name="id" id="inputMatricNo" value="{{$student->matric_no}}" placeholder="Matric Number" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="inputName" value="{{$student->user->user_name}}" placeholder="Name" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputName2" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputemail" value="{{$student->user->user_email}}" placeholder="Email" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputName2" class="col-sm-3 col-form-label">Alternative Email</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputemail" name="alt_email" value="{{$student->alt_email}}" placeholder="Email">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputName2" class="col-sm-3 col-form-label">Faculty</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputemail" value="{{$student->student_faculty}}" placeholder="Faculty" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputName2" class="col-sm-3 col-form-label">Student Session</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputemail" value="{{$student->student_session}}" placeholder="Student Session" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputSkills" class="col-sm-3 col-form-label">Phone Number</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputSkills" name="user_phone" value="{{$student->user->user_phone}}" placeholder="+601-####-####">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputName2" class="col-sm-3 col-form-label">Residential College</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputemail" value="{{$student->college_name}}" placeholder="Residential College" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputName2" class="col-sm-3 col-form-label">Room Number</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputemail" value="{{$student->room_no}}" placeholder="Room Number" readonly>
            </div>
          </div>
          <div class="text-center">
            <input type="submit" value="Update" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
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