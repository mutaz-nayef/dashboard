<!--begin:Menu sub-->
<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
    <!--begin:Menu item-->
    @foreach ($menus as $menu )
    <x-menus.hover-menu :menu="$menu" />
    @endforeach

</div>
<!--end:Menu sub-->