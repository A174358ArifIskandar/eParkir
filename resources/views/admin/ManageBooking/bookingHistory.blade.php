<?php $page = 'history'; ?>
@extends('layouts.admin')
@section('title','Booking History')

@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 style="color: black;" class="m-0">Booking History</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">Booking History</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Booking Details</h3>
      </div>
      <!-- /.card-header -->
      <!-- Default box -->
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th style="width: 10%" class="">
                Book Details ID
              </th>
              <th style="width: 10%" class="text-center">
                Name
              </th>
              <th style="width: 10%" class="text-center">
                Status
              </th>
              <th style="width: 10%" class="text-center">
                Description
              </th>
              <th style="width: 10%" class="text-center">
                Date
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($histories as $history)
            <tr>
              <td style="width: 10%" class="">
                {{$history->book_details_id}}
              </td>
              <td style="width: 10%" class="text-center">
                {{$history->user->user_name}}
              </td>
              <td class="project-state">
                @if($history['book_status']=='approved')
                <span class="badge badge-success">Approved</span>
                @else
                <span class="badge badge-danger">Declined</span>
                @endif
              </td>
              <td style="width: 10%" class="text-center">
                {{$history->description}}
              </td>
              <td style="width: 10%" class="text-center">
                {{$history->updated_at}}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <!-- <body> -->
    <!-- /.content -->
  </section>
</div>
<!-- </body> -->
@endsection