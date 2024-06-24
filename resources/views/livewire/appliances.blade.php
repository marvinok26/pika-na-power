<div class="py-12 bg-center bg-[url('bg-light.png')] dark:bg-[url('bg-dark.png')]">
    <div class="mx-auto max-w-7xl lg:px-0 px-10 pb-10">
        <div class="flex flex-wrap justify-center items-center -mx-4">
            <!-- Video Column -->
            <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                <h2 class="text-3xl text-[#163466] dark:text-white leading-8 lg:text-4xl my-6 font-medium lg:py-0 max-w-sm">
                    Energy Efficient Appliances
                </h2>
                
            </div>
            
            <!-- Text Column -->
            <div class="w-full md:w-1/2 px-4">
                <p class=" text-black dark:text-white text-base">Join us on our mission to create a brighter future, leveraging innovative strategies and deep local insights to drive meaningful progress. Together, we can turn your vision into reality.</p>
                
            </div>
        </div>
        <div class="grid mt-8 grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Item 1 -->
            @for ($i = 0; $i < 4; $i++)
            <a href="#" class="border-2 rounded-lg border-[#95D6FD] dark:border-gray-600 bg-gray-50 dark:bg-slate-900 p-6 text-center transition-transform transform hover:scale-105 hover:shadow-lg">
                <div class="flex justify-center mb-4">
                    <img src="/images/cooker.svg" alt="Placeholder Image" class="circle rounded-full p-2">
                </div>
                <h2 class="text-[#163466] dark:text-black text-lg dark:text-white font-bold mb-4">Item Title</h2>
                <div class="text-[#828CB4] dark:text-white inline-flex items-center">
                    View
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </a>
            @endfor
        </div>
    </div>
    
</div>