@props(['route'])

<div class="mb-4 {{ Route::is($route) ? 'border-b-2 border-white' : ''}}">
    {{ $slot }}
</div>