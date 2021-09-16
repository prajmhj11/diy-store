@foreach($items as $menu_item)
    <li class="nav-item">
        @if($menu_item->link() == '/')
            <a class="nav-link {{ (request()->path() == '/') ? 'active' : '' }}" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
        @else
            <a class="nav-link {{ (request()->path() == ltrim($menu_item->link(), '/')) ? 'active' : '' }}" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
        @endif
    </li>
@endforeach
