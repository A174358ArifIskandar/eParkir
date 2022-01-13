<?php $page = 'home'; ?>
@extends('layouts.student')
@section('title','Dashboard')
@section('content')
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
  <section class="content">
    <div class="row">
      <div class="col-md-3 offset-md-1">
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
            </div>
            <h3 class="profile-username text-center">Hanis Batrisyia</h3>
            <p class="text-muted text-center">A175218</p>
            <hr>
            <p><i class="far fa-building"></i> Kolej: Kolej Pendeta Za'ba</p>
            <p><i class="fas fa-book mr-1"></i> Fakulti: Teknologi & Sains Maklumat</p>
            <p><i class="far fa-envelope-open"></i> Email: A175218@siswa.ukm.edu.my</p>
            <p><i class="fas fa-phone-alt mr-1"></i> No Tel: 019-3883177</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Parking Area</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
              <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                  <div class=""></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                  <div class=""></div>
                </div>
              </div>
              <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 541px;" class="chartjs-render-monitor" width="541" height="250"></canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
      
      
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">My Parking</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table">
              <tbody>

                <tr>
                  <td>Parking Area</td>
                  <td>Blok {{$myParking->area_id}}</td>
                  <td class="text-right py-0 align-middle">

                  </td>
                </tr>
                <tr>
                  <td>Lot ID</td>
                  <td>{{$myParking->lot_id}}</td>
                  <td class="text-right py-0 align-middle">

                  </td>
                </tr>

                <tr>
                  <td>Plate No</td>
                  <td>{{$myParking->plate_no}}</td>
                  <td class="text-right py-0 align-middle">

                  </td>

                </tr>

                <tr>
                  <td>Status</td>
                  <td>@if($myParking['lot_status']=='approved')
                    <span class="badge badge-success">Approved</span>
                    @else
                    <span class="badge badge-warning">Pending</span>
                    @endif
                  </td>
                  <td class="text-right py-0 align-middle">
                  </td>

                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </section>
</div>
@endsection