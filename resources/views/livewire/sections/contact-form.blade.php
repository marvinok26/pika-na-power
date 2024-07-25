@if ($sectiondata != null)
    <div class="w-full bg-white dark:bg-slate-950 py-16">
        <div class="w-full mx-auto container px-4 sm:px-6 lg:px-0 py-6 flex flex-col gap-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">

                <div class="col-span-1 flex-grow rounded-lg min-h-96 bg-cover bg-center overflow-hidden bg-light dark:bg-slate-950 border border-sky-300 dark:border-sky-700">
                    <iframe src={{$sectiondata->map_url}} width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-span-1">
                    <h2  class="text-3xl dark:text-white text-primary font-serif lg:text-5xl my-6 font-medium lg:py-0">
                        {{ $sectiondata->title }}
                    </h2>
                    <form class="grid grid-cols-1 gap-4 dark:bg-slate-950">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="col-span-1">
                                <label for="name" class="block font-bold font-sans text-primary mb-2 dark:text-white">Name (required)</label>
                                <input type="text" id="name" name="name" placeholder="Your name" class="w-full bg-inputblue/50 dark:bg-gray-800 border-0 rounded-md p-2 text-black dark:text-white placeholder:text-sm">
                            </div>
                            <div class="col-span-1">
                                <label for="email" class="block font-bold font-sans text-primary mb-2 dark:text-white">Email (required)</label>
                                <input type="email" id="email" name="email" placeholder="Your email" class="w-full bg-inputblue/50 dark:bg-gray-800 border-0 rounded-md p-2 text-black dark:text-white placeholder:text-sm">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-4">
                            <div class="col-span-1">
                                <label for="phone" class="block font-bold font-sans text-primary mb-2 dark:text-white">Phone (optional)</label>
                                <input type="tel" id="phone" name="phone" placeholder="Your phone number" class="w-full bg-inputblue/50 dark:bg-gray-800 border-0 rounded-md p-2 text-black dark:text-white placeholder:text-sm">
                            </div>
                            <div class="col-span-1">
                                <label for="subject" class="block font-bold font-sans text-primary mb-2 dark:text-white">Subject (optional)</label>
                                <input type="text" id="subject" name="subject" placeholder="Your subject" class="w-full bg-inputblue/50 dark:bg-gray-800 border-0 rounded-md p-2 text-black dark:text-white placeholder:text-sm">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="message" class="block font-bold font-sans text-primary mb-2 dark:text-white">Message (required)</label>
                            <textarea id="message" name="message" placeholder="Your message(include as many details as possible)" rows="4" class="w-full bg-inputblue/50 resize-none placeholder:text-sm dark:bg-gray-800 border-0 rounded-md p-2 text-black dark:text-white"></textarea>
                        </div>
                        <div class="mt-4">
                            <label class="block font-sans dark:text-white">How would you like us to reach out to you?</label>
                            <div class="flex items-center gap-8 mt-3">
                                <input type="radio" id="phoneOption" name="contactOption" value="phone"
                                    class="text-blue-500 dark:text-white">
                                <label for="phoneOption" class="text-basic font-sans dark:text-white">Phone</label>
                                <input type="radio" id="emailOption" name="contactOption" value="email"
                                    class="text-blue-500 dark:text-white">
                                <label for="emailOption" class="text-basic font-sans dark:text-white">Email</label>
                                <input type="radio" id="smsOption" name="contactOption" value="sms"
                                    class="text-blue-500 dark:text-white">
                                <label for="smsOption" class="text-basic font-sans dark:text-white">SMS</label>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="text-white bg-primary mt-2 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-base px-5 py-1.5 text-center inline-flex items-center me-2 mb-2">
                                Send Message
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endif
