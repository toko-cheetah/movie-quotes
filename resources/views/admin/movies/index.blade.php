<x-layout>
    <x-form.index>
        <div>
            @foreach ($movies as $movie)
                <x-update.layout>
                    <p>{{ $movie->title }}</p>

                    <x-update.edit-delete 
                        routeEdit="{{ route('movies.edit', ['movie' => $movie->id]) }}"
                        routeDelete="{{ route('movies.destroy', ['movie' => $movie->id]) }}"
                    />
                </x-update.layout>
            @endforeach
        </div>
    </x-form.index>
</x-layout>