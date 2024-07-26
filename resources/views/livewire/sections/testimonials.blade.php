@if ($sectiondata != null)
    <section class="bg-top bg-no-repeat w-full bg-lightblue dark:bg-slate-950 py-12 bg-cover" style="background-image: url('{{ asset('/images/boxbackground.svg') }}');">
        <div class="mx-auto w-full max-w-5xl lg:px-0 px-10 pb-10">
            <div class="text-center text-lg flex flex-col gap-6">
                <h2  class="text-3xl text-primary dark:text-white lg:text-5xl font-serif font-medium lg:py-0">
                    {{$sectiondata->title}}
                </h2>
                <div class="owl-carousel owl-carousel-1 owl-theme">
                    @foreach ($testimonials as $testimonial)
                        <div class="item px-20">
                            <div class="text-base text-primary">{!!$testimonial->content!!}</div>
                            <div class="font-medium text-primary font-serif text-3xl mt-8">{{$testimonial->author}}</div>
                            <p class="mt-1 text-primary">{{$testimonial->author_location}}</p>
                        </div>
                    @endforeach
                </div>
            </div> 
        </div> 
    </section>
@endif