<section class="bg-cover bg-top bg-no-repeat py-12 bg-[url('bg-light.png')] dark:bg-[url('bg-dark.png')] " >
    <div class="mx-auto max-w-7xl lg:px-0 px-10 pb-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <div class="flex flex-col justify-center">
                <h2  class="text-3xl dark:text-white  text-[#163466] lg:text-4xl my-6 font-medium lg:py-0">
                    Why Pika na Power
                </h2>                
                @for ($i = 0; $i < 3; $i++)
                <p class="mb-4  text-base dark:text-gray-200 text-black">Pika na Power is Kenya Power's flagship campaign aimed at creating awareness towards shifting to cooking with electricity using modern appliances. The Pika na Power initiative also seeks to demystify the common perception that cooking with electricity is expensive.</p>
                @endfor
            </div>
            <div class="flex justify-center">
                <div class="relative pb-9/16">
                    <img src="/images/banner.jpeg" class="w-full h-64 md:h-80 lg:h-96 object-cover rounded-lg" alt="">
                </div>
            </div>
        </div>
    </div>
    <livewire:pika-table/> 
</section>
