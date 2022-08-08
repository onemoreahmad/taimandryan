<!DOCTYPE html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @hasSection('title')
            <title>@yield('title') - {{config('app.name')}} </title>
        @else
            <title>{{config('app.name')}}</title>
        @endif  
        <livewire:styles />
        <link rel="stylesheet" href="{{ asset('themes/website/css/app.css') }}">
        <script src="{{ asset('themes/website/js/app.js') }}" defer></script>
    </head>
    <body class="">
        <main class="antialiased bg-gradient-to-b min-h-screen  bg-[#FFCF01] p-6">
            {{-- <x-website-header /> --}}
            <div class="mx-auto max-w-7xl">
                {{ $slot }}
            </div>
            
        </main>
        <livewire:scripts /> 
    </body>
</html>
