@php
$menus = $menus->filter(function ($menu) {
return $menu->children->isNotEmpty() && $menu->children->every(fn ($child) => $child->children->isEmpty());
});
@endphp
<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-900px w-xxl-950px">
    <!--begin:Dashboards menu-->
    <div class="menu-active-bg pt-1 pb-3 px-3 py-lg-6 px-lg-6" data-kt-menu-dismiss="true">
        <div class="row">
            <!--begin:Left Column-->
            <div class="col-lg-7">
                <div class="row">
                    @foreach ($menus as $menu)
                    <div class="col-lg-4 mb-3">
                        <x-menus.menu-item :menu="$menu" />
                    </div>
                    @endforeach
                </div>

                <!-- Divider -->
                <div class="separator separator-dashed mx-lg-5 mt-2 mb-6"></div>

                <!-- Layout Builder -->
                <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mb-5 mb-lg-0 mx-lg-5">
                    <div class="d-flex flex-column me-5">
                        <div class="fs-6 fw-bold text-gray-800">Layout Builder</div>
                        <div class="fs-7 fw-semibold text-muted">Customize, preview and export</div>
                    </div>
                    <a href="https://preview.keenthemes.com/metronic8/demo1/layout-builder.html"
                        class="btn btn-sm btn-primary fw-bold">Try Builder</a>
                </div>
            </div>
            <!--end:Left Column-->

            <!--begin:Right Column with image-->
            <div class="col-lg-5 mb-3 py-lg-3 pe-lg-8 d-flex align-items-center">
                <img src="{{ asset('admin/assets/media/stock/900x600/45.jpg') }}" class="rounded mw-100" alt="" />
            </div>
            <!--end:Right Column-->
        </div>
    </div>
</div>