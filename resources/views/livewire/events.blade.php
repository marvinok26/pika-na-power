<div class="bg-white dark:bg-gray-950 pb-16 ">
    <div class="mx-auto lg:px-0 px-4 max-w-7xl">
        
        <div class="mx-auto grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-4 lg:mx-0 lg:max-w-none lg:grid-cols-4">
            @for ($i = 0; $i < 8; $i++)
            <article class="relative isolate flex flex-col transition-transform transform hover:scale-105 justify-end overflow-hidden rounded-2xl bg-gray-900 px-4 pb-8 pt-32 sm:pt-40 lg:pt-64">
                <img src="/images/banner.jpeg" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                <div class="absolute inset-0 -z-10 bg-gradient-to-t from-black  via-gray-900/50"></div>
                <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                <img src="/images/video.svg" class="absolute text-yellow top-2/3 mb-8 left-1/2 transform -translate-x-1/2 -translate-y-28 h-12 w-12 fill-white cursor-pointer">
            
                <!-- Metadata Section -->
                <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-base leading-6 text-white">
                    <time datetime="2020-03-16" class="text-white mr-6">May 27, 2024</time>
                    
                </div>
            
                <!-- Article Title -->
                <h3 class="mt-1 text-lg font-normal leading-6 text-white">
                    <a href="/videos" wire:navigate>
                        <span class="absolute inset-0"></span>
                        Sample Event Title
                    </a>
                </h3>
            </article>
            
            @endfor
            
        </div>
    </div>
</div>
