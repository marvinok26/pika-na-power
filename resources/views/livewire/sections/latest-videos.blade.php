@if ($sectiondata != null)
    <div class="bg-white dark:bg-gray-950 py-12 sm:py-16">
        <div class="mx-auto lg:px-0 px-4 max-w-7xl">
            <div class="mx-auto flex flex-col items-center sm:flex-row sm:justify-between mb-8 ">
                
                <h2 class="text-3xl text-black dark:text-white leading-8 lg:text-5xl my-6 font-medium lg:py-0 max-w-2xl">
                    {{$sectiondata->title}}
                </h2>
                <a href="/videos" wire:navigate
                class="text-white bg-[#CD201F] focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-base px-5 py-2.5 text-center inline-flex items-center  me-2 mb-2">
                View on YouTube
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </a>
            </div>
            <div class="mx-auto grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-4 lg:mx-0 lg:max-w-none lg:grid-cols-4">
                @foreach ($videos as $video)
                    <article class="relative isolate flex flex-col transition-transform transform hover:scale-105 justify-end overflow-hidden rounded-2xl bg-gray-900 px-4 pb-8 pt-32 sm:pt-40 lg:pt-60">
                        <img src={{ url('storage/'.$video->thumbnail) }} alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-black  via-gray-900/50"></div>
                        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        <img src="/images/video.svg" class="absolute text-yellow top-2/3 mb-8 left-1/2 transform -translate-x-1/2 -translate-y-28 h-12 w-12 fill-white cursor-pointer">
                    
                        <!-- Metadata Section -->
                        <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-base leading-6 text-white">
                            <time datetime="2020-03-16" class="text-white mr-6">{{$video->date}}</time>
                            
                        </div>
                    
                        <!-- Article Title -->
                        <h3 class="mt-1 text-lg font-normal leading-6 text-white">
                            <a href={{$video->url}} wire:navigate>
                                <span class="absolute inset-0"></span>
                                {{$video->title}}
                            </a>
                        </h3>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
@endif
