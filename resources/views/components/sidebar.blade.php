<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Category</h2>
        <div class="panel-group category-products" id="accordian">
            <!--category-productsr-->
            @foreach ($categorys as $category)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#{{ $category->slug }}">
                            @if ($category->categoryChildrent->count())
                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            @endif
                            {{ $category->name }}
                        </a>
                    </h4>
                </div>
                <div id="{{ $category->slug }}" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            @foreach ($category->categoryChildrent as $categoryChildrent)
                                <li><a href="#">{{ $categoryChildrent->name }}</a></li>
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