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
                    <i class="fas fa-square" style="color: #389738;"></i> Available
                </span>
                <span class="mr-2">
                    <i class="fas fa-square" style="color: #cc1100;"></i> Occupied
                </span>
                <br>
                <span class="mr-2">
                    <i class="fas fa-square" style="color: #fdfd66;"></i> Pending
                </span>
                <span class="mr-4">
                    <i class="fas fa-square" style="color: #AEAEAE;"></i> Disabled
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


                <img src="{{Storage::url($parkings->area_image)}}" style="width: 600px; height:300px" class="center">

            </div>

            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 10%" class="">
                                Lot ID
                            </th>
                            <th style="width: 10%" class="text-center">
                                Status
                            </th>
                            <th style="width: 10%" class="text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lots as $area_id=>$lot)
                        <tr>
                            <td>
                                {{$area_id}}
                            </td>
                            <td class="project-state">
                                @if(isset($lot))
                                @if($lot['lot_status']=='approved')
                                <span class="badge badge-danger">Occupied</span>
                                @else
                                <span class="badge badge-warning">Pending</span>
                                @endif
                                @else
                                <span class="badge badge-success">Available</span>
                                @endif
                            </td>
                            <td class="project-actions text-center">
                                @if(isset($lot))
                                <button class="btn btn-primary btn-sm disabled">
                                    <i class="fas fa-folder">
                                    </i>
                                    Book
                                </button>
                                @else
                                <a class="btn btn-primary btn-sm" href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'',$area_id)]) }}">
                                    <i class="fas fa-folder">
                                    </i>
                                    Book
                                </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <!-- @for($i=1; $i<=$parkings->area_total_availability; $i++)
                            <tr>
                                <td>
                                    {{$parkings->area_id}}{{$i}}
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-success">Available</span>
                                </td>
                                <td class="project-actions text-center">
                                    <a class="btn btn-primary btn-sm" href="{{ route('bookParking.edit', [$parkings->area_id, $i]) }}">
                                        <i class="fas fa-folder">
                                        </i>
                                        Book
                                    </a>
                                    
                                </td>
                            </tr>
                    @endfor -->
                </table>

            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
</div>
@endsection