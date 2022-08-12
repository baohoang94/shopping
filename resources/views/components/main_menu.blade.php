<div class="mainmenu pull-left">
    <ul class="nav navbar-nav collapse navbar-collapse">
        <li><a href="{{ route('home') }}" class="active">Trang chủ</a></li>
        <li><a href="{{ route('blog.index') }}">Blog</a></li>
        @foreach ($categoryLimit as $categoryParent)
        <li class="dropdown"><a href="#">{{ $categoryParent->name }}<i class="fa fa-angle-down"></i></a>
            @include('components.child_menu', ['categoryParent' => $categoryParent])
        </li>
        @endforeach
    </ul>
</div>