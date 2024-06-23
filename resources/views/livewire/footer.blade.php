<div class="bg-white dark:bg-gray-950">
    <div class="bg-[#FACA21] py-5">
        <div class="lg:px-0 px-10 mx-auto max-w-7xl">
            <div class="py-2 px-6 sm:flex sm:justify-between items-center">
                <!-- 1/3 Section (Quick Links) -->
                <div class="sm:w-1/4">
                    <h2 class="text-3xl font-bold tracking-tight lg:pb-0 pb-5 text-[#163466] sm:text-4xl">Quick Links
                    </h2>
                </div>

                <nav class="sm:w-3/4 flex flex-col sm:flex-row sm:justify-between sm:items-center">
                    
                       
                        <a href="#" class="flex text-base items-center text-gray-800 font-bold hover:text-gray-900 py-2 px-3">
                            <img src="/images/badge.svg" class="w-12 h-12 mr-3" alt="">
                            Classes
                        </a>
                        <a href="#" class="flex text-base items-center text-gray-800 font-bold hover:text-gray-900 py-2 px-3">
                            <img src="/images/badge.svg" class="w-12 h-12 mr-3" alt="">
                            Articles & Resources
                        </a>
                        <a href="#" class="flex text-base items-center text-gray-800 font-bold hover:text-gray-900 py-2 px-3">
                            <img src="/images/badge.svg" class="w-12 h-12 mr-3" alt="">
                            Events
                        </a>
                   
                </nav>
            </div>
        </div>
    </div>

    <div class="bg-[#163466]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-0 py-6">
            <div class="gap-6 grid grid-cols-2 md:grid-cols-3 lg:grid-col-5 xl:grid-cols-7">
                @for($i = 0; $i < 7; $i++)
                    <div class="col-span-1 group">
                        <a href="#">
                            <div class="flex flex-row items-center gap-3">
                           
                                <div class="flex-shrink-0 w-7 h-7">
                                    <svg class="fill-current text-yellow-400" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"/></svg>
                                </div>
                                <div class="flex-1 group-hover:underline text-white text-base">Facebook</div>
                            </div>      
                        </a>
                        
                    </div>
                @endfor
            </div>
            
        </div>
    </div>
    <div class="mx-auto  max-w-6xl lg:px-0 px-10 py-6">
        <div class="flex flex-row justify-center gap-x-20">
            <div class="w-full sm:w-1/2">
                <h3 class="text-2xl text-[#163466] dark:text-[#FACA21] font-semibold mb-4">Pages</h3>
                <nav class="flex flex-col sm:flex-row justify-normal gap-6">
                    
                        <a href="#" class="text-gray-800 dark:text-white hover:underline hover:underline-offset-4 pe-2 py-1">
                            Home </a>
                            <a href="#" class="text-gray-800 dark:text-white hover:underline hover:underline-offset-4 pe-2 py-1">
                                About Us </a>
                                <a href="#" class="text-gray-800 dark:text-white hover:underline hover:underline-offset-4 pe-2 py-1">
                                    Classes </a>
                                    <a href="#" class="text-gray-800 dark:text-white hover:underline hover:underline-offset-4 pe-2 py-1">
                                        Articles & Resources </a>
                                        <a href="#" class="text-gray-800 dark:text-white hover:underline hover:underline-offset-4 pe-2 py-1">
                                            Events </a>
                   
                </nav>
            </div>

            <div class="w-full sm:w-1/2 sm:mt-0">
                <h3 class="text-2xl text-[#163466] dark:text-[#FACA21] font-semibold mb-4">Links</h3>
                <nav class="flex flex-col sm:flex-row text-start justify-normal gap-6">
                    
                        <a href="#" class="text-gray-800 dark:text-white hover:underline hover:underline-offset-4 pe-2 py-1">Privacy Policy</a>
                        <a href="#" class="text-gray-800 dark:text-white hover:underline hover:underline-offset-4 pe-2 py-1">Terms & Conditions</a>
                        <a href="#" class="text-gray-800 dark:text-white hover:underline hover:underline-offset-4 pe-2 py-1">Contact Us</a>

                    
                </nav>
            </div>
        </div>
    </div>
    <div class="mx-auto lg:px-0 px-10 max-w-6xl border rounded border-blue-200 dark:border-white ">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @for ($i = 1; $i <= 4; $i++)
                <div class="flex items-start justify-center text-left p-4">
                    <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center bg-[#163466] text-white rounded-full mr-2">
                        <span class="text-yellow-400">{{ $i }}</span>
                    </div>
                    <div>
                        <h3 class="text-base  font-semibold mb-1">Title {{ $i }}</h3>
                        <p class="text-base text-[#163466]">Subtitle {{ $i }}</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <div class="text-center py-6 dark:text-white text-gray-600">
        <p>&copy; {{ \Carbon\Carbon::now()->format('Y') }} - All Rights Reserved</p>
    </div>
</div>
