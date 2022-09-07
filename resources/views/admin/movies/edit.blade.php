<x-layout>
    <x-form.index>
        <form action="{{ route('movies.update', ['movie' => $movie->id]) }}" method="post" class="flex flex-col">
            @csrf
            @method('PUT')

            <x-form.input name="title" type="text" :value="old('title', $movie->title)" />

            <x-form.button>Update</x-form.button>
        </form>
    </x-form.index>
</x-layout>