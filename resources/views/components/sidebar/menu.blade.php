@props(['menu', 'visibleCount' => 4])

@php
$children = $menu->children;
$childCount = $children->count();
@endphp

<div @class([ 'menu-item' , 'menu-accordion'=> $childCount,
    ]) data-kt-menu-trigger="{{ $childCount ? 'click' : '' }}">
    <!--begin:Menu link-->
    @if ($menu->url && $childCount === 0)

    <x-sidebar.item :item="$menu" />
    @else
    <span class="menu-link">
        <span class="menu-icon">
            @if ($menu->icon)
            <i class="fa-solid fa-{{ $menu->icon }} fs-3"></i>
            @else
            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            @endif
        </span>
        <span class="menu-title">{{ $menu->title }}</span>
        @if ($childCount)
        <span class="menu-arrow"></span>
        @endif
    </span>
    @endif
    <!--end:Menu link-->
    @if ($childCount)
    <!--begin:Menu sub-->
    <div class="menu-sub menu-sub-accordion">
        @foreach ($children->take($visibleCount) as $child)
        <x-sidebar.menu :menu="$child" :visibleCount="$visibleCount" />
        @endforeach

        @if ($childCount > $visibleCount)
        <div class="collapse" id="menu_collapse_{{ $menu->id }}">
            @foreach ($children->slice($visibleCount) as $child)
            <x-sidebar.menu :menu="$child" :visibleCount="$visibleCount" />
            @endforeach
        </div>

        <!-- Show More Button -->
        <div class="menu-item">
            <div class="menu-content">
                <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed"
                    data-bs-toggle="collapse" href="#menu_collapse_{{ $menu->id }}" role="button" aria-expanded="false"
                    aria-controls="menu_collapse_{{ $menu->id }}" data-kt-toggle-text="Show Less">

                    <span data-kt-toggle-text-target="true">
                        Show {{ $childCount - $visibleCount }} More
                    </span>

                    <i class="ki-duotone ki-minus-square toggle-on fs-2 me-0">
                        <span class="path1"></span><span class="path2"></span>
                    </i>
                    <i class="ki-duotone ki-plus-square toggle-off fs-2 me-0">
                        <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                    </i>
                </a>
            </div>
        </div>
        @endif
    </div>
    <!--end:Menu sub-->
    @endif
</div>