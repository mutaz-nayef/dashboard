@props([
'type' => 'light',
'href' => '#',
'size' => 'sm',
'block' => false,
])

@php
$classes = "btn px-6 align-self-center text-nowrap fw-bold btn-$type";
@endphp


<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>