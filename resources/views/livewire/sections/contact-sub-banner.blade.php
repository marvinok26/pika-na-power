@if ($sectiondata != null)
    <section class="bg-top bg-no-repeat w-full bg-lightblue dark:bg-slate-950 py-5 bg-cover" style="background-image: url('{{ asset('/images/boxbackground.svg') }}');">
        <div class="mx-auto container lg:px-0 px-10 pb-10 ">
            <div class="text-3xl font-serif font-medium text-primary text-center lg:text-3xl my-6 lg:py-0 max-w-3xl mx-auto">
                {{ $sectiondata->title }}
            </div>
            <div class="mx-auto lg:px-0 px-10 border rounded-lg bg-light border-sky-200 dark:border-black">
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ($contacts as $contact)
                        <div class="flex items-start justify-center text-left p-4">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center bg-primary text-white rounded-full mr-2">
                                <img class="w-4 h-4" src="{{ asset($contact->icon) }}" alt=""> 
                            </div>
                            <div>
                                <div class="text-sm font-normal text-link">{{$contact->title}}</div>
                                <p class="text-lg text-primary font-serif font-medium">{{ $contact->subtitle }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> 
    </section>
@endif
