@extends('layouts.master')
@section('title')
    <title>Giỏ hàng</title>
@endsection
@section('css')
    {{-- <link href="{{ asset('detail/jquerysctipttop.css') }}" rel="stylesheet"> --}}
    {{-- <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> --}}
    {{-- <link href="{{ asset('vendors/exzoom/jquery.exzoom.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('homes/home.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('detail/detail.css') }}" rel="stylesheet"> --}}
@endsection
@section('js')
    {{-- <script src="{{ asset('detail/imagesloaded.pkgd.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('vendors/exzoom/jquery.exzoom.js') }}"></script> --}}
    {{-- <script src="https://use.fontawesome.com/5ac93d4ca8.js"></script> --}}
    {{-- <script src="{{ asset('vendors/ratingStar/bootstrap4-rating-input.js') }}"></script> --}}
    <script src="{{ asset('homes/home.js') }}"></script>
    {{-- <script src="{{ asset('detail/detail.js') }}"></script> --}}
@endsection
@section('content')
<div class="cart_wrapper">
    @include('product.components.cart_component')
</div>
@endsection
