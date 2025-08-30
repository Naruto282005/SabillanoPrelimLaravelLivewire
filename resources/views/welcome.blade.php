<!DOCTYPE html>
{{-- Set the page language from Laravel's config --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- Standard character encoding --}}
        <meta charset="utf-8">
        {{-- Required for responsive design --}}
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- The title that appears in the browser tab --}}
        <title>My Prelim</title>

        {{-- Link the compiled CSS file from Vite --}}
        @vite('resources/css/app.css')
    </head>
    {{-- `antialiased` is a Tailwind class for smoother fonts --}}
    <body class="antialiased">
        
        {{-- A styled and centered container using Tailwind CSS --}}
        <div class="max-w-md mx-auto mt-10">
            {{-- A styled heading using Tailwind CSS --}}
            <h2 class="text-3xl font-bold mb-4">Sumali sa aming Boletin</h2>
        
            {{-- This Blade directive renders the 'newsletter' Livewire component --}}
            @livewire('newsletter')
        </div>

    </body>
</html>