<section class="py-12">
    @if ($sectiondata != null)
        <div class="mx-auto container lg:px-0 px-10 pb-10">
            <div class="flex flex-wrap justify-center items-center -mx-4">
                <!-- Video Column -->
                <div class="w-full px-4 mb-4 md:mb-0">
                    <h2 data-aos="fade-left"
                        class="text-3xl dark:text-white text-primary font-serif lg:text-5xl my-6 lg:py-0">
                        {{ $sectiondata->title }}
                    </h2>
                </div>
            </div>
            <!-- Item 1 -->
            <div class="owl-carousel owl-carousel-2 owl-theme mt-5">
                @foreach ($partners as $partner)
                    <div class="item">
                        <div class="border-2 rounded-xl border-sky-300 dark:border-black bg-gray-50 p-6 text-center hover:border-blue-800">
                            <a href="{{ $partner->url }}" target="_blank" rel="noreferrer">
                                <img data-aos="flip-right" src={{ url('storage/' . $partner->logo) }} class="h-28 object-contain" alt="">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</section>
