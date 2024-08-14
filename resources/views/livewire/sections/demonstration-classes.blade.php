@if ($sectiondata != null)
    <div class="py-6">
        <div class="mx-auto container">
            <div class="flex flex-wrap justify-center items-center">
                <!-- Image Column -->
                <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                    <div class="relative w-full h-full flex justify-center items-center">
                        <img data-aos="flip-right" src={{ url('storage/' . $sectiondata->image) }} alt="Cooking Image"
                            class="object-cover rounded-lg shadow-lg">
                    </div>
                </div>

                <!-- Text Column -->
                <div class="w-full md:w-1/2 px-4 flex flex-col gap-8">
                    <div data-aos="fade-left"
                        class="text-3xl lg:text-5xl leading-7 font-serif font-medium dark:text-white text-primary">
                        {{ $sectiondata->title }}</div>
                    <div data-aos="fade-left" class="dark:text-white text-base text-black">{!! $sectiondata->description !!}</div>

                    <form class="flex flex-col gap-5">
                        <div class="">
                            <label for="name"
                                class="block font-bold font-sans text-primary mb-2 dark:text-white">Name
                                (required)</label>
                            <input type="text" id="name" name="name" placeholder="Your name"
                                class="w-full bg-inputblue/50 dark:bg-gray-800 border-0 rounded-md p-2 text-black dark:text-white placeholder:text-sm">
                        </div>
                        <div class="">
                            <label for="email"
                                class="block font-bold font-sans text-primary mb-2 dark:text-white">Email
                                (required)</label>
                            <input type="email" id="email" name="email" placeholder="Your email"
                                class="w-full bg-inputblue/50 dark:bg-gray-800 border-0 rounded-md p-2 text-black dark:text-white placeholder:text-sm">
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
    </div>
@endif
