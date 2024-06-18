@if ($sectiondata != null)
    <section class="bg-cover bg-top bg-no-repeat py-12" style="background-image: url('/images/bg.png');">
        <div class="mx-auto max-w-7xl lg:px-0 px-10 pb-10 ">
            <h2  class="text-3xl  text-[#163466] text-center lg:text-4xl my-6 font-bold lg:py-0">
                {{ $sectiondata->title }}
            </h2>
            <div class="mx-auto lg:px-0 px-10 max-w-6xl border rounded border-blue-200 dark:border-black">
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="flex items-start justify-center text-left p-4">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center bg-[#163466] text-white rounded-full mr-2">
                                <span class="text-yellow-400">{{ $i }}</span>
                            </div>
                            <div>
                                <h3 class="text-base  font-semibold mb-1">Title {{ $i }}</h3>
                                <p class="text-base text-[#163466]">Subtitle {{ $i }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> 
    </section>
@endif
