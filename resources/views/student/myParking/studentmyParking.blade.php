@extends('layouts.student')
@section('title','My Parking')

@section('content')
<!-- <body> -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="color: black;" class="m-0">My Parking</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">My Parking</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset>
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">My Parking</h3>
                </div>
                <!-- /.card-header -->

                <!-- Default box -->
                <section class="content">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>

                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 10%" class="text-center">
                                            Parking Area
                                        </th>
                                        <th style="width: 10%" class="text-center">
                                            Lot ID
                                        </th>
                                        <th style="width: 10%" class="text-center">
                                            Booking ID
                                        </th>
                                        <th style="width: 10%" class="text-center">
                                            Matric No
                                        </th>
                                        <th style="width: 10%" class="text-center">
                                            Plate No
                                        </th>
                                        <th style="width: 10%" class="text-center">
                                            Date
                                        </th>
                                        <th style="width: 10%" class="text-center">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td style="width: 10%" class="text-center">
                                        {{ $MyParking->area_id }}
                                        </td>
                                        <td style="width: 10%" class="text-center">
                                            A01
                                        </td>
                                        <td style="width: 10%" class="text-center">
                                            B001
                                        </td>
                                        <td style="width: 10%" class="text-center">
                                            A123456
                                        </td>
                                        <td style="width: 10%" class="text-center">
                                            MET 44
                                        </td>
                                        <td style="width: 10%" class="text-center">
                                            1/1/2022
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-warning">Pending</span>
                                        </td>

                                    </tr>
                                </tbody>

                            </table>

                        </div>
                    </div>
        </fieldset>
        <br>
        <fieldset>
            <div class="card card-info">
                <div class="card-body p-2">
                    <div class="row justify-content-center">
                        <div class="col-5 table-responsive">
                            <table class="table table-bordered table-striped projects">
                                <br>
                                <h4>Invoice</h4>
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Invoice No</th>
                                        <th>Amount (RM)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>13/1/2022</td>
                                        <td>INP 19178</td>
                                        <td>100.00</td>
                                    </tr>

                                </tbody>
                            </table>
                            <a href="/invoice" class="btn btn-primary float-right" style="margin-right: 0px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-receipt-cutoff" viewBox="1 4 16 11" style="margin-right: 2px;">
                                    <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                                    <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z" />
                                </svg>
                                 Generate Invoice
                            </a>
                        </div>

                        <!-- /.col -->
                    </div>

                </div><br>
            </div>
        </fieldset>

</div>




<!-- </body> -->
@endsection