<div class="mt-10 flex w-4/5 justify-around">
    <div class="flex flex-col text-lg">
        <x-form.link route="movies.create">
            <a href="{{ route('movies.create') }}">Add Movie</a>
        </x-form.link>
        
        <x-form.link route="movies.index">
            <a href="{{ route('movies.index') }}">All Movies</a>
        </x-form.link>
        
        <x-form.link route="#">
            <a href="#">Add Quote</a>
        </x-form.link>
        
        <x-form.link route="#">
            <a href="#">All Quotes</a>
        </x-form.link>
    </div>
    
    <div>
        {{ $slot }}
    </div>
</div>