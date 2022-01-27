<?php $page = 'parkingArea'; ?>
@extends('layouts.student')
@section('title','View Parking')
@section('content')
<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }

    .lot:hover {
        opacity: 0.8;
    }
</style>

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
                        <li class="breadcrumb-item"><a href="{{route('parkingArea.index')}}">Parking Area</a></li>
                        <li class="breadcrumb-item active">{{$parkings->area_name}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Default box -->
    <section class="content">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">{{$parkings->area_name}}</h3>
            </div>
            <br>
            <div class="d-flex flex-row justify-content-end">
                <span class="mr-2">
                    <i class="fas fa-square text-success" ></i> Available
                </span>
                <span class="mr-2">
                    <i class="fas fa-square" style="color:#cc1100;" ></i> Occupied
                </span>
                <br>
                <span class="mr-2">
                    <i class="fas fa-square" style="color:#fde52f;"></i> Pending
                </span>
                <span class="mr-4">
                    <i class="fas fa-square text-gray" ></i> Unavailable
                </span>
            </div>
            <br>
            <div class="container-fluid">

                @if($parkings->area_id=="A")
                @include('parking.blokA')
                @elseif($parkings->area_id=="F")
                @include('parking.blokF')
                @elseif($parkings->area_id=="D")
                @include('parking.blokD')
                @elseif($parkings->area_id=="C")
                @include('parking.blokC')
                @endif

            </div>

            

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
</div>
@endsection