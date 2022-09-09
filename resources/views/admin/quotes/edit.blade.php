<x-layout>
    <x-form.index>
        <form action="{{ route('quotes.update', ['quote' => $quote->id]) }}" method="post" class="flex flex-col" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <x-form.label name="body_en">{{ __('dashboard.body_en') }}</x-form.label>
            <x-form.textarea name="body_en">{{ old('body_en', $quote->getTranslation('body', 'en')) }}</x-form.textarea>
            
            <x-form.label name="body_ka">{{ __('dashboard.body_ka') }}</x-form.label>
            <x-form.textarea name="body_ka">{{ old('body_ka', $quote->getTranslation('body', 'ka')) }}</x-form.textarea>

            <x-form.label name="thumbnail">{{ __('dashboard.thumbnail') }}</x-form.label>
            <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $quote->thumbnail)" />
            <img src="{{ asset('storage/' . $quote->thumbnail) }}" alt="" class="rounded-xl mb-2" width="100">

            <div class="flex flex-col">
                <x-form.label name="movie">{{ __('dashboard.movie') }}</x-form.label>

                <select name="movie_id" id="movie_id" class="text-gray-700 text-lg py-3 px-6 mb-5 rounded-2xl w-1/2">
                    @foreach ($movies as $movie)
                        <option 
                            value="{{ $movie->id }}"
                            {{ old('movie_id', $quote->movie_id) == $movie->id ? 'selected' : '' }}
                        >
                            {{ $movie->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <x-form.button>{{ __('dashboard.update') }}</x-form.button>
        </form>
    </x-form.index>
</x-layout>