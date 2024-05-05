@if($category->child()->where('active', 1)->count())
    <div class="nav-item dropdown">
        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown">{{ $category->name }} <i class="fa fa-angle-down float-right mt-1"></i></a>
        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
            @foreach($category->child()->where('active', 1)->get() as $childCategory)
                @include('parts.navbar-item', ['category' => $childCategory, 'child' => true])
            @endforeach
        </div>
    </div>
@else
    <a href="{{ route('shop', $category->seo->slug) }}" @class(['nav-item nav-link' => ! isset($child), 'dropdown-item' => isset($child)])>{{ $category->name }}</a>
@endif
