<x-layout>
    <x-form.index>
        <form action="{{ route('movies.store') }}" method="post" class="flex flex-col">
            @csrf

            <x-form.label name="title_en">{{ __('dashboard.title_en') }}</x-form.label>
            <x-form.input name="title_en" type="text" />
            
            <x-form.label name="title_ka">{{ __('dashboard.title_ka') }}</x-form.label>
            <x-form.input name="title_ka" type="text" />

            <x-form.button>{{ __('dashboard.add') }}</x-form.button>
        </form>
    </x-form.index>
</x-layout>