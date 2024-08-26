<div>
    @if ($sectiondata != null)
        <section class="bg-top bg-no-repeat w-full bg-lightblue dark:bg-slate-950 py-12 bg-cover" style="background-image: url('{{ asset('/images/boxbackground.svg') }}');">
            <div class="mx-auto container lg:px-0 px-10 pb-10 space-y-4">
                <div data-aos="fade-left"
                    class="text-3xl text-primary text-center lg:text-3xl font-serif font-medium max-w-2xl mx-auto">
                    {{ $sectiondata->title }}
                </div>
                <div class="mx-auto pt-8 lg:pt-0 lg:px-0 px-10 pb-8 lg:pb-0 border rounded-lg bg-light border-sky-200 dark:border-black">
                    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        @foreach ($stats as $stat)
                            <div class="sm:inline-block lg:flex items-start justify-center text-left p-0 lg:p-8">
                                <div
                                    class="flex-shrink-0 w-28 h-28 md:w-40 md:h-40 lg:w-24 lg:h-24 xl:w-40 xl:h-40 flex items-center justify-center bg-primary text-white rounded-full mr-2">
                                    <div class="counter-container">
                                        <span class="counter text-yellow-400 text-3xl md:text-3xl lg:text-text-4xl  xl:text-6xl " data-end-value="{{ $stat->value }}">0</span>
                                    </div>
                                </div>
                                <div class="pt-5 lg:pt-5 xl:pt-12 pl-4">
                                    <div class="text-xl font-normal text-link">{{ $stat->title }}
                                    </div>
                                    <p class="text-lg text-primary font-serif font-medium">
                                        {{ $stat->subtitle }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
