@props(['name'])

<label class="mb-2 uppercase text-lg"
    for="{{ $name }}"
    >
    {{ ucwords($slot) }}
</label>