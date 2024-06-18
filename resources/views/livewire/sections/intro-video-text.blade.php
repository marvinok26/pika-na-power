@if ($sectiondata != null)
    <div class="py-20">
        <div class="mx-auto max-w-7xl lg:px-0 px-10">
            <div class="flex flex-wrap justify-center items-center -mx-4">
                <!-- Video Column -->
                <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                    <div class="relative pb-9/16">
                        <iframe width="100%" height="350px" src={{$sectiondata->video_url}} title="Pika na Power - Electric pressure cooker (EPC)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- Text Column -->
                <div class="w-full md:w-1/2 px-4">
                    <h2 class="text-2xl font-bold mb-4 dark:text-white text-black">{{$sectiondata->title}}</p>
                    <div class="dark:text-white text-base text-black">{!!$sectiondata->description!!}</div>
                    <a href={{$sectiondata->button_url}} wire:navigate
                        class="text-white bg-[#163466] mt-8 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-base px-5 py-2.5 text-center inline-flex items-center  me-2 mb-2">
                        {{$sectiondata->button_text}}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endif
