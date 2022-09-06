@props(['name'])

<x-form.label name="{{ $name }}" />

<textarea 
    class="text-gray-700 text-4xl py-3 px-6 mb-5 rounded-2xl"
    name="{{ $name }}"
    id="{{ $name }}"
>
    {{ $slot ?? old('body') }}
</textarea>