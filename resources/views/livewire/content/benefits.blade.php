<section class="py-8">
    <div class="mx-auto container p-12" >
        <div class="overflow-x-auto">
            <div class="min-w-full">
                <div class="divide-y-2 divide-green-800 grid gap-y-4 grid-cols-1 items-start">
                    @foreach ($benefits as $benefit)
                        <div class=" grid gap-y-4 grid-cols-1 lg:grid-cols-7">
                            <div class="col-span-2">
                                <div class="font-serif text-2xl font-medium text-primary pt-3">{{$benefit->title}}</div>
                            </div>
                            <div class="col-span-5 pt-3">
                                <div class="pl-4 border-l-2 border-green-900 text-base font-sans text-basic">{{$benefit->description}}</div>          
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> 
</section>
