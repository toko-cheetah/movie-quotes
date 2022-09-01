<x-layout>
    <form action="/login" method="post" class="flex flex-col mt-10">
        @csrf

        <x-form.input name="email" />
        <x-form.input name="password" />

        <x-form.button>Log In</x-form.button>

        <x-form.error name="email" />
    </form>
</x-layout>