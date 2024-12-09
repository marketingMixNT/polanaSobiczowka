<div class="relative swiper hero-carousel  w-full h-screen ">
    <div class="swiper-wrapper">
        {{-- HEADING --}}

        <h1 class="absolute top-1/2 left-0 right-0 -translate-y-1/2 px-6 md:px-12 text-center text-4xl xs:text-5xl lg:text-7xl     font-heading  text-fontWhite  tracking-wide z-50 text-fontLight font-extralight"
            style="line-height: 1.2">
            Polana Sobiczkowa <br> <span class=" text-sm lg:text-2xl font-thin font-text ">
                Góralska gościnność z nowoczesnym akcentem</span>
        </h1>

        {{-- SLIDES --}}


        <div class="swiper-slide relative w-full h-full ">
            <img src="{{asset('assets/images/mobile/polana-sobiczkowa-42.webp' )}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" class="sm:hidden absolute inset-0 w-full h-full object-cover " />
            <img src="{{asset('assets/images/desktop/polana-sobiczkowa-42.webp' )}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" class="hidden sm:block absolute inset-0 w-full h-full object-cover " />
            <div class="absolute inset-0 bg-black opacity-40"></div>
        </div>

        <div class="swiper-slide relative w-full h-full ">
            <img src="{{asset('assets/images/mobile/polana-sobiczkowa-40.webp' )}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" class="sm:hidden absolute inset-0 w-full h-full object-cover " />
            <img src="{{asset('assets/images/desktop/polana-sobiczkowa-40.webp' )}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" class="hidden sm:block absolute inset-0 w-full h-full object-cover " />
            <div class="absolute inset-0 bg-black opacity-40"></div>
        </div>

        <div class="swiper-slide relative w-full h-full ">
            <img src="{{asset('assets/images/mobile/polana-sobiczkowa-4.webp' )}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" class="sm:hidden absolute inset-0 w-full h-full object-cover " />
            <img src="{{asset('assets/images/desktop/polana-sobiczkowa-4.webp' )}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" class="hidden sm:block absolute inset-0 w-full h-full object-cover " />
            <div class="absolute inset-0 bg-black opacity-40"></div>
        </div>

        <div class="swiper-slide relative w-full h-full ">
            <img src="{{asset('assets/images/mobile/polana-sobiczkowa-9.webp' )}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" class="sm:hidden absolute inset-0 w-full h-full object-cover " />
            <img src="{{asset('assets/images/desktop/polana-sobiczkowa-9.webp' )}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" class="hidden sm:block absolute inset-0 w-full h-full object-cover " />
            <div class="absolute inset-0 bg-black opacity-40"></div>
        </div>

        <div class="swiper-slide relative w-full h-full ">
            <img src="{{asset('assets/images/mobile/polana-sobiczkowa-18.webp' )}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" class="sm:hidden absolute inset-0 w-full h-full object-cover " />
            <img src="{{asset('assets/images/desktop/polana-sobiczkowa-18.webp' )}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" class="hidden sm:block absolute inset-0 w-full h-full object-cover " />
            <div class="absolute inset-0 bg-black opacity-40"></div>
        </div>

        <div class="swiper-slide relative w-full h-full ">
            <img src="{{asset('assets/images/mobile/polana-sobiczkowa-17.webp' )}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" class="sm:hidden absolute inset-0 w-full h-full object-cover " />
            <img src="{{asset('assets/images/desktop/polana-sobiczkowa-17.webp' )}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" class="hidden sm:block absolute inset-0 w-full h-full object-cover " />
            <div class="absolute inset-0 bg-black opacity-40"></div>
        </div>

        {{-- RESERVATION BUTTON --}}

        <x-link-btn
            class="absolute bottom-24 2xl:bottom-44  flex justify-center items-center w-[200px] left-1/2 transform -translate-x-1/2 "
            href="{{route('contact')}}">Zarezerwuj</x-link-btn>

        {{-- ANCHOR --}}
        <a href="#pokoje" class="absolute bottom-3  left-1/2 transform -translate-x-1/2 z-50"
            aria-label="Przejdź do sekcji pokoje">

            <x-lucide-chevron-down class="animate-pulse w-6  text-white" />

        </a>
    </div>
</div>