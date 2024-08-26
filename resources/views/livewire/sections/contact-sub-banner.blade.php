<div>
    @if ($sectiondata != null)
    
    <section class="bg-top bg-no-repeat w-full bg-lightblue dark:bg-slate-950 py-6 bg-cover" style="background-image: url('{{ asset('/images/boxbackground.svg') }}'); ">
            <div class="mx-auto container lg:px-0 px-10 flex flex-col gap-5">
                <div data-aos="fade-left" class="text-3xl font-serif font-medium text-primary text-center lg:text-3xl lg:py-0 max-w-3xl mx-auto">
                    {{ $sectiondata->title }}
                </div>
            <div class="mx-auto lg:px-0 px-10 p-5 md:p-8 border rounded-lg bg-light border-sky-200 dark:border-black">
                <div class="block lg:grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ($contacts as $contact)
                        <div class="flex items-start sm:justify-left md:justify-center text-left pr-4 mb-4 lg:mb-0">
                            <div data-aos="fade-left" class="flex-shrink-0 w-12 h-12 flex items-center justify-center bg-primary text-white rounded-full mr-2">
                                <img class="w-4 h-4" src="{{ asset($contact->icon) }}" alt="">
                                </div>
                                <div data-aos="fade-left">
                                    <div class="text-sm font-normal text-link">{{ $contact->title }}</div>
                                    <div class="text-lg text-primary font-serif font-medium">{!! $contact->subtitle !!}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif  
</div>
