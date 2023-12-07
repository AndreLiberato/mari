<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite([asset('build/assets/app-0e323167.css'), asset('build/assets/app-e4e59648.js')])
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
