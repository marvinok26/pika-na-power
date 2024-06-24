<section class="bg-cover bg-top bg-no-repeat py-12 bg-[url('bg-light.png')] dark:bg-[url('bg-dark.png')]">
    <div class="mx-auto max-w-6xl lg:px-0 px-10 pb-10">
        <div class="text-center text-lg">
            <h2  class="text-3xl dark:text-white text-[#163466] lg:text-5xl mb-6 font-medium lg:py-0">
                Testimonials
            </h2>
            <div class="owl-carousel owl-carousel-1 owl-theme mt-20">
                @for ($i = 0; $i < 4; $i++)
                <div class="item px-20 ">
                    <p class="dark:text-white">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde quas atque et eum porro, id magnam culpa ducimus commodi odit aliquam! Rem fuga vitae officia repellat, harum vero quia ex!"</p>
                    <h2 class="font-bold dark:text-white text-[#163466] text-3xl mt-8">Halim Salim</h2>
                    <p class="mt-1 dark:text-gray-400">Mombasa</p>
                </div>
                @endfor
            </div>
        </div>
        
    </div> 
</section>