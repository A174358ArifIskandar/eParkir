@extends('layouts.admin')
@section('title','Display Parking')
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
    <!-- Default box -->
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
                @for($i=1; $i<=$parkings->area_total_availability; $i++)
                    <tr>
                        <td>
                            {{$parkings->area_id}}{{$i}}
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Available</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
                @endfor
            </table>

        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection