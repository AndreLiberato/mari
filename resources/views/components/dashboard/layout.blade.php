<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'Marijuana' }}</title>
</head>

<body>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <x-dashboard.header />

        <x-dashboard.sidebar />

        <main class="p-4 md:ml-64 h-auto">
            {{ $slot }}
        </main>

        <x-dashboard.footer />
    </div>

</body>

</html>
