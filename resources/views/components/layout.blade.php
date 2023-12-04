<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{ $title ?? 'Marijuana' }}</title>
</head>
<body>
    <x-header />

    <main>
        {{ $slot }}
    </main>

    <x-footer />
</body>
</html>
