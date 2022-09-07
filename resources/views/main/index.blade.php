<x-layout>
    <img src="{{ asset('storage/' . $quote->thumbnail) }}" alt="" class="w-6/12 rounded-lg">

    <p class="mt-7 mb-14">{{ $quote->body }}</p>

    <p class="underline"><a href="{{ route('movie_quotes', ['movie' => $movie->id]) }}">{{ $movie->title }}</a></p>
</x-layout>