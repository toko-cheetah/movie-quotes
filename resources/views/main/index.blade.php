<x-layout>
    <img src="{{ asset('storage/' . $quote->thumbnail) }}" alt="" class="w-6/12 rounded-lg">

    <p class="mt-7 mb-14">{{ $quote->body }}</p>

    <p class="underline text-center"><a href="{{ route('movie_quotes', ['movie' => $quote->movie->id]) }}">{{ $quote->movie->title }}</a></p>
</x-layout>