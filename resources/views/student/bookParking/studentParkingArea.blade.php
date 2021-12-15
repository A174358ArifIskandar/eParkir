@extends('layouts.student')
@section('title','Parking Area')

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

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <h5><i class="icon fas fa-check"></i> Success!</h5>
        <p>{{ $message }}</p>
      </div>
      @endif
      <div class="row">
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">List of @yield('title')</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                @foreach($parkings as $parking)
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-danger">
                    <div class="info-box-content">
                      <span class="info-box-text">{{$parking->area_name}}</span>
                      <span class="info-box-number">{{$parking->area_total_availability}} Parking Lots</span>
                      <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                      </div>
                      <span class="progress-description">
                        {{$parking->area_total_availability}} Parking Lots Available
                      </span>
                      <!-- <form action="{{route('parkingArea.destroy', $parking->area_id)}}" method="post">
                        @csrf
                        @method('delete')
                        <div class="btn-group">
                          <a href="{{route('parkingArea.show', $parking->area_id)}}" class="btn btn-default">
                            <i class="fas fa-info-circle"></i>
                          </a>
                          <a href="{{route('parkingArea.edit', $parking->area_id)}}" class="btn btn-default">
                            <i class="far fa-edit"></i>
                          </a>
                          <button type="submit" onclick="return confirm('Are you sure you want to delete this parking area?');" class="btn btn-default">
                            <i class="far fa-trash-alt"></i>
                          </button>
                        </div>

                      </form> -->
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                @endforeach
                <!-- </div> -->
                <a href="{{route('parkingArea.create')}}"><button type="button" class="btn btn-outline-secondary">

                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" fill="currentColor" color="#000000" class="bi bi-plus" viewBox="0 0 16 16">
                      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                    <span class="visually-hidden"></span>

                  </button></a>
              </div>
            </div>
          </div>
          <!-- </div> -->
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection