<x-layout>
    <x-form.index>
        <form action="{{ route('quotes.store') }}" method="post" class="flex flex-col" enctype="multipart/form-data">
            @csrf

            <x-form.label name="body_en">{{ __('dashboard.body_en') }}</x-form.label>
            <x-form.textarea name="body_en" />

            <x-form.label name="body_ka">{{ __('dashboard.body_ka') }}</x-form.label>
            <x-form.textarea name="body_ka" />
            
            <x-form.label name="thumbnail">{{ __('dashboard.thumbnail') }}</x-form.label>
            <x-form.input name="thumbnail" type="file"/>

            <div class="flex flex-col">
                <x-form.label name="movie">{{ __('dashboard.movie') }}</x-form.label>

                <select name="movie_id" id="movie_id" class="text-gray-700 text-lg py-3 px-6 mb-5 rounded-2xl w-1/2">
                    @foreach ($movies as $movie)
                        <option 
                            value="{{ $movie->id }}"
                            {{ old('movie_id') == $movie->id ? 'selected' : '' }}
                        >
                            {{ $movie->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <x-form.button>{{ __('dashboard.add') }}</x-form.button>
        </form>
    </x-form.index>
</x-layout>