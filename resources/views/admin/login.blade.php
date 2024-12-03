@extends('admin.master')
@section('title','Login')
@section('content')
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{asset('public/assets/images/icon/logo-black.png')}}" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{route('admin_check')}}" method="post">
                                {{ csrf_field() }}
                                @include("../flash-message")
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full @if(!empty($errors->first('email'))){{'is-invalid'}}@endif" type="email" name="email" placeholder="Email">
                                    <span style="color:red;">{{ $errors->first('email') }}</span>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full @if(!empty($errors->first('password'))){{'is-invalid'}}@endif" type="password" name="password" placeholder="Password">
                                    <span style="color:red;">{{ $errors->first('password') }}</span>
                                </div><br>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div><br>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection