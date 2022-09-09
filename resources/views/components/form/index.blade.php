<div class="mt-10 flex w-4/5 justify-between">
    <div class="flex flex-col text-lg">
        <x-form.link route="movies.create">
            <a href="{{ route('movies.create') }}">{{ __('dashboard.add_movie') }}</a>
        </x-form.link>
        
        <x-form.link route="movies.index">
            <a href="{{ route('movies.index') }}">{{ __('dashboard.all_movies') }}</a>
        </x-form.link>
        
        <x-form.link route="quotes.create">
            <a href="{{ route('quotes.create') }}">{{ __('dashboard.add_quote') }}</a>
        </x-form.link>
        
        <x-form.link route="quotes.index">
            <a href="{{ route('quotes.index') }}">{{ __('dashboard.all_quotes') }}</a>
        </x-form.link>
    </div>
    
    <div class="w-2/3">
        {{ $slot }}
    </div>
</div>