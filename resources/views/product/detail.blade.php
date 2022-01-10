@extends('layouts.master')
@section('title')
    <title>{{ $product->name }}</title>
@endsection
@section('css')
    <link href="{{ asset('detail/jquerysctipttop.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/exzoom/jquery.exzoom.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('homes/home.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('detail/detail.css') }}" rel="stylesheet">
@endsection
@section('js')
    <script src="{{ asset('detail/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/exzoom/jquery.exzoom.js') }}"></script>
    {{-- <script src="{{ asset('homes/home.js') }}"></script> --}}
    <script src="{{ asset('detail/detail.js') }}"></script>
@endsection
@section('content')
    <section>
        <div class="container">
            <div class="row">
                @include('components.sidebar')
                <div class="col-sm-9 padding-right">
                    <div class="product-details">
                        <!--product-details-->
                        <div class="col-sm-6">
                            <div class="container_product">
                                <div class="exzoom hidden" id="exzoom">
                                    <div class="exzoom_img_box">
                                        <ul class='exzoom_img_ul'>
                                            <li><img
                                                    src="{{ !empty($product->feature_image_path) ? config('app.base_image_url') . $product->feature_image_path : $product->feature_image_link }}" />
                                            </li>
                                            @if ($product->productImageLinks->count())
                                                @foreach ($product->productImageLinks as $linkImageProduct)
                                                    <li><img src="{{ $linkImageProduct->image_link }}" /></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="exzoom_nav"></div>
                                    <p class="exzoom_btn">
                                        <a href="javascript:void(0);" class="exzoom_prev_btn">
                                            < </a>
                                                <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-information">
                                <!--/product-information-->
                                {{-- <img src="{{ asset('eshopper/images/product-details/new.jpg') }}" class="newarrival" alt="" /> --}}
                                <h2>{{ $product->name }}</h2>
                                {{-- <p>Web ID: 1089772</p> --}}
                                <img src="{{ asset('eshopper/images/product-details/rating.png') }}" alt="" />
                                <span>
                                    <span>{{ number_format($product->price) }} VND</span>
                                    <input type="text" value="1" />
                                    <button type="button" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </span>
                                <p><b>Tình trạng:</b> Còn hàng</p>
                                {{-- <p><b>Condition:</b> New</p> --}}
                                <p><b>Danh mục:</b> {{ $product->category->name }}</p>
                                {{-- <a href=""><img src="{{ asset('eshopper/images/product-details/share.png') }}" class="share img-responsive"
                                        alt="" /></a> --}}
                            </div>
                            <!--/product-information-->
                        </div>
                    </div>
                    <!--/product-details-->

                    <div class="category-tab shop-details-tab">
                        <!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#details" data-toggle="tab">Mô tả</a></li>
                                {{-- <li><a href="#reviews" data-toggle="tab">Đánh giá (5)</a></li> --}}
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="details">
                                {!! $product->content !!}
                            </div>

                            <div class="tab-pane fade" id="reviews">
                                <div class="col-sm-12">
                                    <ul>
                                        <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                        <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure
                                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                        pariatur.</p>
                                    <p><b>Write Your Review</b></p>

                                    <form action="#">
                                        <span>
                                            <input type="text" placeholder="Your Name" />
                                            <input type="email" placeholder="Email Address" />
                                        </span>
                                        <textarea name=""></textarea>
                                        <b>Rating: </b> <img
                                            src="{{ asset('eshopper/images/product-details/rating.png') }}" alt="" />
                                        <button type="button" class="btn btn-default pull-right">
                                            Submit
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--/category-tab-->
                </div>
            </div>
        </div>
    </section>
@endsection
