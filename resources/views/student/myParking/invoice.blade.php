<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Invoice</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Theme style -->
  <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini">
  <!-- <div class="content-wrapper" style="min-height: 2646.8px;"> -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Invoice</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <form action="" method="post" enctype="multipart/form-data">
      @csrf
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="invoice p-3 mb-3">
              <div class="row">
                <div class="col-12">
                  <h4>
                    <div class="text-center">
                    <img src="{{ asset('images/logoparkirword1.png') }}" class="brand-image">
                    </div>
                    
                    <small class="float-right">Date: {{$current_date_time}}</small>
                  </h4>
                </div>
              </div>
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>E-Parkir KPZ.</strong><br>
                    Kolej Pendeta Za’ba<br>
                    Universiti Kebangsaan Malaysia<br>
                    43600 Bangi, Selangor<br>
                    Tel: 03 8921 6851 | Faks: 03 8921 6846<br>
                    e-Mel: kpz@ukm.edu.my; cc: aslong@ukm.edu.my
                  </address>
                </div>
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>{{$student->user->user_name}}</strong><br>
                    {{$student->matric_no}}<br>
                    Phone: {{$student->user->user_phone}}<br>
                    Email: {{$student->user->user_email}}
                  </address>
                </div>
                <div class="col-sm-4 invoice-col">
                  <b>Parking Area:</b> Blok {{$myParking->area_id}}<br>
                  <b>Parking Lot:</b> {{$myParking->lot_id}}<br>
                </div>
              </div>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Booking Id</th>
                        <th>Subtotal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Parking KPZ</td>
                        <td>{{$myParking->book_id}}</td>
                        <td>RM120.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <p class="text">Please Pay at the KPZ Office</p>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <th>Total:</th>
                        <td>RM120.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="text-center">
                This page is auto-generated and no signature required.
              </div>
            </div>
            <div class="row no-print">
              <div class="col-12 text-center">
                <a href="javascript:window.print();" rel="noopener" class="btn btn-default"><i class="fas fa-print text-center"></i> Print</a>
              </div>
            </div>
          </div>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </form>
  </section>
  <!-- </div> -->
</body>