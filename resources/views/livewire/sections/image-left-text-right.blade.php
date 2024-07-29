@if ($sectiondata != null)
    <section class="py-16">
        <div class="mx-auto container lg:px-0 pb-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
                <!-- Video Column -->
                <div class="flex justify-center">
                    <div class="relative pb-9/16">
                        <img data-aos="flip-right" src={{ url('storage/' . $sectiondata->image) }}
                            class="w-full h-64 md:h-80 lg:h-96 object-cover rounded-lg" alt="...">
                    </div>
                </div>
                <!-- Text Column -->
                <div class="flex flex-col justify-center">
                    {{-- <h2 class="text-2xl font-bold mb-4 dark:text-white text-black">Embrace Clean Technologies for a Greener Cooking Future with Pika na Power!</h2> --}}
                    <div data-aos="fade-left" class="dark:text-white text-base text-black font-sans leading-7">
                        {!! $sectiondata->description !!}</div>
                </div>
            </div>
        </div>
    </section>
@endif
