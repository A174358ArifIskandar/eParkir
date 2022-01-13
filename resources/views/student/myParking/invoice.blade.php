<?php $page = 'bookParking'; ?>
@extends('layouts.student')
@section('title','Invoice')

@section('content')
<!-- <body> -->
    <div class="content-wrapper" style="min-height: 2646.8px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
    <form action="" method="post" enctype="multipart/form-data">
            @csrf
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
            </div>


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                  <i class="fas fa-car"></i></i>  E-Parkir
                    <small class="float-right">Date: 17/12/2021</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
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
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>Abu Bakar</strong><br>
                    Rumah Banglo Besar Tepi Jalan<br>
                    Jalan Orang-Orang Kaya<br>
                    Phone: (601)-1234-1234<br>
                    Email: orangTampan@gmail.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice:</b>
                  <b>Order ID:</b> 4F3S8J<br>
                  <b>Payment Due:</b> 17/12/2021<br>
                  <b>Account:</b> 968-34567
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
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
                      <td></td>
                      <td>RM120.00</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <p class="text">Please Pay at the KPZ Office</p>
                </div>
                <!-- /.col -->
                  <div class="table-responsive">
                    <table class="table">
                      <tbody><tr>
                        <th>Total:</th>
                        <td>RM120.00</td>
                      </tr>
                    </tbody></table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </form>
    </section>
    <!-- /.content -->
  </div>
  @endsection