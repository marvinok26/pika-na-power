<div class="py-20">
    @if ($sectiondata != null)
        <div class="mx-auto container">
            <div class="flex flex-wrap justify-center items-center">
                <!-- Image Column -->
                <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                    <div class="relative w-full h-full flex justify-center items-center">
                        <img src={{ url('storage/' . $sectiondata->image) }} alt="Cooking Image"
                            class="object-cover rounded-lg shadow-lg">
                    </div>
                </div>

                <!-- Text Column -->
                <div class="w-full md:w-1/2 px-4 flex flex-col gap-8">
                    <div class="text-3xl lg:text-5xl leading-7 font-serif font-medium dark:text-white text-primary">
                        {{ $sectiondata->title }}</div>
                    <div class="dark:text-white text-base text-black">{!! $sectiondata->description !!}</div>

                    <form wire:submit.prevent="bookSlot" class="flex flex-col gap-5">
                        @if(session('success'))
                            <div class="rounded-md bg-green-50 p-4">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                                    </div>
                                    <div class="ml-auto pl-3">
                                        <div class="-mx-1.5 -my-1.5">
                                            <button type="button" class="inline-flex rounded-md bg-green-50 p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">
                                            <span class="sr-only">Dismiss</span>
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                            </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="">
                            <label for="name"
                                class="block font-bold font-sans text-primary mb-2 dark:text-white">Name
                                (required)</label>
                            <input type="text" id="name" placeholder="Your name" wire:model="name"
                                class="w-full bg-inputblue/50 dark:bg-gray-800 border-0 rounded-md p-2 text-black dark:text-white placeholder:text-sm">
                            @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="">
                            <label for="email"
                                class="block font-bold font-sans text-primary mb-2 dark:text-white">Email
                                (required)</label>
                            <input type="email" id="email" placeholder="Your email" wire:model="email"
                                class="w-full bg-inputblue/50 dark:bg-gray-800 border-0 rounded-md p-2 text-black dark:text-white placeholder:text-sm">
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit"
                                class="text-white bg-primary mt-2 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-base px-5 py-1.5 text-center inline-flex items-center me-2 mb-2">
                                {{ $sectiondata->button_text }}
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
</div>
