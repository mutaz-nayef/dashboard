@props(['item'])

@php
$hasChildren = $item->children && $item->children->isNotEmpty();
@endphp

<div @if($hasChildren) data-kt-menu-trigger="click" @endif class="menu-item {{ $hasChildren ? 'menu-accordion' : '' }}">

    <!--begin:Menu link-->
    <span class="menu-link {{ request()->is(ltrim($item->url, '/')) ? 'active' : '' }}">
        @if ($item->icon_html)
        <span class="menu-icon">{!! $item->icon_html !!}</span>
        @endif
        <span class="menu-title">{{ $item->title }}</span>
        @if($hasChildren)
        <span class="menu-arrow"></span>
        @endif
    </span>
    <!--end:Menu link-->

    @if($hasChildren)
    <!--begin:Menu sub-->
    <div class="menu-sub menu-sub-accordion">
        @foreach ($item->children as $child)
        <x-menu-item :item="$child" />
        @endforeach
    </div>
    <!--end:Menu sub-->
    @endif
</div>