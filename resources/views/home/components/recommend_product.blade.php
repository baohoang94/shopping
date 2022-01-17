<div class="recommended_items">
    <h2 class="title text-center">sản phẩm đề xuất</h2>
    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($productRecommend as $keyProductRecommend => $productRecommendItem)
                @if ($keyProductRecommend % 3 == 0)
                    <div class="item {{ $keyProductRecommend === 0 ? 'active' : '' }}">
                @endif
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{ !empty($productRecommendItem->feature_image_path) ? config('app.base_image_url') . $productRecommendItem->feature_image_path : $productRecommendItem->feature_image_link }}" alt="{{ $productRecommendItem->feature_image_name }}" />
                                <h2>{{ number_format($productRecommendItem->price) }} VND</h2>
                                <p>{{ $productRecommendItem->name }}</p>
                                <a href="{{ route('detail', ['id' => $productRecommendItem->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Xem</a>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($keyProductRecommend % 3 == 2)
                </div>
                @endif
        @endforeach
    </div>
    <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
</div>
</div>
