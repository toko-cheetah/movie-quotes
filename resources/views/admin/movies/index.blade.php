<x-layout>
    <x-form.index>
        @foreach ($movies as $movie)
            <h1>{{ $movie->title }}</h1>
        @endforeach
    </x-form.index>
</x-layout>