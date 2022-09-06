@props(['name', 'type'])

<x-form.label name="{{ $name }}" />

<input 
    class="text-gray-700 bg-white text-4xl py-3 px-6 mb-5 rounded-2xl"
    name="{{ $name }}"
    id="{{ $name }}"
    type="{{ $type }}"
    {{ $attributes(['value' => old($name)]) }}
>