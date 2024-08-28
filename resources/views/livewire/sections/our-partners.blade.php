<section class="py-4 md:py-10">
    @if ($sectiondata != null)
        <div class="mx-auto container px-4 sm:px-6 md:mb-8 md:px-10 lg:px-0 mb-0">
            <div class="flex flex-wrap justify-center items-center -mx-4">
                <!-- Video Column -->
                <div class="w-full px-4 mb-0 md:mb-4 ld:mb-10">
                    <h2 data-aos="fade-left" class="text-3xl dark:text-white text-primary font-serif lg:text-5xl mt-4 md:mt-0 mb-0 md:mb-6 lg:py-0">
                        {{ $sectiondata->title }}
                    </h2>
                </div>
            </div>
            <!-- Item 1 -->
            <div class="overflow-hidden relative flex items-center">
            <div class="slick-slider">
                    @foreach ($partners as $partner)
                        <div class="slick-slide">
                            <div class="border-sky-300 dark:border-black text-center hover:border-blue-800">
                                <a href="{{ $partner->url }}" target="_blank" rel="noreferrer">
                                    <img data-aos="flip-right" src={{ url('storage/' . $partner->logo) }} class="h-28 object-contain duration-300 ease-in-out" alt="">
                                </a>
                            </div>
                        </div>
                    @endforeach
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
    @endif
</section>
