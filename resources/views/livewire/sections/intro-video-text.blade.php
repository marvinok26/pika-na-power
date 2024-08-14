@if ($sectiondata != null)
    <div class="py-8" x-data="{ modalIsOpen: false }">
        <div class="mx-auto container lg:px-0 px-10">
            <div class="flex flex-col md:flex-row justify-center items-center gap-14">
                <!-- Video Column -->
                <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0 group">
                    <div class="relative pb-9/16 min-h-96 overflow-hidden bg-cover rounded-xl bg-top transition-all duration-300 group-hover:scale-105"
                        :style="'background-image: url(\'{{ asset('/images/class.png') }}\');' + (siteGrayscale ?
                            'filter: grayscale(100%);' : '')">
                        <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                            <svg @click="modalIsOpen = true" xmlns="http://www.w3.org/2000/svg"
                                class="fill-current text-white w-20 h-20 cursor-pointer" viewBox="0 0 24 24"
                                width="24" height="24" fill="none">
                                <path
                                    d="M17 4H7C4 4 2 6 2 9v6c0 3 2 5 5 5h10c3 0 5-2 5-5V9c0-3-2-5-5-5Zm-3.11 9.03-2.47 1.48c-1 .6-1.82.14-1.82-1.03v-2.97c0-1.17.82-1.63 1.82-1.03l2.47 1.48c.95.58.95 1.5 0 2.07Z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Text Column -->
                <div class="w-full md:w-1/2 px-4 flex flex-col gap-2">
                    <h2 data-aos="fade-left" class="text-2xl mb-4 dark:text-white text-primary font-serif font-medium">
                        {{ $sectiondata->title }}</h2>
                    <div data-aos="fade-left" class="dark:text-white text-base text-slate-800 leading-7">
                        {!! $sectiondata->description !!}</div>
                    <div>
                        <a href={{$sectiondata->button_url}} class="text-white bg-[#163466] mt-8 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-base px-5 py-1.5 text-center inline-flex items-center me-2 mb-2">
                            {{$sectiondata->button_text}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="modalIsOpen"
                @keydown.esc.window="modalIsOpen = false" @click.self="modalIsOpen = false"
                class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8"
                role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
                <!-- Modal Dialog -->
                <div x-show="modalIsOpen"
                    x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
                    x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100"
                    class="flex w-full max-w-3xl flex-col gap-4 rounded-xl border border-slate-300 bg-white text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300 relative overflow-visible">
                    <div
                        class="absolute -top-4 -right-5 w-8 h-8 z-20 bg-brandyellow rounded-md flex items-center justify-center">
                        <button @click="modalIsOpen = false" aria-label="close modal"
                            class=" active:border-none focus:border-none">
                            <svg class="text-white fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none"
                                stroke-width="1.4" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="w-full relative">
                        <iframe class="rounded-xl" width="100%" height="450px" src={{ $sectiondata->video_url }}
                            title="Pika na Power - Electric pressure cooker (EPC)" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endif
