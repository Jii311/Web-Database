<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    {{-- css font --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    {{-- alpine.js --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <title>{{ $title }}</title>
</head>

<body class="h-full bg-white dark:bg-gray-700">
    <div class="min-h-full">
        <x-navbar-admin></x-navbar-admin>

        <main class="h-auto p-4 pt-20 bg-white md:ml-64 dark:bg-gray-700">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8 ">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>
