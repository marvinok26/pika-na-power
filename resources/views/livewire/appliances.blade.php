<section class="bg-cover bg-top bg-no-repeat py-12" style="background-image: url('/images/bg.png');">
    <div class="mx-auto max-w-7xl lg:px-0 px-10 pb-10">
        <div class="flex flex-wrap justify-center items-center -mx-4">
            <!-- Video Column -->
            <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                <h2  class="text-3xl dark:text-white text-black lg:text-4xl my-6 font-bold lg:py-0">
                    Energy Efficient <br>Appliances
                </h2>
            </div>
            
            <!-- Text Column -->
            <div class="w-full md:w-1/2 px-4">
                <p class="dark:text-white  text-black text-base">Join us on our mission to create a brighter future, leveraging innovative strategies and deep local insights to drive meaningful progress. Together, we can turn your vision into reality.</p>
                
            </div>
        </div>
        <div class="grid mt-8 grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Item 1 -->
            @for ($i = 0; $i < 4; $i++)
            <a href="#" class="border-2 rounded-lg border-blue-400 bg-gray-50 p-6 text-center transition-transform transform hover:scale-105 hover:shadow-lg">
                <div class="flex justify-center mb-4">
                    <img src="/images/cooker.svg" alt="Placeholder Image" class="circle rounded-full p-2">
                </div>
                <h2 class="text-blue-900 text-lg font-bold mb-4">Item Title</h2>
                <div class="text-blue-500 inline-flex items-center">
                    Read More
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </a>
            @endfor
        </div>
    </div>
    
</section>