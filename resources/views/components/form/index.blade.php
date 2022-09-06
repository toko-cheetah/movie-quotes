<div class="mt-10 flex w-4/5 justify-between">
    <div class="flex flex-col text-lg">
        <x-form.link route="movies.create">
            <a href="{{ route('movies.create') }}">Add Movie</a>
        </x-form.link>
        
        <x-form.link route="movies.index">
            <a href="{{ route('movies.index') }}">All Movies</a>
        </x-form.link>
        
        <x-form.link route="quotes.create">
            <a href="{{ route('quotes.create') }}">Add Quote</a>
        </x-form.link>
        
        <x-form.link route="quotes.index">
            <a href="{{ route('quotes.index') }}">All Quotes</a>
        </x-form.link>
    </div>
    
    <div class="w-2/3">
        {{ $slot }}
    </div>
</div>