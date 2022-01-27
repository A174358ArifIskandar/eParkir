<?php $page = 'parkingArea'; ?>
@extends('layouts.student')
@section('title','Book Parking')
@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 style="color: black;" class="m-0">Book Parking</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('parkingArea.index')}}">Parking Area</a></li>
            <li class="breadcrumb-item"><a href="{{route('parkingArea.show', $parkings->area_id)}}">{{$parkings->area_name}}</a></li>
            <li class="breadcrumb-item active">Book Parking</li>
          </ol>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="col-md-7 offset-md-2">
        @if($errors->any())
        <div class="alert alert-danger">
          <h5><i class="icon fas fa-ban"></i> Error!</h5>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </div>
        @endif
        <form action="{{ route('bookParking.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <fieldset>
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Book Parking</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
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
                  <input type="" value="{{ $parkings->area_id }}" name="area_id" id="area_id" class="form-control" placeholder="" readonly>
                </div>
                <div class="form-group">
                  <label for="lot_id">Lot ID:</label>
                  <input type="" value="{{ $parkings->area_id }}{{ $lot }}" name="lot_id" id="lot_id" class="form-control" placeholder="" readonly>
                </div>
                <div class="form-group">
                  <input type="hidden" name="lot_status" value="pending" id="id" class="form-control">
                </div>
                <div>
                  <label for="exampleInputFile">License Card</label>
                  <div class="text-center">
                    <img class="img-fluid" src="" id='image_preview'>
                  </div><br>
                  <div class="custom-file">
                    <input type="file" accept="image/*" name="fileToUpload" id="inputImage" onchange="loadFile(event);" />
                  </div>
                </div>
                <div class="text-center">
                  <input type="submit" value="Submit" class="btn btn-primary">
                </div>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </section>
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