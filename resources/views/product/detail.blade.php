@extends('layouts.master')
@section('title')
    <title>{{ $product->name }}</title>
@endsection
@section('css')
    <link href="{{ asset('homes/home.css') }}" rel="stylesheet">
@endsection
@section('js')
    <script src="{{ asset('homes/home.js') }}"></script>
@endsection
@section('content')
    <section>
        <div class="container">
            <div class="row">
                @include('components.sidebar')
                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Ảnh đại diện</h2>
                        <div class="col-sm-12">
                            <img class="img-responsive"
                                src="{{ !empty($product->feature_image_path) ? config('app.base_image_url') . $product->feature_image_path : $product->feature_image_link }}"
                                alt="">
                        </div>
                        <div class="clearfix">
                            <p>&nbsp;</p>
                        </div>
                        @if ($product->productImageLinks->count())
                        <h2 class="title text-center">Ảnh chi tiết</h2>
                            @foreach ($product->productImageLinks as $linkImageProduct)
                                <div class="col-sm-12">
                                    <img class="img-responsive" src="{{ $linkImageProduct->image_link }}" alt="">
                                </div>
                                <div class="clearfix">
                                    <p>&nbsp;</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <!--features_items-->
                </div>
            </div>
        </div>
    </section>
@endsection
