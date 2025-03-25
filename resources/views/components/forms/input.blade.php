@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/5 border border-white/10 px-5 py-4 w-full focus:outline-none focus:border-blue-700 focus:ring-1 focus:ring-blue-700',
        'value' => old($name)
    ];
@endphp

<x-forms.field :$label :$name>
    @if ($attributes->get('type') === 'file')
        <input type="file" id="{{ $name }}" name="{{ $name }}" class="hidden" onchange="updateFileName('{{ $name }}')">

        <div class="flex items-center gap-3">
            <label for="{{ $name }}" class="cursor-pointer bg-blue-600 text-white py-1 px-3 mt-2 rounded-md hover:bg-blue-700">
                Choose File
            </label>
            <span id="{{ $name }}-filename" class="text-gray-600 mt-2">No file chosen</span>
        </div>

        <script>
            function updateFileName(inputName) {
                const input = document.getElementById(inputName);
                const fileName = input.files.length > 0 ? input.files[0].name : "No file chosen";
                document.getElementById(inputName + "-filename").textContent = fileName;
            }
        </script>
    @else
        <input {{ $attributes->merge($defaults) }}>
    @endif
</x-forms.field>
