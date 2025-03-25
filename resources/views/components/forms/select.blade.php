@props(['label', 'name'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-gray-900 text-white border border-white/10 px-5 py-4 w-full focus:outline-none focus:border-blue-700 focus:ring-1 focus:ring-blue-700 appearance-none'
    ];
@endphp

<x-forms.field :$label :$name>
    <select {{ $attributes($defaults) }}>
        {{ $slot }}
    </select>
</x-forms.field>
