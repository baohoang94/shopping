<div class="category-tab">
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            @foreach ($categorys as $indexCategory => $categoryItem)
                <li class="{{ $indexCategory === 0 ? 'active' : '' }}"><a href="#category_tab_{{ $categoryItem->id }}" data-toggle="tab">{{ $categoryItem->name }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="tab-content">
        @foreach ($categorys as $indexCategoryProduct => $categoryItemProduct)
        <div class="tab-pane fade {{ $indexCategoryProduct === 0 ? 'active in' : '' }}" id="category_tab_{{ $categoryItemProduct->id }}">
            @foreach ($categoryItemProduct->products()->take(4)->orderBy('created_at', 'DESC')->get() as $productItemTabs)
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{ !empty($productItemTabs->feature_image_path) ? config('app.base_image_url') . $productItemTabs->feature_image_path : $productItemTabs->feature_image_link }}" alt="{{ $productItemTabs->feature_image_name }}" />
                            <h2>{{ number_format($productItemTabs->price) }} VND</h2>
                            <p>{{ $productItemTabs->name }}</p>
                            <a href="{{ route('detail', ['id' => $productItemTabs->id]) }}" class="btn btn-default add-to-cart"><i
                                    class="fa fa-eye"></i>Xem</a>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</div>