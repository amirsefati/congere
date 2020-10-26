@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">بازیابی گذرواژه</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf
                            <p style="font-size:14px;color:gray;padding-bottom:2px;text-align:right">  در صورتی که قبلا ثبت نام کرده اید و پسورد خود را فراموش کرده میتوانید از بخش برای بازگردانی پسورد خود اقدام نمایید .</p>
                            <p style="font-size:12px;color:gray;padding-bottom:30px;text-align:right">  برای بازیابی لازم هست قبلا با این ایمیل قبلا ثبت نام کرده باشد ( در سیستم ثبت شده باشد ) . </p>

                            <div class="form-group row">
                            <div class="col-md-1"></div>
                            <label for="email" class="col-md-3 pb-4  col-form-label text-md-right">  ایمیل خود را وارد کنید : </label>

                            <div class="col-md-6">

                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <div style="margin:auto;text-align:center">
                                <button type="submit" class="btn btn-success">
                                    ارسال گذرواژه
                                </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
