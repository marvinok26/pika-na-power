@if ($sectiondata != null)
    <section class="bg-cover bg-top bg-no-repeat py-12" style="background-image: url('/images/bg.png');">
        <div class="mx-auto max-w-7xl lg:px-0 px-10 pb-10">
            <div class="flex flex-wrap justify-center items-center -mx-4">
                <!-- Video Column -->
                <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                    <h2  class="text-3xl  text-black lg:text-4xl my-6 font-bold lg:py-0">
                        {{$sectiondata->title}}
                    </h2>
                </div>
                <!-- Text Column -->
                <div class="w-full md:w-1/2 px-4">
                    <div class=" text-black text-base">{!!$sectiondata->description!!}</div>   
                </div>
            </div>
            <div class="grid mt-8 grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Item 1 -->
                @foreach ($appliances as $appliance)
                    <a href={{$appliance->button_url}} class="border-2 rounded-lg border-blue-400 dark:border-black bg-gray-50 p-6 text-center transition-transform transform hover:scale-105 hover:shadow-lg">
                        <div class="flex justify-center mb-4">
                            <img src={{ url('storage/'.$appliance->image) }} alt="Placeholder Image" class="circle rounded-full p-2">
                        </div>
                        <h2 class="text-blue-900 dark:text-black text-lg font-bold mb-4">{{$appliance->title}}</h2>
                        <div class="text-blue-500  dark:text-black inline-flex items-center">
                            {{$appliance->button_text}}
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