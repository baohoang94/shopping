@extends('layouts.master')
@section('title')
    <title>{{ $product->name }}</title>
@endsection
@section('css')
    <link href="{{ asset('detail/jquerysctipttop.css') }}" rel="stylesheet">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendors/exzoom/jquery.exzoom.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('homes/home.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('detail/detail.css') }}" rel="stylesheet">
@endsection
@section('js')
    <script src="{{ asset('detail/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/exzoom/jquery.exzoom.js') }}"></script>
    <script src="https://use.fontawesome.com/5ac93d4ca8.js"></script>
    <script src="{{ asset('vendors/ratingStar/bootstrap4-rating-input.js') }}"></script>
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
                                    <a href="{{ $product->url_link }}" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </span>
                                <p><b>T??nh tr???ng:</b> C??n h??ng</p>
                                {{-- <p><b>Condition:</b> New</p> --}}
                                <p><b>Danh m???c:</b> {{ $product->category->name }}</p>
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
                                <li class="active"><a href="#details" data-toggle="tab">M?? t???</a></li>
                                <li><a href="#reviews" data-toggle="tab">B??nh lu???n ({{ $comments->count() }})</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="details">
                                {!! $product->content !!}
                            </div>

                            <div class="tab-pane fade" id="reviews">
                                <div class="col-sm-12">
                                    @if (!empty($comments))
                                        @foreach ($comments as $comment)
                                            <ul>
                                                <li><a href=""><i class="fa fa-user"></i>{{ $comment->user->name }}</a></li>
                                                <li><a href=""><i class="fa fa-clock-o"></i>{{ date('H:i:s', strtotime($comment->created_at)) }}</a></li>
                                                <li><a href=""><i class="fa fa-calendar-o"></i>{{ date('d/m/Y', strtotime($comment->created_at)) }}</a></li>
                                            </ul>
                                            <p>{{ $comment->content }}</p>
                                        @endforeach    
                                    @endif
                                    @if (auth()->check())
                                    <p><b>Vi???t b??nh lu???n c???a b???n</b></p>

                                    <form method="POST" action="{{ route('comment.store') }}">
                                        @csrf
                                        {{-- <span>
                                            <input type="text" placeholder="Your Name" />
                                            <input type="email" placeholder="Email Address" />
                                        </span> --}}
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <textarea name="content"></textarea>
                                        <b>????nh gi??: </b> <input type="number" name="rating" class="rating text-warning" data-clearable="remove"/>
                                        <button type="submit" class="btn btn-default pull-right">
                                            G???i
                                        </button>
                                    </form>
                                    @endif
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
