@props(['name'])

@error($name)
    <p class="text-gray-400 text-lg text-center mt-7">{{ $message }}</p>
@enderror