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
        
        {{ $slot }}
        
        <aside class="absolute top-2/4 -translate-y-2/4 left-8 text-2xl">
            <ul>
                <li class="w-14 h-14 flex justify-center items-center border-2 border-white rounded-full mb-3">
                    <a href="#">en</a>
                </li>
    
                <li class="w-14 h-14 flex justify-center items-center border-2 border-white rounded-full">
                    <a href="#">ka</a>
                </li>
            </ul>
        </aside>
    </body>
</html>