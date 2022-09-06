<x-layout>
    <x-form.index>
        <div class="text-2xl">
            @foreach ($movies as $movie)
                <div class="mb-4 flex justify-between">
                    <p>{{ $movie->title }}</p>
                    
                    <div class="flex justify-between">        
                        <a href="{{ route('movies.edit', ['movie' => $movie->id]) }}" class="text-gray-300 mx-5 underline">Update</a>
                        
                        <form action="{{ route('movies.destroy', ['movie' => $movie->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="text-gray-400 mx-5 underline">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </x-form.index>
</x-layout>