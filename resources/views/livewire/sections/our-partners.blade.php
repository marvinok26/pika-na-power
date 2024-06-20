@if ($sectiondata != null)
    <section class="py-12">
        <div class="mx-auto max-w-7xl lg:px-0 px-10 pb-10">
            <div class="flex flex-wrap justify-center items-center -mx-4">
                <!-- Video Column -->
                <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                    <h2 class="text-3xl dark:text-white text-black lg:text-4xl my-6 font-bold lg:py-0">
                        {{$sectiondata->title}}
                    </h2>
                </div>

                <!-- Text Column -->
                <div class="w-full md:w-1/2 px-4">
                    {{-- <p class="dark:text-white  text-black text-base">Join us on our mission to create a brighter future, leveraging innovative strategies and deep local insights to drive meaningful progress. Together, we can turn your vision into reality.</p> --}}

                </div>
            </div>
            <!-- Item 1 -->
            <div class="owl-carousel owl-carousel-2 owl-theme mt-5">
                @foreach ($partners as $partner)
                    <div class="item">
                        <div class="border-2 rounded-lg border-blue-400 dark:border-black bg-gray-50 p-6 text-center hover:border-blue-800">
                            <img src={{$partner->logo}} class="h-28 object-contain" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
            
        </div>

    </section>
@endif
