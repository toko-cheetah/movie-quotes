<x-layout>
    <form action="{{ route('login') }}" method="post" class="flex flex-col mt-10">
        @csrf

        <x-form.label name="email">{{ __('login.email') }}</x-form.label>
        <x-form.input name="email" type="email" />

        <x-form.label name="password">{{ __('login.password') }}</x-form.label>
        <x-form.input name="password" type="password" />

        <x-form.button>{{ __('homepage.log_in') }}</x-form.button>

        <x-form.error name="email" />
    </form>
</x-layout>