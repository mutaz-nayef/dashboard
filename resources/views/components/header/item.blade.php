@props(['menu'])


<div class="col-lg-3 mb-6 mb-lg-0">
    <!--begin:Menu section-->
    @if ($menu->children->isNotEmpty())
    <div class="mb-6">
        <!--begin:Menu heading-->
        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">{{$menu->title}}</h4>
        @foreach ($menu->children as $child)
        <!--begin:Recursive call-->
        <x-header.item :menu="$child" />
        <!--end:Recursive call-->
        @endforeach
        <!--end:Menu item-->
    </div>
    @else
    <!--end:Menu section-->

    <!--begin:Menu section-->
    <div class="mb-0">
        <!--begin:Menu heading-->
        <!--begin:Menu item-->
        <div class="menu-item p-0 m-0">
            <!--begin:Menu link-->
            <a href="{{$menu->url}}" class="menu-link ">
                <span class="menu-title">{{$menu->title}}</span>
            </a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
    </div>
    @endif
    <!--end:Menu section-->
</div>