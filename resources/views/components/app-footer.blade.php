<div class="bg-white dark:bg-gray-950">

    <div class="bg-brandyellow">
        <div class="container mx-auto px-4 sm:px-6 lg:px-0 py-6 flex flex-col lg:flex-row gap-y-6 gap-x-10 justify-center items-center lg:justify-between">
            <div class="text-3xl lg:text-5xl font-medium font-serif text-primary block lg:hidden">
                Quick Links
            </div>
            <div class="flex flex-wrap lg:flex-row gap-y-6 gap-x-10 flex-1 justify-between items-center lg:justify-between">
                <div class="text-5xl font-medium font-serif text-primary hidden lg:block">
                    Quick Links
                </div>
                @if(!empty($quickLinks))
                    @foreach($quickLinks as $quicklink)
                        {{-- @if($quicklink->isExternal == 1)
                            <a href="{{$quicklink->external_link}}" target="_blank" class="flex flex-row gap-4 items-center">
                                <div class="flex flex-shrink-0 w-8 h-8 lg:w-12 lg:h-12 bg-primary items-center justify-center rounded-full">
                                    <div class="w-6 h-6 bg-brandyellow flex items-center justify-center rounded-full">
                                        <svg class="w-4 h-4 text-primary stroke-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path d="M14.43 5.93 20.5 12l-6.07 6.07M3.5 12h16.83" stroke="" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </div>
                                <div class="flex-1 items-center font-semibold">
                                    {{$quicklink->name}}
                                </div>
                            </a>
                        @else --}}
                            <a href="/{{$quicklink['url']}}" class="flex flex-row gap-4 items-center">
                                <div class="flex flex-shrink-0 w-8 h-8 lg:w-12 lg:h-12 bg-primary items-center justify-center rounded-full">
                                    <div class="w-6 h-6 bg-brandyellow flex items-center justify-center rounded-full">
                                        <svg class="w-4 h-4 text-primary stroke-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path d="M14.43 5.93 20.5 12l-6.07 6.07M3.5 12h16.83" stroke="" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </div>
                                <div class="flex-1 items-center font-semibold">
                                    {{$quicklink['title']}}
                                </div>
                            </a>
                        {{-- @endif --}}
                    @endforeach
                @endif
            </div>
        </div>
    </div>


    <div class="bg-primary">
        <div class="container mx-auto px-4 sm:px-6 lg:px-0 py-6">
            <div class="gap-6 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-col-5 xl:grid-cols-6 items-center justify-center">
                @if(!empty($socials))
                @foreach($socials as $sociallink)
                    <div class="col-span-1 flex items-center justify-center">
                        <a href="{{$sociallink->url}}" target="_blank" class="flex flex-row items-center gap-3">
                            <div class="flex-shrink-0 w-6 h-6">
                                <img class="w-6 h-6" src="{{ asset($sociallink->icon) }}" alt="...">
                            </div>
                            <div class="flex-1 text-white text-sm">{{$sociallink->name}}</div>
                        </a>
                    </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="bg-light dark:bg-slate-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-0 py-6">
            <div class="gap-6 flex flex-wrap lg:flex-row justify-between">
                <div class="col-span-1">
                    <div class="flex flex-col items-start lg:items-start gap-y-2.5">
                        <p class="text-primary dark:text-slate-100 text-lg font-serif font-medium">Pages</p>
                        <div class="flex flex-wrap lg:flex-row gap-x-5 gap-y-3 text-primary dark:text-slate-400 text-sm">
                            @if(!empty($footerPages))
                                @foreach($footerPages as $child)
                                    <a href="{{ $child['url'] }}" class="text-gray-800 dark:text-white hover:underline hover:underline-offset-4 pe-2 py-1">
                                        {{ $child['title'] }}
                                    </a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-span-1">
                    <div class="flex flex-col items-start lg:items-start gap-y-2.5">
                        <p class="text-primary dark:text-slate-100 text-lg font-serif font-medium">Links</p>
                        <div class="flex flex-wrap lg:flex-row gap-x-5 gap-y-3 text-primary dark:text-slate-400 text-sm">
                            @if(!empty($footerLinks))
                                @foreach($footerLinks as $child)
                                    <a href="{{ $child['url'] }}" class="text-gray-800 dark:text-white hover:underline hover:underline-offset-4 pe-2 py-1">
                                        {{ $child['title'] }}
                                    </a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-4 py-4 rounded-xl border border-sky-300 dark:border-sky-900">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:flex lg:flex-row items-center gap-4 justify-between">
                @if(!empty($contacts))
                    @foreach($contacts as $footercontact)
                        <div class="col-span-1">
                            <div class="flex items-center flex-row">
                                <div class="flex flex-shrink-0 w-9 h-9 bg-primary items-center justify-center rounded-full">
                                    <img class="w-4 h-4" src="{{ asset($footercontact->icon) }}" alt="...">
                                </div>
                                <div class="pl-2 flex-1">
                                    <p class=" text-sm font-serif text-gray-600 dark:text-slate-300">{{ $footercontact->title }}</p>
                                    <div class="font-medium font-sans text-base transform hover:scale-105 transition-all duration-300 text-primary dark:text-slate-500">{!! $footercontact->subtitle !!}</div>
                                </div>
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

</div>
