<section class="bg-cover bg-top bg-no-repeat py-12" style="background-image: url('/images/bg.png');">
    <div class="mx-auto max-w-6xl lg:px-0 px-10 pb-10">
        @if ($sectiondata != null)
            <div class="text-center text-lg">
                <h2  class="text-3xl text-[#163466] lg:text-5xl mb-6 font-bold lg:py-0">
                    {{$sectiondata->title}}
                </h2>
                <div class="owl-carousel owl-carousel-1 owl-theme mt-20">
                    @foreach ($testimonials as $testimonial)
                        <div class="item px-20 ">
                            <div class="">{{$testimonial->content}}</div>
                            <h2 class="font-bold text-[#163466] text-3xl mt-8">{{$testimonial->author}}</h2>
                            <p class="mt-1">{{$testimonial->author_location}}</p>
                        </div>
                    @endforeach
                </div>
            </div> 
        @endif        
    </div> 
</section>

