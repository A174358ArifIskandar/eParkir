<?php $page = 'disable'; ?>
@extends('layouts.admin')
@section('title','Disable Parking')
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
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Parking Area</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="id" id="inputMatricNo" value="" placeholder=" " readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Lot ID</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputName" value="" placeholder="" readonly>
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <text for="question">Are you sure you want to disable this parking lot?</text>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Yes" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection