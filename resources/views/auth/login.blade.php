@extends('layouts.app')

@section('content')
<style>
    body,
    html {
        margin: 0;
        padding: 0;
        height: 200%;
        background-color: #F5F5F5;
        background-image: url("images/bg-kpz3.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: 110% 119%;
        position: bottom;
        
    }

    .user_card {
        height: 450px;
        width: 400px;
        margin-top: 100px;
        margin-bottom: auto;
        background: #FFFFFF;
        color: black;
        position: relative;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 10px;
        /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
        -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 5px;
        background: rgba(0 0 0 0.1);
        box-shadow: 0 0 10px rgba(0 0 0 1);
    }

    .brand_logo_container {
        position: absolute;
        height: 170px;
        width: 170px;
        top: -75px;
        border-radius: 50%;
        border-color: #202020;
        background: white;
        padding: 10px;
        text-align: center;
        box-shadow: 0 0 10px rgba(0 0 0 1)
    }

    .brand_logo {
        height: 150px;
        width: 150px;
        border-radius: 50%;
        border: 2px solid black;
    }

    .form_container {
        margin-top: 30px;
    }

    .login_btn {
        width: 100%;
        background: #c0392b !important;
        color: white !important;
    }

    .login_btn:focus {
        box-shadow: none !important;
        outline: 0px !important;
    }

    .login_container {
        padding: 0 3rem;
    }

    .input-group-text {
        background: #c0392b !important;
        color: white !important;
        border: 0 !important;
        border-radius: 0.25rem 0 0 0.25rem !important;
    }

    .input_user,
    .input_pass:focus {
        box-shadow: none !important;
        outline: 0px !important;
    }

    .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
        background-color: #c0392b !important;
    }
</style>

<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100 ">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="{{ asset('images/logoparkir1.png') }}" class="brand_logo" alt="Logo">
                    </div>
                </div>

                <div class="d-flex justify-content-center form_container">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input id="matric_no" type="matric_no" class="form-control @error('matric_no') is-invalid @enderror" name="matric_no" value="{{ old('matric_no') }}" placeholder="UKMper/No.Matrik" required autocomplete="matric_no" autofocus>

                            @error('matric_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" style="background-color:#323232;" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a> -->
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
@endsection
