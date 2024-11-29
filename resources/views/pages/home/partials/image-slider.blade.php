<div class="swiper image-carousel w-full h-full relative ">

    <button class="image-carousel-prev">
        <x-lucide-arrow-left aria-label="poprzednie udogodnienie" class="w-6 sm:w-10 text-primary-600 absolute left-2 sm:left-12 z-50 top-1/2 -translate-y-1/2 " />

    </button>

    <div class="swiper-wrapper relative">
     
        <div class=" h-full w-full swiper-slide ">
            <img src="{{asset('assets/hero.jpg')}}" alt="" class="w-full h-full object-cover max-h-[800px]">
        </div>
        <div class=" h-full w-full swiper-slide">
            <img src="{{asset('assets/hero-2.jpg')}}" alt="" class="w-full h-full object-cover max-h-[800px]">
        </div>

    </div>

    <button class="image-carousel-next" aria-label="następne udogodnienie">
        <x-lucide-arrow-right class="w-6 sm:w-10 text-primary-600 absolute right-2 sm:right-12 z-50 top-1/2 -translate-y-1/2 " />

    </button>
</div>