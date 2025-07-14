@props(['menu'])

@if ($menu->children->isNotEmpty())
<div class="mb-6">
    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">{{$menu->title}}</h4>
    @foreach ($menu->children as $child)
    <x-menus.menu-item :menu="$child" />
    @endforeach
</div>
@else

<div {{ $attributes->merge(['class' => 'menu-item p-0 m-0']) }}>
    <a class="menu-link" href="{{ $menu->url }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">{{ $menu->title }}</span>
    </a>
</div>
@endif