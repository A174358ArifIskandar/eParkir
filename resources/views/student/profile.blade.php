<?php $page = 'profile'; ?>
@extends('layouts.student')
@section('title','My Profile')
@section('content')
<!-- <body> -->
<div class="content-wrapper">
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
                    Teknologi &amp; Sains Maklumat</p>
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
</div>
@endsection