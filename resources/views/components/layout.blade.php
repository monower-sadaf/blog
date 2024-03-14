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
    <section class="container mx-auto min-h-screen">
        {{
            $slot
        }}
    </section>
    <x-footer />
</body>

</html>