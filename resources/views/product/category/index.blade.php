@extends('layouts.master')
@section('title')
    <title>Thời trang nam, phối đồ nam</title>
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
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						@foreach ($products as $product)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="{{ !empty($product->feature_image_path) ? config('app.base_image_url') . $product->feature_image_path : $product->feature_image_link }}" alt="" />
										<h2>{{ number_format($product->price) }} VND</h2>
										<p>{{ $product->name }}</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Xem</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>{{ number_format($product->price) }} VND</h2>
											<p>{{ $product->name }}</p>
											<a href="{{ route('detail', ['id' => $product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Xem</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
						{{ $products->links() }}
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
@endsection
