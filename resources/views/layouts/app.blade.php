<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Underground & Rising') }}</title>

    <!-- TON CSS PERSO VIA VITE (CORRECT) -->
    

    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-white">

    <!-- NAVIGATION Breeze -->
    @include('layouts.navigation')

    <!-- CONTENU DES PAGES -->
    <main>
        {{ $slot }}
    </main>

    <!-- FOOTER (SI TU EN AS UN) -->
    @include('layouts.footer')

</body>
</html>
