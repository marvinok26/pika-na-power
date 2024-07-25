@if ($sectiondata != null)
    <section class="bg-top bg-no-repeat w-full bg-lightblue dark:bg-slate-950 py-12 bg-cover" style="background-image: url('{{ asset('/images/boxbackground.svg') }}');">
        <div class="mx-auto container">
            <div class="flex flex-wrap justify-center items-center">
                <!-- Video Column -->
                <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                    <h2  class="text-3xl font-serif text-primary lg:text-5xl my-6 font-medium lg:py-0">
                        {{$sectiondata->title}}
                    </h2>
                </div>
                
                <!-- Text Column -->
                <div class="w-full md:w-1/2 px-4">
                    <div class=" text-basic leading-7 dark:text-slate-500 text-base">{!!$sectiondata->description!!}</div>
                </div>
            </div>
            <div class="grid mt-8 grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Item 1 -->
                @foreach ($resources as $resource)
                    <a href={{$resource->url}} class="border-2 rounded-xl dark:border-black border-sky-200 bg-light py-6 px-16 text-center transition-transform transform hover:scale-105 hover:shadow-lg">
                        <div class="flex justify-center mb-4">
                            <div class="rounded-full h-20 w-20 flex items-center justify-center">
                                <img src="/images/testt.svg" alt="Placeholder Image" class="rounded-full p-2">
                            </div>
                        </div>
                        <h2 class="text-primary text-base font-bold mb-4">{{$resource->title}}</h2>
                        <div class="text-link inline-flex items-center">
                            View
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endif
