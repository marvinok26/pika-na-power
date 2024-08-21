<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pika Na Power</title>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="font-sans antialiased" x-cloak x-data="{darkMode: $persist(false), zoomLevel: $persist(100), siteGrayscale: $persist(false)}" :class="{'dark': darkMode === true }" :style="'zoom: ' + zoomLevel + '%'">
        <div class="cursor"></div>

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

        <script src="{{ asset('js/app.js') }}" defer></script>

        @livewireScripts

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

        <script>
            AOS.init();
        </script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox-plus-jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
       

        <script>
         $(document).ready(function(){
        $('.slick-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            speed: 2000,
            arrows: false
        });
    });
            
            $(document).ready(function(){
                $('.myslider .owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    responsiveClass:true,
      autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:true,
            loop:false
        }
    }
})
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


            var cursor = document.querySelector(".cursor");
            window.addEventListener("mousemove", (e) => {
                cursor.style.left = e.pageX + "px";
                cursor.style.top = e.pageY + "px";
                cursor.setAttribute("data-fromTop", cursor.offsetTop - scrollY);
                // console.log(e)
                });
            window.addEventListener("scroll", () => {
                const fromTop = cursor.getAttribute("data-fromTop");
                cursor.style.top = scrollY + parseInt(fromTop) + "px";
                // console.log(scrollY);
            });
            window.addEventListener("click", () => {
                if (cursor.classList.contains("click")) {
                    cursor.classList.remove("click");
                    void cursor.offsetWidth; // trigger a DOM reflow
                    cursor.classList.add("click");
                } else {
                    cursor.classList.add("click");
                }
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
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 4,
                spaceBetween: 30,
                //   slidesPerGroup: 3,
                loop: true,
                //   loopFillGroupWithBlank: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: '.kp-button-next',
                    prevEl: '.kp-button-prev',
                },
                // navigation: {
                //     nextEl: ".swiper-button-next",
                //     prevEl: ".swiper-button-prev",
                // },
            });
        </script>
        <script>
document.addEventListener('DOMContentLoaded', function() {
    // Select all counters
    const counters = document.querySelectorAll('.counter');

    // Function to update the counter value
    const updateCounter = (element, endValue) => {
        const duration = 2000; // Duration in milliseconds
        const startValue = 0;
        const startTime = performance.now();

        const step = (currentTime) => {
            const elapsedTime = currentTime - startTime;
            const progress = Math.min(elapsedTime / duration, 1);
            const value = Math.floor(progress * (endValue - startValue) + startValue);
            element.textContent = value;
            
            if (progress < 1) {
                requestAnimationFrame(step);
            }
        };

        requestAnimationFrame(step);
    };

    // Function to start the counter animation when it comes into view
    const startCounterAnimation = (counter) => {
        const endValue = parseInt(counter.getAttribute('data-end-value'));
        updateCounter(counter, endValue);
    };

    // Initialize counters and observe them
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startCounterAnimation(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => {
        observer.observe(counter);
    });
});
</script>

    </body>
</html>
