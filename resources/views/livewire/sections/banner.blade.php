<div>
    @if ($sectiondata != null)
        <div class="relative isolate overflow-hidden lg:px-0">
            <!-- Background Image with Overlay -->
            <section class="myslider overflow-hidden">
                <div class="owl-carousel owl-theme">
                    @if ($slider && count($slider) > 0)
                        @foreach ($slider as $slide)
                            <div class="item">
                                <div class="absolute left-9 z-50 inset-auto lg:px-0 py-16 sm:py-24 lg:pt-36 xl:pt-52">
                                    <div class="mx-auto w-full container h-full pb-20 md:pb-40">
                                        <!-- Newsroom Heading -->
                                        <h1
                                            class="text-4xl font-serif md:text-4xl xl:text-6xl my-6 max-w-3xl font-medium text-white lg:py-0 py-5 ">
                                            {{ $slide->title }}
                                        </h1>
                                        <div class="text-white max-w-2xl pb-5">{!! $slide->description !!}</div>
                                    </div>
                                </div>
                                <div class="absolute inset-0 bg-black opacity-40"></div>
                                <img src="{{ $slide->image ? asset('storage/' . $slide->image) : 'https://pikapower.belva.co.ke/storage/01J5WGFZQBYQR7EX4FFB5M2Q6X.png' }}"
                                    class="h-[540px] w-full object-cover">
                            </div>
                        @endforeach
                    @else
                        <div class="item">
                            <div class="absolute left-9 z-50 inset-auto lg:px-0 py-16 sm:py-24 lg:pt-36 xl:pt-52">
                                <div class="mx-auto w-full container h-full pb-20 md:pb-40">
                                    <!-- Newsroom Heading -->
                                    <h1
                                        class="text-4xl font-serif md:text-4xl xl:text-6xl my-6 max-w-3xl font-medium text-white lg:py-0 py-5 ">
                                        {{ $sectiondata->title }}
                                    </h1>
                                    <div class="text-white max-w-2xl pb-5">{!! $sectiondata->description !!}</div>
                                </div>
                            </div>
                            <div class="absolute inset-0 bg-black opacity-40"></div>
                            <img src="https://pikapower.belva.co.ke/storage/01J5WGFZQBYQR7EX4FFB5M2Q6X.png"
                                class="h-full w-full object-cover">
                        </div>
                    @endif

                </div>
            </section>

        </div>
        <!-- Content Container -->
    @endif
</div>
