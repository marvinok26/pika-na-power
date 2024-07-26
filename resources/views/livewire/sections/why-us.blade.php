@if ($sectiondata != null)
    <section class="bg-top bg-no-repeat w-full bg-lightblue dark:bg-slate-950 py-12 bg-cover"
        style="background-image: url('{{ asset('/images/boxbackground.svg') }}');">
        <div class="mx-auto container pb-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
                <div class="flex flex-col justify-center gap-6">
                    <div data-aos="fade-left" class="text-3xl font-serif text-primary lg:text-5xl lg:py-0">
                        {{ $sectiondata->title }}
                    </div>
                    <div data-aos="fade-left" class="font-sans leading-7 text-base text-black">{!! $sectiondata->description !!}
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="relative">
                        <img data-aos="flip-right" src={{ url('storage/' . $sectiondata->image) }}
                            class="w-full min-h-96 object-cover rounded-lg" alt="...">
                    </div>
                </div>
            </div>
        </div>
        @if ($benefits != null)
            <livewire:content.benefits :benefits="$benefits" />
        @endif
    </section>
@endif
