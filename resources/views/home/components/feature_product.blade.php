<div class="features_items">
    <h2 class="title text-center">Sản phẩm mới</h2>
    @foreach ($products as $product)
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ !empty($product->feature_image_path) ? config('app.base_image_url') . $product->feature_image_path : $product->feature_image_link }}" alt="{{ $product->feature_image_name }}" />
                        <h2>{{ number_format($product->price) }} VND</h2>
                        <p>{{ $product->name }}</p>
                        <a href="{{ route('detail', ['id' => $product->id]) }}" class="btn btn-default add-to-cart"><i
                                class="fa fa-eye"></i>Xem</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>{{ number_format($product->price) }} VND</h2>
                            <p>{{ $product->name }}</p>
                            <a href="{{ route('detail', ['id' => $product->id]) }}" class="btn btn-default add-to-cart"><i
                                    class="fa fa-eye"></i>Xem</a>
                        </div>
                    </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-plus-square-o"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>