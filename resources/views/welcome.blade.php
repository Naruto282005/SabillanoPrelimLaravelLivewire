<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Prelim</title>

        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        
        {{-- You can place your code here --}}
        <div class="max-w-md mx-auto mt-10">
            <h2 class="text-3xl font-bold mb-4">Sumali sa aming Boletin</h2>
        
            {{-- This tag tells Laravel to render your Livewire component --}}
            @livewire('newsletter')
        </div>

    </body>
</html>