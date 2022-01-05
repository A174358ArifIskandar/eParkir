<?php $page = 'parkingArea';?>
@extends('layouts.admin')
@section('title','Edit Parking Area')
@section('content')
<!-- <body> -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="color: black;" class="m-0">Edit Parking Area</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('parkingArea.index')}}">Parking Area</a></li>
                        <li class="breadcrumb-item active">Edit Parking Area</li>
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

            <div class="row">

                <div class="col-md-8">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Edit Parking Area</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('parkingArea.update',$parkings->area_id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="id">Area ID:</label>
                                    <input type="text" name="area_id" value="{{ $parkings->area_id }}" id="id" class="form-control" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">Area Name:</label>
                                    <input type="text" name="area_name" value="{{ $parkings->area_name }}" id="name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="quantity">No of Parking</label>
                                    <input name="quantity" type="number" value="{{ $parkings->area_total_availability }}" class="form-control" id="qty" min="1">
                                </div>

                                <div class="form-group">

                                    <label for="exampleInputFile">Area Image</label>
                                    <!-- <div class="input-group"> -->

                                    <div class="custom-file">

                                        <input type="file" accept="image/*" name="fileToUpload" value="{{ $parkings->area_image }}" id="inputImage" onchange="loadFile(event)"/>
                                        <!-- <input type="file" accept="image/*" name="fileToUpload" id="inputImage" onchange="loadFile(event);"/> -->
                                        <!-- <input type="file" accept="image/*" name="fileToUpload" onchange="loadFile(event)" class="custom-file-input" id="exampleInputFile"> -->
                                        <!-- <label class="custom-file-label" accept="image/*" name="fileToUpload" onchange="loadFile(event)" for="exampleInputFile">Choose file</label> -->
                                    </div>

                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Update" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Image Preview</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <img src="{{Storage::url($parkings->area_image)}}" id='image_preview' class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    var loadFile = function (event) {
            var reader = new FileReader();
            reader.onload = function () {
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