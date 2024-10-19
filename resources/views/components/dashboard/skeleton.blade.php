@props(['courses' => [], 'activeCourse' => null, 'sticky_content_class' => ''])
<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastering Nova</title>

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
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Flickity -->
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    
    <!-- Nice Select 2 -->
    <script src="{{Vite::file('libraries/nice-select2/nice-select2.js')}}"></script>
    <link rel="stylesheet" href="{{Vite::file('libraries/nice-select2/nice-select2.css')}}">

    <!-- Dashboard JS -->
    @vite('resources/js/dashboard.js')
</head>
<body class="h-full">
<div>
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div class="relative z-50 lg:hidden" role="dialog" aria-modal="true">
      <!--
        Off-canvas menu backdrop, show/hide based on off-canvas menu state.
      -->
      <div id="mobile-sidebar-background" class="fixed inset-0 bg-background-950/80 transition-opacity ease-linear duration-300 opacity-0 hidden"></div>
  
      <div id="mobile-sidebar-menu-parent" class="fixed inset-0 flex hidden">
        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.
        -->
        <div id="mobile-sidebar-menu" class="relative mr-16 flex w-full max-w-xs flex-1 transition ease-in-out duration-300 transform -translate-x-full">
          <!--
            Close button, show/hide based on off-canvas menu state.
          -->
          <div id="mobile-sidebar-close" onclick="close_sidebar();" class="absolute left-full top-0 flex w-16 justify-center pt-5 opacity-0">
            <button type="button" class="-m-2.5 p-2.5">
              <span class="sr-only">Close sidebar</span>
              <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
  
          <!-- Mobile Sidebar -->
          <div class="flex grow flex-col overflow-y-auto dashboard-sidebar-scrollbar bg-background-950 pt-4 pb-4">
            <div class="flex shrink-0 items-center px-6 mt-4">
                <a href="{{ url('/') }}"><img class="h-8 w-auto" src="{{ Vite::file('images/logo-wide.png') }}" alt="Logo"></a>
            </div>
            <div class="flex bg-primary-500 text-white w-10/12 rounded-r-full py-2 px-6 text-base mt-8">
                Hello, Raznik
            </div>
            <nav class="flex flex-1 flex-col mt-6 px-6">
                <ul role="list" class="flex flex-1 flex-col gap-y-4">
                  <li>
                    <ul role="list" class="-mx-2 space-y-1">
                      {{--<x-dashboard.navbar-item title="Dashboard" is_active="true" url="/home" icon="feathericon-home" />--}}
                      @foreach ($courses as $course)
                      <x-dashboard.navbar-item :title="$course->name" :is_active="$activeCourse !== null && $course->canonical == $activeCourse->canonical" :url="route('course.view', $course->canonical)" icon="heroicon-o-film" />
                      @endforeach
                      <x-dashboard.navbar-item title="Profile" :is_active="false" url="/profile" icon="feathericon-user" />
                    </ul>
                  </li>

                  <a href="#" class="mt-auto w-full">
                    <img src="{{ Vite::file('images/Perk2.png') }}" alt="Perk" class="w-full rounded-lg">
                  </a>
                  <x-dashboard.navbar-item title="Logout" is_active="false" url="" icon="feathericon-arrow-left-circle" />
                  <p class="text-sm p-2 text-background-50 uppercase tracking-wide">All Rights Reserved<br>2022 ® - Lumin</p>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Static sidebar for desktop -->
    <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-[17rem] lg:flex-col">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex grow flex-col overflow-y-auto dashboard-sidebar-scrollbar bg-background-950 pt-4 pb-4">
        <div class="flex shrink-0 items-center px-4 mt-4">
          <a href="{{ url('/') }}"><img class="h-8 w-auto" src="{{ Vite::file('images/logo-wide.png') }}" alt="Logo"></a>
        </div>
        <div class="flex bg-primary-500 text-white w-10/12 rounded-r-full py-2 px-4 text-base mt-8">
            Hello, Raznik
        </div>
        <nav class="flex flex-1 flex-col px-4 mt-6">
          <ul role="list" class="flex flex-1 flex-col gap-y-4">
              <li>
                <ul role="list" class="-mx-2 space-y-1">
                  {{--<x-dashboard.navbar-item title="Dashboard" is_active="true" url="" icon="feathericon-home" />--}}
                  @foreach ($courses as $course)
                  <x-dashboard.navbar-item :title="$course->name" :is_active="$activeCourse !== null && $course->canonical == $activeCourse->canonical" :url="route('course.view', $course->canonical)" icon="heroicon-o-film" />
                  @endforeach
                  <x-dashboard.navbar-item title="Profile" is_active="false" url="/profile/" icon="feathericon-user" />
                </ul>
              </li>
              <a href="#" class="mt-auto w-full">
                <img src="{{ Vite::file('images/Perk2.png') }}" alt="Perk" class="w-full rounded-lg">
              </a>
              <x-dashboard.navbar-item title="Logout" is_active="false" url="" icon="feathericon-arrow-left-circle" />
              <p class="text-sm p-2 text-background-50 uppercase tracking-wide">All Rights Reserved<br>2022 ® - Lumin</p>
          </ul>
        </nav>
      </div>
    </div>
  
    <!-- Start Mobile Navbar -->
    <div class="lg:hidden sticky bg-background-950 text-white top-0 p-4 w-full flex items-center z-20">  
        <a href="{{ url('/') }}"><img class="h-8 w-auto" src="{{ Vite::file('images/logo-wide.png') }}" alt="Logo"></a>

        <button type="button" class="text-white cursor-pointer ml-auto" onclick="open_sidebar();">
            <span class="sr-only">Open sidebar</span>
            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
    <!-- End Mobile Navbar -->

    <div class="lg:pl-[17rem] lg:pr-4 lg:py-4 bg-background-950">
        <main class="pb-2 pt-4 lg:pt-8 relative bg-white lg:rounded-2xl lg:h-[calc(100vh-2rem)] grid grid-cols-1 overflow-hidden dashboard-content-grid z-10">
            @if($sticky_content)
            <div class="sticky w-full bg-white text-gray-900 z-10 top-0 px-4 lg:px-6 pb-4 max-w-full min-w-0 {{ $sticky_content_class }}">
              {{ $sticky_content }}
            </div>
            @endif

            <div class="overflow-auto pb-2 lg:pb-4 px-4 lg:px-6">
				      {{ $main_content }}
            </div>
        </main>
    </div>
  </div>
  
</body>
</html>