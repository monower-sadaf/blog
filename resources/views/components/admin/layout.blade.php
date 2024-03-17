<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - Admin</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.admin.navbar')
    <section class="container mx-auto px-2 lg:px-4 min-h-[82.5vh]">
        <div class="">
            @include('components.admin.sidebar')
        </div>
        <div class="">
            {{ $slot }}
        </div>
    </section>
</body>
</html>