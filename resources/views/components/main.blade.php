<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Homepage' }}</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header>

        <x-nav />
    </header>




    <main>
        {{ $slot }}
    </main>


</body>

</html>


</header>
