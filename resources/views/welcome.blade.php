<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Skeleton Demo</title>
        @livewireStyles
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased bg-gray-100">
        <main role="main" class="px-4 py-8 flex justify-center">
            <div class="w-full md:w8/12">
            <h1 class="my-10 text-5xl font-extrabold text-center leading-none tracking-tight">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-500 to-pink-500">
                    Skeleton Demo
                </span>
            </h1>
            @livewire('card')
        </main>

            </div>
       @livewireScripts
    </body>
</html>
