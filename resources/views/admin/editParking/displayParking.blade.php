<?php $page = 'parkingArea'; ?>
@extends('layouts.admin')
@section('title','View Parking')
@section('content')
<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
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
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Default box -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{$parkings->area_name}}</h3>
            </div>
            <div class="container-fluid">
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
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <!-- @for($i=1; $i<=$parkings->area_total_availability; $i++)
                            <tr>
                                <td>
                                    {{$parkings->area_id}}{{$i}}
                                </td>
                                <td>
                                    <span class="badge badge-success">Available</span>
                                </td>
                                <td class="project-actions text-right center">
                                    <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                </td>
                            </tr>
                    </tbody>
                    @endfor -->

                </table>

            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</div>
@endsection