<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC comics</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="resources/css/app.css">
</head>
<body>
    @include('partials/header')

    @yield('main-section')

    @include('partials/footer')
</body>
</html>