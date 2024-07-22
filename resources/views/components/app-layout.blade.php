<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kenya Power PLC</title>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="font-sans antialiased" x-cloak x-data="{darkMode: $persist(false), zoomLevel: $persist(100), siteGrayscale: $persist(false)}" :class="{'dark': darkMode === true }" :style="'zoom: ' + zoomLevel + '%'">

        {{-- <div class="bg-white dark:bg-slate-950 flex flex-col" x-data="scrollHandler()"> --}}
        <div class="bg-white dark:bg-slate-950 flex flex-col">

            <template x-if="siteGrayscale">
                <style>
                    img {
                        filter: grayscale(100%);
                    }
                </style>
            </template>
            
            {{-- <x-top-navigation/> --}}
            <header class="absolute inset-x-0 top-0 z-40">
                {{-- navigation here --}}
                {{-- <livewire:header-navigation/> --}}
                <x-app-header />
            </header>

            {{ $slot }}

            {{-- Footer --}}
            {{-- <livewire:footer/> --}}
            <x-app-footer />
        </div>

        @livewireScripts

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

        <script>
            AOS.init();
        </script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox-plus-jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".owl-carousel-1").owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    items: 1,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: true
                });

                $(".owl-carousel-2").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items: 4,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2 // 2 items for screens from 0px and up
            },
            768: {
                items: 4 // 4 items for screens from 768px and up
            }
        }
    });
            });
        </script>
        <script>
            lightbox.option({
              'resizeDuration': 200,
              'wrapAround': true,
              'disableScrolling' : true,
              'positionFromTop', 50,
            })
        </script>
    </body>
</html>