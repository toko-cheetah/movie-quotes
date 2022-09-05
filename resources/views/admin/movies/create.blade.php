<x-layout>
    <x-form.index>
        <form action="{{ route('movies.store') }}" method="post" class="flex flex-col">
            @csrf

            <x-form.input name="title" type="text" />

            <x-form.button>Add</x-form.button>
        </form>
    </x-form.index>
</x-layout>