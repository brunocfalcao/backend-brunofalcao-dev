<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ Nereus::backend()->name }}</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/js/navigation.js')
	
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#333333">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#333333">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body class="h-full">
<div class="flex min-h-full">
    <div class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24 2xl:px-32">
      <div class="mx-auto w-full max-w-sm lg:w-96">
		{{ $auth_content ?? '' }}
      </div>
    </div>
    <div class="relative hidden flex-1 lg:block bg-white">
      <img class="absolute top-4 left-4 right-4 bottom-4 w-[calc(100%-2rem)] h-[calc(100%-2rem)] object-cover rounded-2xl" src="{{ Vite::file('images/laravel-nova-mockup-dark.png') }}" alt="">
    </div>
  </div>  
</body>
</html>
