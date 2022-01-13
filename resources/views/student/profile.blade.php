<?php $page = 'profile'; ?>
@extends('layouts.student')
@section('title','My Profile')
@section('content')
<!-- <body> -->
<div class="content-wrapper">
    <div class="col-md-6 offset-md-3">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="https://lh3.googleusercontent.com/ogw/ADea4I7C7F9mSg-v9Ior-s25WHMHkrJv6drbPMmSdrwK9Q=s83-c-mo" alt="User profile picture">
                </div>
                <br>
                <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Matric No</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputMatricNo" placeholder="Matric Number">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">E-Mail</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputemail" placeholder="E-mail">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputemail" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Bilik Kediaman</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputemail" placeholder="Example: G012">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Phone Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="+601-####-####">
                        </div>
                      </div>
                      <div class="form-group row">
                      <a href="#" class="btn btn-primary btn-block"><b>Edit</b></a>
                      </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection