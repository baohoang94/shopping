@if ($categoryParent->categoryChildrent->count())
    <ul role="menu" class="sub-menu">
        @foreach ($categoryParent->categoryChildrent as $categoryChild)
            <li><a href="#">{{ $categoryChild->name }}</a></li>
            @if ($categoryChild->categoryChildrent->count())
            @include('components.child_menu', ['categoryParent' => $categoryChild])
            @endif
        @endforeach
    </ul>
@endif
