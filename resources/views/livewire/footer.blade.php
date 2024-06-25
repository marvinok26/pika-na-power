<div class="bg-white dark:bg-gray-950">
    <div class="bg-[#FACA21] py-5">
       <div class="lg:px-0 px-10 mx-auto max-w-7xl">
            <div class="py-2 sm:flex sm:justify-between items-center">
                <!-- 1/3 Section (Quick Links) -->
                <div class="sm:w-1/4">
                    <h2 class="text-4xl font-normal tracking-tight lg:pb-0 pb-5 text-[#163466] sm:text-5xl">Quick Links
                    </h2>
                </div>
                <nav class="sm:w-3/4 flex flex-col sm:flex-row sm:justify-between sm:items-center">
                    @if(!empty($quickLinks))
                        @foreach($quickLinks as $quickLink)
                            <a href="{{ $quickLink['url'] }}" class="flex text-base items-center text-gray-800 font-bold hover:text-gray-900 py-2 px-3">
                                <img src="/images/badge.svg" class="w-12 h-12 mr-3" alt="">
                                {{ $quickLink['title'] }}
                            </a>
                        @endforeach
                    @endif
                </nav>
            </div>
        </div>
    </div>
    <div class="bg-[#163466]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-0 py-6">
            <div class="gap-6 grid grid-cols-2 md:grid-cols-3 lg:grid-col-5 xl:grid-cols-7">
                @if(!empty($socials))
                    @foreach($socials as $social)
                        <div class="col-span-1 group">
                            <a href="{{ $social->url }}" target="_blank" rel="noreferrer">
                                <div class="flex flex-row items-center gap-3">
                                    <img src="{{ asset($social->icon) }}" alt="">                                    
                                    <div class="flex-1 group-hover:underline text-white text-base">{{ $social['name'] }}</div>
                                </div>      
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>  
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-0 py-6">
        <div class="gap-6 flex flex-wrap lg:flex-row justify-between">
            <div class="col-span-1">
                <div class="flex flex-col items-start lg:items-start gap-y-2.5">
                    <h3 class="text-[#163466] font-semibold	 dark:text-slate-100 text-2xl">Pages</h3>
                    <div class="flex flex-wrap lg:flex-row gap-x-5 gap-y-3 text-primary dark:text-slate-400 text-base">

                        @if(!empty($footerPages))
                        @foreach($footerPages as $footerPage)
                            <a href="{{ $footerPage['url'] }}" class="text-gray-800 dark:text-white hover:underline hover:underline-offset-4 pe-2 py-1">
                                {{ $footerPage['title'] }}
                            </a>
                        @endforeach
                    @endif
                        
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="flex flex-col items-start lg:items-start gap-y-2.5">
                    <h3 class="text-[#163466] font-semibold	 dark:text-slate-100 text-2xl">Links</h3>
                    <div class="flex flex-wrap lg:flex-row gap-x-5 gap-y-3 text-primary dark:text-slate-400 text-sm">
                        @if(!empty($footerLinks))
                        @foreach($footerLinks as $footerLink)
                            <a href="{{ $footerLink['url'] }}" class="text-gray-800 text-base dark:text-white hover:underline hover:underline-offset-4 pe-2 py-1">
                                {{ $footerLink['title'] }}
                            </a>
                        @endforeach
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mx-auto lg:px-0 px-10 max-w-7xl border rounded border-blue-200 dark:border-white ">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @if(!empty($contacts))
                @foreach($contacts as $contact)
                    <div class="flex items-start justify-center text-left p-4">
                        <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center bg-[#163466] text-white rounded-full mr-2">
                            {{-- <span class="text-yellow-400">{{ $contact['icon'] }}</span> --}}
                            <img src="{{ asset($contact->icon) }}" alt="">                                    
                        </div>
                        <div>
                            <h3 class="text-sm dark:text-white text-[#646971] font-normal	 mb-1">{{ $contact->title }}</h3>
                            <p class="text-base font-medium	 dark:text-gray-400 text-[#163466]">{{ $contact->subtitle }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="text-center py-6 dark:text-white text-gray-600">
        <p>&copy; {{ \Carbon\Carbon::now()->format('Y') }} - All Rights Reserved</p>
    </div>
</div>
