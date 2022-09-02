@props(['name', 'type'])

<label class="mb-2 uppercase text-lg"
    for="{{ $name }}"
    >
    {{ ucwords($name) }}
</label>

<input 
    class="text-gray-700 text-4xl py-3 px-6 mb-5 rounded-2xl"
    name="{{ $name }}"
    id="{{ $name }}"
    type="{{ $type }}"
    {{ $attributes(['value' => old($name)]) }}
>