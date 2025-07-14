@props(['menu'])

@if ($menu->children->isNotEmpty())
<!-- Parent item with submenu -->
<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
    class="menu-item menu-lg-down-accordion">
    <!-- Menu link (no href) -->
    <span class="menu-link">

        @if (!empty($menu->icon))
        <span class="menu-icon">
            <i class="fa-solid fa-{{ $menu->icon }} fs-4"></i>
        </span>
        @else
        <span class="menu-bullet">
            <span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
        </span>
        @endif
        <span class="menu-title">{{ $menu->title }}</span>
        <span class="menu-arrow"></span>
    </span>
    <!-- Submenu -->
    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
        @foreach ($menu->children as $child)
        <x-menus.hover-menu :menu="$child" />
        @endforeach
    </div>
</div>
@else
<x-menus.menu-item :menu="$menu" />
@endif