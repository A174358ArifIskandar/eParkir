  <?php $page = 'home'; ?>
  @extends('layouts.student')
  @section('title','Dashboard')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="col-md-3 offset-md-1">
      <div class="card card-primary card-outline">
      <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                  </div>
                  <h3 class="profile-username text-center">Hanis Batrisyia</h3>
                  <p class="text-muted text-center">A175218</p>                
                  <strong><i class="fas fa-book mr-1"></i> Fakulti</strong>
                  <p class="text-muted">
                    Teknologi & Sains Maklumat</p>
                  <hr>
                  <strong><i class="far fa-envelope-open"></i> Email</strong>
                  <p class="text-muted">A175218@siswa.ukm.edu.my</p>
                  <hr>
                  <strong><i class="fas fa-phone-alt mr-1"></i> No Tel</strong>
                  <p class="text-muted">
                    019-3883177
                  </p>
                  <hr>
                </div>
                </div>   
      </div>
    
      <!-- /.content -->
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-primary">
                <div class="card-header">
                  <a href="{{route('parkingArea.index')}}"><h3 class="card-title">Parking Area</h3></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <div class="row">
                @foreach($parkings as $parking)  
                <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-success">
                <div class="info-box-content">
                  <span class="info-box-text">{{$parking->area_name}}</span>
                  <span class="info-box-number">{{$parking->area_total_availability}} Parking Lots</span>
                  <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <span class="progress-description">{{$parking->area_total_availability}} Parking Lots Available</span>
                  </div>
                  <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                  </div>
                @endforeach
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      <!-- /.content -->
    </div>
    </section>  
  </div>
    <!-- /.content-wrapper -->
  @endsection