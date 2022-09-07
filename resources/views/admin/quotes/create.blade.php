<x-layout>
    <x-form.index>
        <form action="{{ route('quotes.store') }}" method="post" class="flex flex-col" enctype="multipart/form-data">
            @csrf

            <x-form.textarea name="body" />

            <x-form.input name="thumbnail" type="file"/>

            <div class="flex flex-col">
                <x-form.label name="movie" />

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

            <x-form.button>Add</x-form.button>
        </form>
    </x-form.index>
</x-layout>