<x-layout>
    <x-form.index>
        <div>
            @foreach ($quotes as $quote)
                <x-update.layout>
                    <div>
                        <p>{{ $quote->body }}</p>
                        <img src="{{ asset('storage/' . $quote->thumbnail) }}" alt="" class="w-20">
                    </div>

                    <x-update.edit-delete 
                        routeEdit="{{ route('quotes.edit', ['quote' => $quote->id]) }}"
                        routeDelete="{{ route('quotes.destroy', ['quote' => $quote->id]) }}"
                    />
                </x-update.layout>
            @endforeach
        </div>
    </x-form.index>
</x-layout>