<x-layout>
    <h1 class="mb-20 text-center" >{{ $movie->title }}</h1>

    @foreach ($quotes as $quote)
        @if ($quote->movie_id === $movie->id)
            <div class="bg-white text-gray-600 w-2/3 mb-16 rounded-lg">
                <img src="{{ asset('storage/' . $quote->thumbnail) }}" alt="" class="w-full rounded-t-lg">
                <p class="mt-5 mx-4">{{ $quote->body }}</p>
            </div>
        @endif
    @endforeach
</x-layout>