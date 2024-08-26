<section class="py-10 bg-top bg-no-repeat w-full bg-lightblue dark:bg-slate-950 bg-cover"
        style="background-image: url('{{ asset('/images/boxbackground.svg') }}');">
    @if ($sectiondata != null)
        <div class="mx-auto container lg:px-4 xl:px-0 px-10 pb-4">
            <div class="flex flex-wrap justify-center items-center -mx-4">
                <!-- Video Column -->
                <div class="w-full md:w-6/12 px-4 mb-4 md:mb-0">
                    <div class="text-3xl font-serif font-medium text-primary dark:text-white lg:text-5xl my-4 lg:py-0 leading-8 w-full max-w-xl">
                        {{ $sectiondata->title }}
                    </div>
                </div>
                <!-- Text Column -->
                <div class="w-full md:w-6/12 px-4">
                    <div class=" text-black text-base">{!! $sectiondata->description !!}</div>
                </div>
            </div>
            <div class="grid mt-8 grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Item 1 -->
                @foreach ($appliances as $appliance)
                    <a href={{ $appliance->button_url }} data-aos="flip-right"
                        class="border-2 rounded-lg border-sky-200 dark:border-black bg-gray-50 dark:bg-slate-900 p-6 text-center transition-transform transform hover:scale-105 hover:shadow-lg">
                        <div class="flex justify-center mb-4">
                            <img src={{ url('storage/' . $appliance->image) }} alt="Placeholder Image"
                                class="circle rounded-full p-2">
                        </div>
                        <div class="text-primary dark:text-black text-lg font-bold mb-2">{{ $appliance->title }}</div>
                        <div class="text-link dark:text-black inline-flex items-center">
                            {{ $appliance->button_text }}
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endif
</section>
