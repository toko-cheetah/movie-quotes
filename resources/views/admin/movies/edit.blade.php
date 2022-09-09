<x-layout>
    <x-form.index>
        <form action="{{ route('movies.update', ['movie' => $movie->id]) }}" method="post" class="flex flex-col">
            @csrf
            @method('PUT')

            <x-form.label name="title_en">{{ __('dashboard.title_en') }}</x-form.label>
            <x-form.input name="title_en" type="text" :value="old('title_en', $movie->getTranslation('title', 'en'))" />
            
            <x-form.label name="title_ka">{{ __('dashboard.title_ka') }}</x-form.label>
            <x-form.input name="title_ka" type="text" :value="old('title_ka', $movie->getTranslation('title', 'ka'))" />

            <x-form.button>{{ __('dashboard.update') }}</x-form.button>
        </form>
    </x-form.index>
</x-layout>