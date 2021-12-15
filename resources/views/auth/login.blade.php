@extends('layouts.app')

@section('content')
<style>
    .background-img{
        background-image:url('/images/bg-kpz.jpg');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;
        
    }
    .card-login{
        background-color: rgba(245, 245, 245, 0.7);
        /* opacity: 0.9; */
    }
    .card-header{
        color: white;
    }
</style>
<body class="background-img">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-login" style="margin-top: 100px;">
                <div class="card-header" style="background-color: #01949A">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="matric_no" class="col-md-4 col-form-label text-md-right">{{ __('Matric no') }}</label>

                            <div class="col-md-6">
                                <input id="matric_no" type="matric_no" class="form-control @error('matric_no') is-invalid @enderror" name="matric_no" value="{{ old('matric_no') }}" placeholder="UKMper/No.Matrik" required autocomplete="matric_no" autofocus>

                                @error('matric_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
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
</div>
</body>
@endsection
