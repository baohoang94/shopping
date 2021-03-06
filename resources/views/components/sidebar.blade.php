<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Danh mục</h2>
        <div class="panel-group category-products" id="accordian">
            <!--category-productsr-->
            @foreach ($categorys as $category)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            @if ($category->categoryChildrent->count())
                                <a data-toggle="collapse" data-parent="#accordian" href="#{{ $category->slug }}">
                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                    {{ $category->name }}
                                </a>
                            @else
                                <a
                                    href="{{ route('category.product', ['slug' => $category->slug, 'id' => $category->id]) }}">
                                    {{ $category->name }}
                                </a>
                            @endif
                        </h4>
                    </div>
                    <div id="{{ $category->slug }}" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                @foreach ($category->categoryChildrent as $categoryChildrent)
                                    <li><a
                                            href="{{ route('category.product', ['slug' => $categoryChildrent->slug, 'id' => $categoryChildrent->id]) }}">{{ $categoryChildrent->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!--/category-products-->
    </div>
</div>
