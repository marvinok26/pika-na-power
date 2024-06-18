@if ($sectiondata != null)
    <section class="bg-cover bg-top bg-no-repeat py-12" style="background-image: url('/images/bg.png');">
        <div class="mx-auto max-w-7xl lg:px-0 px-10 pb-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
                <div class="flex flex-col justify-center">
                    <h2  class="text-3xl  text-[#163466] lg:text-4xl my-6 font-bold lg:py-0">
                        {{$sectiondata->title}}
                    </h2>                
                    <div class="mb-4  text-base text-black">{!!$sectiondata->description!!}</div>
                </div>
                <div class="flex justify-center">
                    <div class="relative pb-9/16">
                        <img src={{$sectiondata->image}} class="w-full h-64 md:h-80 lg:h-96 object-cover rounded-lg" alt="">
                    </div>
                </div>
            </div>
        </div>
        @if ($benefits != null)
            <livewire:content.benefits :benefits="$benefits"/>
        @endif
    </section>
@endif
