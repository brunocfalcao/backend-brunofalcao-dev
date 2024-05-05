<!doctype html>
<html lang="en" class="h-full bg-primary">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @stack('metatags')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap');
    </style>

    @vite('resources/css/app.css')
    @stack('styles')

</head>

<body class="antialiased h-full">

    @include('backend::layouts.partials.sidenav')

    <main class="py-10 lg:pl-72">
        <div class="px-4 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>

    <!-- Scripts -->
    @stack('scripts')
</body>

</html>
