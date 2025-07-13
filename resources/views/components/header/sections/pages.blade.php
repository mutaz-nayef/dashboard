@php
$activeTab = $menus->first()?->slug ?? 'default';
$tabMenus = $menus->take(5);
@endphp

<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
    <!--begin:Pages menu-->
    <div class="menu-active-bg px-4 px-lg-0">
        <!--begin:Tabs nav-->
        <div class="d-flex w-100 overflow-auto">
            <ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-wrap flex-grow-1" role="tablist">
                @foreach ($tabMenus as $menu)
                <li class="nav-item mx-lg-1" role="presentation">
                    <a class="nav-link py-3 py-lg-6 text-active-primary {{ $loop->first ? 'active' : '' }}"
                        data-bs-toggle="tab" data-bs-target="#tab_{{ $menu->slug }}" role="tab"
                        aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                        {{ $menu->title }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <!--end:Tabs nav-->

        <!--begin:Tab content-->
        <div class="tab-content py-4 py-lg-8 px-lg-7">
            @foreach ($tabMenus as $menu)
            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab_{{ $menu->slug }}"
                role="tabpanel">
                <div class="row">
                    @foreach ($menu->children as $child)
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <x-header.item :menu="$child" />
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <!--end:Tab content-->
    </div>
</div>