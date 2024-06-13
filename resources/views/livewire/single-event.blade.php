<div class="bg-white dark:bg-gray-950 bg-center py-12 sm:py-16">
    <div class="mx-auto lg:px-0 px-10 max-w-7xl">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($posts as $index => $post)
                <div>
                    <img class="h-auto max-w-full rounded-lg cursor-pointer transition-transform duration-300 ease-in-out hover:scale-105"
                         wire:click="selectPost({{ $index }})" src="{{ $post->url }}" alt="">
                </div>
            @endforeach
        </div>

        @if ($showModal)
            <div x-data="{ showModal: @entangle('showModal') }" x-show="showModal"
                 class="fixed z-50 inset-0 overflow-y-auto flex items-center justify-center">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true" x-show="showModal"
                     x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-60" x-transition:leave="ease-in duration-300"
                     x-transition:leave-start="opacity-60" x-transition:leave-end="opacity-0">
                    <div class="absolute inset-0 bg-black dark:bg-gray-950 opacity-60"></div>
                </div>
                <div class="relative z-20 bg-white dark:bg-gray-800 rounded-lg max-w-3xl mx-auto p-4"
                     x-show="showModal" x-transition:enter="transform transition ease-in-out duration-300"
                     x-transition:enter-start="scale-90 opacity-0" x-transition:enter-end="scale-100 opacity-100"
                     x-transition:leave="transform transition ease-in-out duration-300"
                     x-transition:leave-start="scale-100 opacity-100" x-transition:leave-end="scale-90 opacity-0">
                    <!-- Image and Navigation Buttons Container -->
                    <div class="relative flex items-center justify-center">
                        <!-- Navigation Buttons -->
                        <div class="absolute left-0">
                            <button wire:click="previousPost"
                                    class="px-4 py-2 text-base font-medium text-white bg-gray-800 dark:bg-gray-900 border border-transparent rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-900">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white dark:text-gray-300" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 19l-7-7 7-7"/>
                                </svg>
                            </button>
                        </div>
                        <img class="max-w-full object-cover rounded-t-lg mx-auto" src="{{ $posts[$selectedPostIndex]->url }}" alt="">
                        <div class="absolute right-0">
                            <button wire:click="nextPost"
                                    class="px-4 py-2 text-base font-medium text-white bg-gray-800 dark:bg-gray-900 border border-transparent rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-900">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white dark:text-gray-300" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!-- Close Button -->
                    <button wire:click="closePopup"
                            class="absolute top-0 right-0 mt-4 mr-4 flex items-center justify-center w-12 h-12 bg-white dark:bg-gray-700 text-black dark:text-white rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        @endif
    </div>
</div>
