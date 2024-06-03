<section class="bg-white dark:bg-slate-950 bg-top bg-no-repeat py-12" >
    <div class="mx-auto max-w-7xl lg:px-0 px-10 pb-10">
        <div class="flex flex-wrap justify-center items-center -mx-4">
            <!-- Video Column -->
            <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                <h2  class="text-3xl dark:text-white text-[#163466] lg:text-4xl my-6 font-bold lg:py-0">
                    Our Shops
                </h2>
            </div>
            
            <!-- Text Column -->
            <div class="w-full md:w-1/2 px-4">
                <p class="dark:text-white  text-black text-base">Purchase the appliances all at leading supermarkets and retail outlets, including:</p>
                
            </div>
        </div>
        <div class="grid mt-8 grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Item 1 -->
            @for ($i = 0; $i < 8; $i++)
            <a href="#"class="border-2 rounded-lg dark:border-black border-blue-400 text-center bg-gray-50 p-6 text-center hover:border-blue-800">
                <img src="/images/logo.svg" class="h-28 mx-auto text-center object-contain" alt="">
            </a>
            @endfor
        </div>
    </div>
    
</section>