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
                    @for ($i = 1; $i <= 4; $i++)
                        <a href="#" class="flex text-base items-center text-gray-800 font-bold hover:text-gray-900 py-2 px-3">
                            <img src="/badge.svg" class="w-12 h-12 mr-3" alt="">
                            Quick Link {{ $i }}
                        </a>
                    @endfor
                </nav>
            </div>
        </div>
    </div>

    <div class="bg-[#163466]">
        <div class="mx-auto lg:px-0 px-20  max-w-6xl p-6">
            <div class="grid grid-cols-2 mx-auto text-center sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-5">
                @for ($i = 1; $i <= 8; $i++)
                    <a href="#" class="flex items-center">
                        <span class="ml-2 text-base text-white">Social {{ $i }}</span>
                    </a>
                @endfor
            </div>
        </div>
    </div>
    <div class="mx-auto  max-w-6xl lg:px-0 px-10 py-6">
        <div class="flex flex-row justify-center gap-x-20">
            <div class="w-full sm:w-1/2">
                <h3 class="text-lg text-[#163466] dark:text-[#FACA21] font-semibold mb-4">Categories</h3>
                <nav class="flex flex-col sm:flex-row justify-normal gap-2">
                    @for ($i = 1; $i <= 5; $i++)
                        <a href="#" class="text-gray-800 dark:text-white hover:underline hover:underline-offset-4 pe-2 py-1">
                            Category {{ $i }}</a>
                    @endfor
                </nav>
            </div>

            <div class="w-full sm:w-1/2 sm:mt-0">
                <h3 class="text-lg text-[#163466] dark:text-[#FACA21] font-semibold mb-4">Links</h3>
                <nav class="flex flex-col sm:flex-row text-start justify-normal gap-2">
                    @for ($i = 1; $i <= 5; $i++)
                        <a href="#" class="text-gray-800 dark:text-white hover:underline hover:underline-offset-4 pe-2 py-1">Link {{ $i }}</a>
                    @endfor
                </nav>
            </div>
        </div>
    </div>
    <div class="mx-auto lg:px-0 px-10 max-w-6xl border rounded border-blue-200 dark:border-white ">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            @for ($i = 1; $i <= 5; $i++)
                <div class="flex items-start text-left p-4">
                    <div>
                        <h3 class="text-base dark:text-white font-semibold mb-1">Title {{ $i }}</h3>
                        <p class="text-base text-[#163466]">Subtitle {{ $i }}</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <div class="text-center py-4 dark:text-white text-gray-600">
        <p>&copy; {{ \Carbon\Carbon::now()->format('Y') }} - All Rights Reserved</p>
    </div>
</div>
