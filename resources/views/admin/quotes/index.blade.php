<x-layout>
    <x-form.index>
        <div>
            @foreach ($quotes as $quote)
                <p>{{ $quote->body }}</p>
                <img src="{{ asset('storage/' . $quote->thumbnail) }}" alt="lala">
            @endforeach
        </div>
    </x-form.index>
</x-layout>