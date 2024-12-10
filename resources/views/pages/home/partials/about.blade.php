<x-section>
    <x-container class="max-w-[1700px] space-y-24 ">

        <x-text-image-block-container>

            {{-- images --}}
            <div class="min-h-[400px]">
                <div class="swiper about-image-carousel h-full ">
                    <div class="swiper-wrapper ">

                        {{-- item --}}
                        <div class=" h-full w-full swiper-slide">
                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-9.webp')}}"
                                alt="wnętrze Apartamentu Polana Sobiczkowa w Kościelisku"
                                class="sm:hidden w-full h-full object-cover">
                            <img src="{{asset('assets/img/desktop/polana-sobiczkowa-9.webp')}}"
                                alt="wnętrze Apartamentu Polana Sobiczkowa w Kościelisku"
                                class="hidden sm:block  w-full h-full object-cover">
                        </div>
                        {{-- item --}}
                        <div class=" h-full w-full swiper-slide">
                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-12.webp')}}"
                                alt="wnętrze Apartamentu Polana Sobiczkowa w Kościelisku"
                                class="sm:hidden w-full h-full object-cover">
                            <img src="{{asset('assets/img/desktop/polana-sobiczkowa-12.webp')}}"
                                alt="wnętrze Apartamentu Polana Sobiczkowa w Kościelisku"
                                class="hidden sm:block  w-full h-full object-cover">
                        </div>
                        {{-- item --}}
                        <div class=" h-full w-full swiper-slide">
                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-15.webp')}}"
                                alt="wnętrze Apartamentu Polana Sobiczkowa w Kościelisku"
                                class="sm:hidden w-full h-full object-cover">
                            <img src="{{asset('assets/img/desktop/polana-sobiczkowa-15.webp')}}"
                                alt="wnętrze Apartamentu Polana Sobiczkowa w Kościelisku"
                                class="hidden sm:block  w-full h-full object-cover">
                        </div>
                        {{-- item --}}
                        <div class=" h-full w-full swiper-slide">
                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-17.webp')}}"
                                alt="wnętrze Apartamentu Polana Sobiczkowa w Kościelisku"
                                class="sm:hidden w-full h-full object-cover">
                            <img src="{{asset('assets/img/desktop/polana-sobiczkowa-17.webp')}}"
                                alt="wnętrze Apartamentu Polana Sobiczkowa w Kościelisku"
                                class="hidden sm:block  w-full h-full object-cover">
                        </div>
                        {{-- item --}}
                        <div class=" h-full w-full swiper-slide">
                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-23.webp')}}"
                                alt="wnętrze Apartamentu Polana Sobiczkowa w Kościelisku"
                                class="sm:hidden w-full h-full object-cover">
                            <img src="{{asset('assets/img/desktop/polana-sobiczkowa-23.webp')}}"
                                alt="wnętrze Apartamentu Polana Sobiczkowa w Kościelisku"
                                class="hidden sm:block  w-full h-full object-cover">
                        </div>
                        {{-- item --}}
                        <div class=" h-full w-full swiper-slide">
                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-25.webp')}}"
                                alt="wnętrze Apartamentu Polana Sobiczkowa w Kościelisku"
                                class="sm:hidden w-full h-full object-cover">
                            <img src="{{asset('assets/img/desktop/polana-sobiczkowa-25.webp')}}"
                                alt="wnętrze Apartamentu Polana Sobiczkowa w Kościelisku"
                                class="hidden sm:block  w-full h-full object-cover">
                        </div>



                    </div>
                </div>
                <div class="flex justify-center gap-6 mt-3 px-2">

                    <button class="about-image-prev">
                        <x-lucide-arrow-left-circle class="size-6 text-secondary-400" />

                    </button>
                    <button class="about-image-next">
                        <x-lucide-arrow-right-circle class="size-6 text-secondary-400" />

                    </button>
                </div>
            </div>

            {{-- text --}}
            <x-text-image-block-text>


                <x-subheading-block class="text-primary-500">
                    Niezapomniane chwile w Kościelisku
                </x-subheading-block>

                <x-heading-block>
                    Góralska gościnność i wygoda
                </x-heading-block>

                <x-text-block>
                    <strong>Polana Sobiczkowa</strong> to miejsce, w którym tradycyjny styl góralski spotyka się z
                    nowoczesnym komfortem. Nasz apartament został zaprojektowany z dbałością o szczegóły, zapewniając
                    wygodę i estetykę.
                    <br><br>
                    Wnętrze jest przestronne i przytulne, idealne dla rodzin oraz grup przyjaciół. Naturalne materiały,
                    takie jak drewno, tworzą wyjątkowy klimat sprzyjający relaksowi.
                    <br><br>
                    Oferujemy również wszelkie udogodnienia, takie jak aneksy kuchenne, szybkie WiFi i bezpłatny
                    parking, aby zapewnić Ci maksymalny komfort podczas pobytu.
                </x-text-block>


                <x-link-btn href="{{route('about')}}">Dowiedz się więcej</x-link-btn>

                </div>
            </x-text-image-block-text>

        </x-text-image-block-container>


    </x-container>
</x-section>