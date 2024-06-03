<section class="py-16">
    <div class="mx-auto max-w-7xl lg:px-0 px-10 pb-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <!-- Video Column -->
            <div class="flex justify-center">
                <div class="relative pb-9/16">
                    <img src="/images/banner.jpeg" class="w-full h-64 md:h-80 lg:h-96 object-cover rounded-lg" alt="">
                </div>
            </div>
            
            <!-- Text Column -->
            <div class="flex flex-col justify-center">
                {{-- <h2 class="text-2xl font-bold mb-4 dark:text-white text-black">Embrace Clean Technologies for a Greener Cooking Future with Pika na Power!</h2> --}}
                @for ($i = 0; $i < 3; $i++)
                <p class="mb-4 dark:text-white text-base text-black">Pika na Power is Kenya Power's flagship campaign aimed at creating awareness towards shifting to cooking with electricity using modern appliances. The Pika na Power initiative also seeks to demystify the common perception that cooking with electricity is expensive.</p>
                @endfor
            </div>
        </div>
    </div> 
</section>
