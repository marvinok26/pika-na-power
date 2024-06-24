<div class="bg-white dark:bg-gray-950 pb-16 ">
    <div class="mx-auto lg:px-0 px-4 max-w-7xl">
        
        <div class="mx-auto grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-4 lg:mx-0 lg:max-w-none lg:grid-cols-4">
            @for ($i = 0; $i < 12; $i++)
            <article class="relative isolate flex flex-col transition-transform transform hover:scale-105 justify-end overflow-hidden rounded-2xl bg-gray-900 px-4 pb-8 pt-44 sm:pt-60 lg:pt-56 h-full">
                <img src="/images/banner.jpeg" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                <div class="absolute inset-0 -z-10 bg-gradient-to-t from-black via-gray-900/50"></div>
                <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                <img src="/images/event.svg" class="absolute text-yellow top-2/3 mb-8 left-1/2 transform -translate-x-1/2 -translate-y-28 h-12 w-12 fill-white" alt="">

                <!-- Metadata Section -->
                <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-white">
                    <time datetime="2020-03-16" class="text-white mr-6">Mar 16, 2020</time>
                </div>

                <!-- Article Title -->
                <h3 class="mt-3 text-base font-normal leading-6 text-white">
                    <a href="/single-event">
                        <span class="absolute inset-0"></span>
                        The Summit on Clean Cooking in Africa 2024 (Paris, France)
                    </a>
                </h3>

                <!-- Additional Metadata Section (with PDF icon) -->
                
            </article>
            
            @endfor
            
        </div>
    </div>
    
</div>
