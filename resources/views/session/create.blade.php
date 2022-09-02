<x-layout>
    <form action="{{ route('login') }}" method="post" class="flex flex-col mt-10">
        @csrf

        <x-form.input name="email" type="email" />
        <x-form.input name="password" type="password" />

        <x-form.button>Log In</x-form.button>

        <x-form.error name="email" />
    </form>
</x-layout>