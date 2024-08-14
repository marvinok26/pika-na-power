@if ($sectiondata != null)
    <section class="py-10">
        <div class="mx-auto container lg:px-0 px-10">
            <div class="flex flex-wrap justify-center items-center -mx-4">
                <!-- Video Column -->
                <div class="w-full px-4 mb-4 md:mb-0">
                    <h2 data-aos="fade-left" class="text-3xl dark:text-white text-primary font-serif lg:text-5xl mb-6 lg:py-0">
                        {{ $sectiondata->title }}
                    </h2>
                </div>
            </div>
            <!-- Item 1 -->
            <div class="mySwiper mx-auto container overflow-hidden relative px-2 lg:px-6 flex items-center">
                <div class="swiper-wrapper">
                    @foreach ($partners as $partner)
                        <div class="swiper-slide">
                            <div class="border-2 rounded-xl border-sky-300 dark:border-black bg-gray-50 p-6 text-center hover:border-blue-800">
                                <img data-aos="flip-right" src={{ url('storage/' . $partner->logo) }} class="h-28 object-contain" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="flex flex-row justify-between absolute inset-x-0 z-10 -mx-1.5">
                    <button class="kp-button-prev">
                        <svg class="h-8 w-8 flex-none text-primary dark:text-white transform rotate-90" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
    
                    <button class="kp-button-next">
                        <svg class="h-8 w-8 flex-none text-primary dark:text-white transform -rotate-90" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>


                {{-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> --}}
            </div>

            {{-- <div class="owl-carousel owl-carousel-2 owl-theme mt-5">
                @foreach ($partners as $partner)
                    <div class="item">
                        <div class="border-2 rounded-xl border-sky-300 dark:border-black bg-gray-50 p-6 text-center hover:border-blue-800">
                            <img data-aos="flip-right" src={{ url('storage/' . $partner->logo) }} class="h-28 object-contain" alt="">
                        </div>
                    </div>
                @endforeach
            </div> --}}

        </div>

    </section>
@endif
