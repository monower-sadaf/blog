<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <x-navbar />
    <section class="container mx-auto px-2 lg:px-4 min-h-[82.5vh]">
        {{
            $slot
        }}
    </section>
    <x-footer />
</body>

</html>