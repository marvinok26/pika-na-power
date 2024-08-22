<div>
    @if ($sectiondata != null)
    <!-- Background Image with Overlay -->
        @if($section->pivot->page_id == 1)
            <div class="relative isolate overflow-hidden lg:px-0">
                <section class="myslider">
                    <div class="owl-carousel owl-theme">
                        <!-- img tile one-->
                        @foreach ($slider as $item)
                            <div class="item">
                                <div class="absolute left-9 z-50 inset-auto lg:px-0 py-16 sm:py-24 lg:pt-52">
                                    <div class="mx-auto w-full container h-full pb-20 md:pb-40">
                                    <!-- Newsroom Heading -->
                                    <h1 class="text-4xl font-serif lg:text-6xl my-6 max-w-3xl font-medium text-white lg:py-0 py-5 ">
                                        {{$item->title}}
                                    </h1>
                                    <div class="text-white max-w-2xl pb-5">{!!$item->description!!}</div></div>
                                </div>
                                <div class="absolute inset-0 bg-black opacity-40"></div>
                                <img src="{{ url('storage/' . $item->image) }}" class="h-full w-full object-cover">
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        @else
            <div class="relative isolate overflow-hidden pt-14 lg:px-0">
                <!-- Background Image with Overlay -->
                <div class="absolute inset-0">
                    <img src={{ url('storage/'.$sectiondata->image) }} alt="" class="h-full w-full object-cover">
                    <div class="absolute inset-0 bg-black opacity-40"></div>
                </div>
                <!-- Content Container -->
                <div class="relative mx-auto container lg:px-0 py-16 sm:py-24 lg:pt-44">
                    <!-- Newsroom Heading -->
                    <h1 data-aos="fade-left" data-aos-duration="1500" class="text-4xl font-serif lg:text-6xl my-6 max-w-3xl font-medium text-white lg:py-0 py-5 ">
                        {{$sectiondata->title}}
                    </h1>
                    <div class="text-white max-w-2xl pb-5">{!!$sectiondata->description!!}</div>
                </div>
            </div>
        @endif
    <!-- Content Container -->
    @endif
</div>