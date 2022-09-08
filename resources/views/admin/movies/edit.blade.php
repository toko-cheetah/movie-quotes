<x-layout>
    <x-form.index>
        <form action="{{ route('movies.update', ['movie' => $movie->id]) }}" method="post" class="flex flex-col">
            @csrf
            @method('PUT')

            <x-form.label name="title">{{ __('dashboard.title') }}</x-form.label>
            <x-form.input name="title" type="text" :value="old('title', $movie->title)" />

            <x-form.button>{{ __('dashboard.update') }}</x-form.button>
        </form>
    </x-form.index>
</x-layout>