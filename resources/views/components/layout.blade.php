<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="http://fonts.cdnfonts.com/css/sansation" rel="stylesheet">
        @vite('resources/css/app.css')
        <title>Movie Quotes</title>
    </head>

    <body class="bg-gradient-radial text-white h-screen relative font-sansation font-normal text-5xl leading-tight">
        <header class="absolute right-4 p-6 text-right text-lg flex flex-col">
            <a href="{{ route('home') }}">{{ __('homepage.home') }}</a>
            
            @auth
                <a href="{{ route('movies.create') }}">{{ __('homepage.dashboard') }}</a>

                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit">{{ __('homepage.log_out') }}</button>
                </form>

                @else
                <a href="{{ route('login.page') }}">{{ __('homepage.log_in') }}</a>
            @endauth
        </header>

        <main class="max-w-5xl m-auto flex flex-col items-center pt-20">
            {{ $slot }}
        </main>
        
        <aside class="absolute top-2/4 -translate-y-2/4 left-8 text-2xl">
            <ul>
                <x-list-item>
                    <a href="{{ route('locale.change', 'en') }}">en</a>
                </x-list-item>
    
                <x-list-item>
                    <a href="{{ route('locale.change', 'ka') }}">ka</a>
                </x-list-item>
            </ul>
        </aside>
    </body>
</html>