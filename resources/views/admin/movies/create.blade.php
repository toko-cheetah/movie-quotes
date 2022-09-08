<x-layout>
    <x-form.index>
        <form action="{{ route('movies.store') }}" method="post" class="flex flex-col">
            @csrf

            <x-form.label name="title">{{ __('dashboard.title') }}</x-form.label>
            <x-form.input name="title" type="text" />

            <x-form.button>{{ __('dashboard.add') }}</x-form.button>
        </form>
    </x-form.index>
</x-layout>