<?php $page = 'parkingStatus'; ?>
@extends('layouts.admin')
@section('title','Booking Request')
@section('content')
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

    <!-- Default box -->
    <section class="content">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">List of Booking</h3>
      </div>

            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 10%" class="">
                                Book ID
                            </th>
                            <th style="width: 10%" class="text-center">
                                Matric No
                            </th>
                            <th style="width: 10%" class="text-center">
                                Plate No
                            </th>
                            <th style="width: 10%" class="text-center">
                                Parking Area
                            </th>
                            <th style="width: 10%" class="text-center">
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
                        @foreach($bookings as $booking)
                        <tr>
                            <td style="width: 10%" class="">
                                {{$booking->book_id}}
                            </td>
                            <td style="width: 10%" class="text-center">
                                {{$booking->matric_no}}
                            </td>
                            <td style="width: 10%" class="text-center">
                                {{$booking->plate_no}}
                            </td>
                            <td style="width: 10%" class="text-center">
                                Blok {{$booking->area_id}}
                            </td>
                            <td style="width: 10%" class="text-center">
                                {{$booking->lot_id}}
                            </td>
                            <td class="project-state">
                                <span class="badge badge-warning">{{$booking->lot_status}}</span>
                            </td>
                            <td style="width: 10%" class="text-center">
                                <a class="btn btn-primary btn-sm" href="{{route('parkingStatus.show', $booking->book_id)}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <!-- <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a> -->
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>

            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</div>
@endsection