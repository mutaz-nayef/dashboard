@props([
'title',
'trigger' => null,
'placement' => null,
])
@php
$attributes = $attributes->merge([
'class' => 'menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2',
]);
$sectionView = 'components.header.sections.' . strtolower($title);
@endphp

<div {{ $attributes }} @if ($trigger) data-kt-menu-trigger="{{ $trigger }}" @endif @if ($placement)
    data-kt-menu-placement="{{ $placement }}" @endif>
    <!--begin:Menu link-->
    <span class="menu-link">
        <span class="menu-title text-capitalize">{{ $title }}</span>
        <span class="menu-arrow d-lg-none"></span>
    </span>
    <!--end:Menu link-->
    @includeIf($sectionView)
</div>