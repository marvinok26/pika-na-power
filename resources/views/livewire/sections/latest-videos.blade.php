@if ($sectiondata != null)
    <div class="bg-white dark:bg-gray-950 py-12 sm:py-16">
        <div class="mx-auto container lg:px-0">
            <div class="mx-auto flex flex-col items-center sm:flex-row sm:justify-between mb-8 ">
                <div class="text-3xl font-serif font-medium tracking-tight text-primary dark:text-white sm:text-5xl">
                    {{$sectiondata->title}}
                </div>
                <a href={{$sectiondata->button_url}} wire:navigate class="text-white bg-red-600 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-base px-5 py-1.5 text-center inline-flex items-center  me-2 mb-2">
                    {{$sectiondata->button_text}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
            <div class="mx-auto grid auto-rows-fr grid-cols-1 gap-8 lg:grid-cols-4">
                @foreach ($videos as $video)
                    <article class="relative isolate flex flex-col transition-transform transform hover:scale-105 justify-end overflow-hidden rounded-2xl bg-light px-4 pb-8 pt-32 sm:pt-40 lg:pt-72">
                        <img src={{ url('storage/'.$video->thumbnail) }} alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                        <div class="absolute inset-0 -z-10 bg-black/40"></div>
                        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        <img src="/images/video.svg" class="absolute top-2/3 mb-14 left-1/2 transform -translate-x-1/2 -translate-y-28 h-12 w-12 fill-white cursor-pointer">
                    
                        <!-- Metadata Section -->
                        <div class="flex flex-wrap items-center gap-y-1 overflow-hidden leading-6 text-slate-200">
                            <time datetime="{{$video->date}}" class="text-sm font-sans mr-6">{{$video->date}}</time>
                        </div>
                    
                        <!-- Article Title -->
                        <h3 class="mt-1 text-base font-sans font-normal leading-6 text-white">
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
