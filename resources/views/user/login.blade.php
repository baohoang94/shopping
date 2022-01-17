@extends('layouts.master')
@section('title')
    <title>Login</title>
@endsection
@section('css')
    {{-- <link href="{{ asset('detail/jquerysctipttop.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('vendors/exzoom/jquery.exzoom.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('homes/home.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('detail/detail.css') }}" rel="stylesheet"> --}}
@endsection
@section('js')
    {{-- <script src="{{ asset('detail/imagesloaded.pkgd.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('vendors/exzoom/jquery.exzoom.js') }}"></script> --}}
    {{-- <script src="{{ asset('homes/home.js') }}"></script> --}}
    {{-- <script src="{{ asset('detail/detail.js') }}"></script> --}}
@endsection
@section('content')
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Đăng nhập vào tài khoản của bạn</h2>
                    <form method="post" action="{{ route('user.postlogin') }}">
                        @csrf
                        <input type="email" name="email" placeholder="Email" required />
                        <input type="password" name="password" placeholder="Mật khẩu" required />
                        <span>
                            <input type="checkbox" name="remember" class="checkbox"> 
                            Ghi nhớ đăng nhập
                        </span>
                        <button type="submit" class="btn btn-default">Đăng nhập</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">Hoặc</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>Đăng ký tài khoản mới!</h2>
                    <form method="post" action="{{ route('user.register') }}">
                        @csrf
                        <input type="text" name="name" placeholder="Tên" required />
                        <input type="email" name="email" placeholder="Email" required />
                        <input type="password" name="password" placeholder="Mật khẩu" required/>
                        <input type="password" name="repassword" placeholder="Nhập lại mật khẩu" required />
                        <button type="submit" class="btn btn-default">Đăng ký</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->
@endsection
