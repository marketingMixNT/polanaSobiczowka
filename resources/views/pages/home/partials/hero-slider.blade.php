<div class="relative swiper hero-carousel  w-full h-screen ">
    <div class="swiper-wrapper">
        {{-- HEADING --}}

        <h1 class="absolute top-1/2 left-0 right-0 -translate-y-1/2 px-6 md:px-12 text-center text-4xl xs:text-5xl lg:text-7xl     font-heading  text-fontWhite  tracking-wide z-50 text-fontLight font-extralight"
            style="line-height: 1.2">
            Polana Sobiczkowa <br> <span class=" text-sm lg:text-2xl font-thin font-text ">
                Góralska gościnność z nowoczesnym akcentem</span>
        </h1>

        {{-- SLIDES --}}



        {{-- @foreach ($home->slider_images as $slide) --}}


        
        <div class="swiper-slide relative w-full h-full ">


            <img src="{{asset('assets/hero.jpg' )}}" alt=""
                class="absolute inset-0 w-full h-full object-cover " />

            <div class="absolute inset-0 bg-black opacity-40"></div>
        </div>
        <div class="swiper-slide relative w-full h-full ">


            <img src="{{asset('assets/hero-2.jpg' )}}" alt=""
                class="absolute inset-0 w-full h-full object-cover " />

            <div class="absolute inset-0 bg-black opacity-40"></div>
        </div>
        
        {{-- @endforeach --}}


        {{-- RESERVATION PANEL --}}

        

    <x-link-btn class="absolute bottom-12 sm:bottom-24 2xl:bottom-44 left-0 right-0 flex justify-center items-center w-[200px] 2xl:left-1/2 2xl:transform 2xl:-translate-x-1/2 " href="">Zarezerwuj</x-link-btn>
      
    <a href="" class="border border-accent-400 px-8 py-3 text-sm rounded-3xl bg-primary-400 text-fontDark hover:bg-accent-400 hover:text-fontLight duration-500 absolute bottom-12 sm:bottom-24 2xl:bottom-44 left-0 right-0 flex justify-center items-center w-[200px] 2xl:left-1/2 2xl:transform 2xl:-translate-x-1/2 ">Zarezerwuj</a>
    

        {{-- ANCHOR --}}
        <a href="#o-nas" class="absolute bottom-3  left-1/2 transform -translate-x-1/2 z-50"
            aria-label="Przejdź do sekcji o nas ">

            <x-lucide-chevron-down class="animate-pulse w-6  text-white" />




        </a>
    </div>
</div>