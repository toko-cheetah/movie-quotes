<x-layout>
    <x-form.index>
        <div>
            @foreach ($movies as $movie)
                <p>{{ $movie->title }}</p>
            @endforeach
        </div>
    </x-form.index>
</x-layout>