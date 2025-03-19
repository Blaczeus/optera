@props(['size' => 'base'])

@php

  $classes = "bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300";

  if ($size === 'base') {
    $classes .= " px-5 py-[6px] text-[16px]";
  }

  if ($size === 'small') {
    $classes .= " px-3 py-[5px] text-[12px]";
  }
@endphp

<a href="#" class= " {{$classes}} " >{{ $slot }}</a>
