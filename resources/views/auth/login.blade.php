@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ورود به وبسایت</div>

                <div class="card-body" style="padding:0px">

                <div class="row">
                    

                    <div class="col-md-7" style="margin-top:18%;margin-bottom:10%;">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                        <div class="col-sm-1">
                        </div>
                        <label for="email" class="col-sm-2 col-form-label text-md-center"> ایمیل : </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="form-group row">
                        <div class="col-sm-1"></div>
                        <label for="password" class="col-md-2 col-form-label text-md-center">گذرواژه  : </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  >

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-5 offset-md-2" id="mobilecheck">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        مرا به خاطر بسپار
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <div style="margin:auto;text-align:center">
                                <a href="/register">
                                <button type="button" class="btn btn-danger" style="padding-right:20px;padding-left:20px">
                                    ثبت نام
                                </button>
                                </a>

                                <button type="submit" class="btn btn-success" style="padding-right:30px;padding-left:30px">
                                    ورود
                                </button>

                                    <br>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    بازیابی رمز عبور
                                </a>
                                </div>
                            </div>
                        </div>
                    </form>

                    </div>

                    <div class="col-md-5" id="collogin">
                    <img src="./../assets/images/1512.png" class="imagelogin" alt="">

                    </div>

                </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
