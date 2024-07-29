<div class="w-full bg-white dark:bg-slate-950 py-16">
    @if ($sectiondata != null)
        <div class="w-full mx-auto container px-4 sm:px-6 lg:px-0 py-6 flex flex-col gap-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                <div class="col-span-1 flex-grow rounded-lg min-h-96 bg-cover bg-center overflow-hidden bg-light dark:bg-slate-950 border border-sky-300 dark:border-sky-700">
                    <iframe src="{{ $sectiondata->map_url }}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-span-1">
                    <h2 class="text-3xl dark:text-white text-primary font-serif lg:text-5xl my-6 font-medium lg:py-0">{{ $sectiondata->title }}</h2>
                    <form wire:submit.prevent="submitNewMessage" class="grid grid-cols-1 gap-4 dark:bg-slate-950">
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
                        <div class="grid grid-cols-2 gap-4">
                            <div class="col-span-1">
                                <label for="name" class="block font-bold font-sans text-primary mb-2 dark:text-white">Name (required)</label>
                                <input type="text" id="name" placeholder="Your name" wire:model.defer="name" class="w-full bg-inputblue/50 dark:bg-gray-800 border-0 rounded-md p-2 text-black dark:text-white placeholder:text-sm">
                                @error('name')
                                    <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label for="email" class="block font-bold font-sans text-primary mb-2 dark:text-white">Email (required)</label>
                                <input type="email" id="email" placeholder="Your email" wire:model="email" class="w-full bg-inputblue/50 dark:bg-gray-800 border-0 rounded-md p-2 text-black dark:text-white placeholder:text-sm">
                                @error('email')
                                    <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-4">
                            <div class="col-span-1">
                                <label for="phone" class="block font-bold font-sans text-primary mb-2 dark:text-white">Phone (optional)</label>
                                <input type="tel" id="phone" placeholder="Your phone number" wire:model="phone" class="w-full bg-inputblue/50 dark:bg-gray-800 border-0 rounded-md p-2 text-black dark:text-white placeholder:text-sm">
                            </div>
                            <div class="col-span-1">
                                <label for="subject" class="block font-bold font-sans text-primary mb-2 dark:text-white">Subject (optional)</label>
                                <input type="text" id="subject" placeholder="Your subject" wire:model="subject" class="w-full bg-inputblue/50 dark:bg-gray-800 border-0 rounded-md p-2 text-black dark:text-white placeholder:text-sm">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="message" class="block font-bold font-sans text-primary mb-2 dark:text-white">Message (required)</label>
                            <textarea id="message" wire:model.defer="content" placeholder="Your message(include as many details as possible)" rows="4" class="w-full bg-inputblue/50 resize-none placeholder:text-sm dark:bg-gray-800 border-0 rounded-md p-2 text-black dark:text-white"></textarea>
                            @error('content')
                                <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <label class="block font-sans dark:text-white">How would you like us to reach out to you?</label>
                            <div class="flex items-center gap-8 mt-3">
                                <input type="radio" id="phoneOption" wire:model.defer="preferred" value="phone" class="text-blue-500 dark:text-white">
                                <label for="phoneOption" class="text-basic font-sans dark:text-white">Phone</label>
                                <input type="radio" id="emailOption" wire:model.defer="preferred" value="email" class="text-blue-500 dark:text-white">
                                <label for="emailOption" class="text-basic font-sans dark:text-white">Email</label>
                                <input type="radio" id="smsOption" wire:model.defer="preferred" value="sms" class="text-blue-500 dark:text-white">
                                <label for="smsOption" class="text-basic font-sans dark:text-white">SMS</label>
                            </div>
                            @error('preferred')
                                <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <button type="submit" wire:loading.class="opacity-50 cursor-not-allowed" class="text-white bg-primary mt-2 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-base px-5 py-1.5 text-center inline-flex items-center me-2 mb-2">
                                <span wire:loading.remove> Send Message </span>
                                <span wire:loading> Sending... </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
</div>