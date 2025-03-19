@props(['color' => 'white'])

@php
    $classes = 'w-2.5 h-2.5 inline-block rounded-xs ';

    if ($color === 'white') {
        $classes .= 'bg-white';
    }

    if ($color === 'blue') {
        $classes .= 'bg-blue-800';
    }
@endphp

<div class="inline-flex items-center gap-x-2">
    <span class="{{ $classes }}"></span>
    <h3>{{ $slot }}</h3>
</div>
