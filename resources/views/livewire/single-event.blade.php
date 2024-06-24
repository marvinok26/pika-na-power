<div class="bg-white dark:bg-gray-950 bg-center py-12 sm:py-16">
    <div class="mx-auto lg:px-0 px-10 max-w-7xl">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($posts as $post)
                <a href="{{ $post->url }}" data-lightbox="roadtrip" class="h-auto max-w-full rounded-lg cursor-pointer transition-transform duration-300 ease-in-out hover:scale-105">
                    <img src="{{ $post->url }}" alt="" class="h-auto max-w-full rounded-lg">
                </a>
            @endforeach
        </div>
    </div>
    <div class="py-20 mx-auto text-center">
        <a href="#" wire:navigate
           class="text-white bg-[#163466] focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-base px-5 py-2.5 text-center inline-flex items-center me-2 mb-2">
            View All Events
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </a>
    </div>
</div>
