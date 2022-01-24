<?php $page = 'parkingArea'; ?>
@extends('layouts.student')
@section('title','View Parking')
@section('content')
<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }

    .lot:hover {
        fill: lightgreen;
        opacity: 1;
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
                        <li class="breadcrumb-item active">{{$parkings->area_name}}</li>
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
                <svg height="210mm" width="297mm" viewBox="0 0 210 297" version="1.1" id="svg5" inkscape:version="1.1.1 (3bf5ae0d25, 2021-09-20)" sodipodi:docname="MapBlokA.svg" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                    <sodipodi:namedview id="namedview7" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" inkscape:document-units="mm" showgrid="false" inkscape:zoom="1.4289282" inkscape:rotation="90" inkscape:cx="99.725097" inkscape:cy="651.88721" inkscape:window-width="1920" inkscape:window-height="991" inkscape:window-x="-9" inkscape:window-y="-9" inkscape:window-maximized="1" inkscape:current-layer="layer1">
                        <inkscape:grid type="xygrid" id="grid9" />
                    </sodipodi:namedview>
                    <defs id="defs2">
                        <marker style="overflow:visible;" id="Arrow2Lend" refX="0.0" refY="0.0" orient="auto" inkscape:stockid="Arrow2Lend" inkscape:isstock="true">
                            <path transform="scale(1.1) rotate(180) translate(1,0)" d="M 8.7185878,4.0337352 L -2.2072895,0.016013256 L 8.7185884,-4.0017078 C 6.9730900,-1.6296469 6.9831476,1.6157441 8.7185878,4.0337352 z " style="stroke:context-stroke;fill-rule:evenodd;fill:context-stroke;stroke-width:0.62500000;stroke-linejoin:round;" id="path1918" />
                        </marker>
                    </defs>
                    <g stroke="#000000" stroke-width="0.23665" fill="#e6e6e6" fill-rule="evenodd">
                        <rect class="lot" id="rect33" height="42.333332" width="21.166676" y="5.2916665" x="269.875" >
                            <title>A1</title>
                        </rect>
                        <rect class="lot" id="rect33-3" height="42.333332" width="21.166666" y="5.2916665" x="248.70833" />
                        <rect class="lot" id="rect33-8" height="42.333332" width="21.166666" y="5.291667" x="227.54167" />
                        <rect class="lot" id="rect33-8-7" height="42.333332" width="21.16666" y="5.291667" x="206.375" />
                        <rect class="lot" id="rect33-8-2" height="42.333332" width="21.166666" y="5.2916679" x="185.20834" />
                        <rect class="lot" id="rect33-8-8" height="42.333332" width="21.166666" y="5.2916679" x="164.04167" />
                        <rect class="lot" id="rect33-8-20" height="42.333332" width="21.166676" y="5.2916679" x="142.875" />
                        <rect class="lot" id="rect33-8-83" height="42.333332" width="21.166662" y="5.2916679" x="121.70833" />
                        <rect class="lot" id="rect33-8-1" height="42.333332" width="21.166674" y="5.2916679" x="100.54166" />
                        <rect class="lot" id="rect33-8-28" height="42.333332" width="21.166668" y="5.2916679" x="79.374985" />
                        <rect class="lot" id="rect33-8-28-9" height="42.333332" width="21.166668" y="63.500011" x="100.54167" />
                        <rect class="lot" id="rect33-8-28-9-0" height="42.333332" width="21.166668" y="63.500011" x="121.70834" />
                        <rect class="lot" id="rect33-8-28-9-4" height="42.333332" width="21.166668" y="63.500008" x="142.875" />
                        <rect class="lot" id="rect33-8-28-9-7" height="42.333332" width="21.166668" y="63.499989" x="164.04167" />
                        <rect class="lot" id="rect33-8-28-9-3" height="42.333332" width="21.166668" y="63.499992" x="185.20834" />
                        <rect class="lot" id="rect33-8-28-9-36" height="42.333332" width="21.166668" y="63.499996" x="206.37502" />
                        <rect class="lot" id="rect33-8-28-9-37" height="42.333332" width="21.166668" y="63.499996" x="227.54166" />
                        <rect class="lot" id="rect33-8-28-9-00" height="42.333332" width="21.166668" y="63.500004" x="248.70833" />
                        <rect class="lot" id="rect33-8-28-9-9" height="42.333332" width="21.166668" y="63.500004" x="269.875" />
                        <rect class="lot" id="rect33-8-28-9-9-3" height="42.333332" width="21.166668" y="105.83334" x="269.875" />
                        <rect class="lot" id="rect33-8-28-9-9-1" height="42.333332" width="21.166668" y="105.83334" x="248.70833" />
                        <rect class="lot" id="rect33-8-28-9-9-6" height="42.333332" width="21.166668" y="105.83334" x="227.54167" />
                        <rect class="lot" id="rect33-8-28-9-9-63" height="42.333332" width="21.166668" y="105.83333" x="206.37502" />
                        <rect class="lot" id="rect33-8-28-9-9-632" height="42.333332" width="21.166668" y="105.83333" x="185.20834" />
                        <rect class="lot" id="rect33-8-28-9-9-38" height="42.333332" width="21.166668" y="105.83334" x="164.04167" />
                        <rect class="lot" id="rect33-8-28-9-9-60" height="42.333332" width="21.166668" y="105.83334" x="142.875" />
                        <rect class="lot" id="rect33-8-28-9-9-2" height="42.333332" width="21.166668" y="105.83334" x="121.70833" />
                        <rect class="lot" id="rect33-8-28-9-9-7" height="42.333332" width="21.166668" y="105.83334" x="100.54166" />
                        <rect class="lot" id="rect33-8-28-9-9-5" height="42.333332" width="21.166668" y="164.04167" x="79.375" />
                        <rect class="lot" id="rect33-8-28-9-9-5-2" height="42.333332" width="21.166668" y="164.04167" x="100.54167" />
                        <rect class="lot" id="rect33-8-28-9-9-5-3" height="42.333332" width="21.166668" y="164.04167" x="121.70834" />
                        <rect class="lot" id="rect33-8-28-9-9-5-6" height="42.333332" width="21.166668" y="164.04167" x="142.875" />
                        <rect class="lot" id="rect33-8-28-9-9-5-0" height="42.333332" width="21.166668" y="164.04167" x="164.04167" />
                        <rect class="lot" id="rect33-8-28-9-9-5-5" height="42.333332" width="21.166668" y="164.04167" x="185.20833" />
                        <rect class="lot" id="rect33-8-28-9-9-5-24" height="42.333332" width="21.166668" y="164.04167" x="206.375" />
                        <rect class="lot" id="rect33-8-28-9-9-5-1" height="42.333332" width="21.166668" y="164.04167" x="227.54167" />
                        <rect class="lot" id="rect33-8-28-9-9-5-01" height="42.333332" width="21.166668" y="164.04167" x="248.70833" />
                        <rect class="lot" id="rect33-8-28-9-9-5-242" height="42.333332" width="21.166668" y="164.04167" x="269.875" />
                        <rect class="lot" id="rect33-8-28-9-9-5-57" height="42.333332" width="21.166668" y="5.2916665" x="-148.16667" transform="rotate(270)" />
                        <rect class="lot" id="rect33-8-28-9-9-5-57-6" height="42.333332" width="21.166668" y="5.2916665" x="-127.00001" transform="rotate(270)" />
                        <rect class="lot" id="rect33-8-28-9-9-5-57-9" height="42.333332" width="21.166668" y="5.2916665" x="-105.83334" transform="rotate(270)" />
                        <rect class="lot" id="rect33-8-28-9-9-5-57-1" height="42.333332" width="21.166668" y="5.2916665" x="-84.666664" transform="rotate(270)" />
                        <path style="fill:none;stroke:#000000;stroke-width:0.265;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;marker-end:url(#Arrow2Lend)" d="m 10.583334,60.854167 c 37.041666,0 37.041666,0 37.041666,0" id="path1895" />
                        <text xml:space="preserve" style="font-style:normal;font-weight:normal;font-size:8.1754px;line-height:1.25;font-family:sans-serif;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.204385" x="14.676329" y="45.800671" id="text5833" transform="scale(0.87569592,1.1419489)">
                            <tspan sodipodi:role="line" id="tspan5831" style="stroke-width:0.204385" x="14.676329" y="45.800671">Entrance</tspan>
                        </text>
                    </g>
                </svg>
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
                                @if(isset($lot))
                                <button class="btn btn-primary btn-sm disabled">
                                    <i class="fas fa-folder">
                                    </i>
                                    Book
                                </button>
                                @else
                                <a class="btn btn-primary btn-sm" href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'',$area_id)]) }}">
                                    <i class="fas fa-folder">
                                    </i>
                                    Book
                                </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <!-- @for($i=1; $i<=$parkings->area_total_availability; $i++)
                            <tr>
                                <td>
                                    {{$parkings->area_id}}{{$i}}
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-success">Available</span>
                                </td>
                                <td class="project-actions text-center">
                                    <a class="btn btn-primary btn-sm" href="{{ route('bookParking.edit', [$parkings->area_id, $i]) }}">
                                        <i class="fas fa-folder">
                                        </i>
                                        Book
                                    </a>
                                    
                                </td>
                            </tr>
                    @endfor -->
                </table>

            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
</div>
@endsection