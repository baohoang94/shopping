@extends('layouts.master')
@section('title')
    <title>Trang chủ - Thời trang nam, phối đồ nam</title>
@endsection
@section('css')
    <link href="{{ asset('homes/home.css') }}" rel="stylesheet">
@endsection
@section('js')
    <script src="{{ asset('homes/home.js') }}"></script>
@endsection
@section('content')


    <section id="slider">
        <!--slider-->
        @include('home.components.slider')
    </section>
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                @include('components.sidebar')

                <div class="col-sm-9 padding-right">
                    <!--features_items-->
                    @include('home.components.feature_product')
                    <!--features_items-->
                    <!--category-tab-->
                    @include('home.components.category_tab')
                    <!--/category-tab-->

                    <!--recommended_items-->
                    @include('home.components.recommend_product')
                    <!--/recommended_items-->

                </div>
            </div>
        </div>
    </section>
@endsection
