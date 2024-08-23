<div>
    @if ($sectiondata != null)
    <div class="relative isolate overflow-hidden lg:px-0">
        <!-- Background Image with Overlay -->
        <section class="myslider overflow-hidden">
          <div class="owl-carousel owl-theme">
              <!-- img tile one-->
            <div class="item">
                <div class="absolute left-9 z-50 inset-auto lg:px-0 py-16 sm:py-24 lg:pt-36 xl:pt-52">
                    <div class="mx-auto w-full container h-full pb-20 md:pb-40">
                    <!-- Newsroom Heading -->
                    <h1 class="text-4xl font-serif md:text-4xl xl:text-6xl my-6 max-w-3xl font-medium text-white lg:py-0 py-5 ">
                        {{$sectiondata->title}}
                    </h1>
                    <div class="text-white max-w-2xl pb-5">{!!$sectiondata->description!!}</div></div>
                </div>
                <div class="absolute inset-0 bg-black opacity-40"></div>
                <img src="https://pikapower.belva.co.ke/storage/01J5WGFZQBYQR7EX4FFB5M2Q6X.png" class="h-full w-full object-cover">
            </div>
             <!-- img tile two-->
            <div class="item">
                  <div class="absolute left-9 z-50 inset-auto lg:px-0 py-16 sm:py-24 lg:pt-36 xl:pt-52">
                    <div class="mx-auto w-full container h-full pb-20 md:pb-40">
                    <!-- Newsroom Heading -->
                    <h1 class="text-4xl font-serif md:text-4xl xl:text-6xl  my-6 max-w-3xl font-medium text-white lg:py-0 py-5 ">
                        {{$sectiondata->title}}
                    </h1>
                    <div class="text-white max-w-2xl pb-5">{!!$sectiondata->description!!}</div></div>
                </div>
                <div class="absolute inset-0 bg-black opacity-40"></div>
                <img src="https://pikapower.belva.co.ke/storage/01J5WS9B4C5ZSFXW60479XABE0.png" class="h-full w-full object-cover">
            </div>
              <!-- img tile three-->
            <div class="item">
                  <div class="absolute left-9 z-50 inset-auto lg:px-0 py-16 sm:py-24 lg:pt-36 xl:pt-52">
                    <div class="mx-auto w-full container h-full pb-20 md:pb-40">
                    <!-- Newsroom Heading -->
                    <h1 class="text-4xl font-serif md:text-4xl xl:text-6xl my-6 max-w-3xl font-medium text-white lg:py-0 py-5 ">
                        {{$sectiondata->title}}
                    </h1>
                    <div class="text-white max-w-2xl pb-5">{!!$sectiondata->description!!}</div>
                </div>
                </div>
                <div class="absolute inset-0 bg-black opacity-40"></div>
                <img src="https://pikapower.belva.co.ke/storage/01J5WGFZQBYQR7EX4FFB5M2Q6X.png" class="h-full w-full object-cover">
            </div>
        </div>
        </section>

    </div>
    <!-- Content Container -->
@endif
</div>