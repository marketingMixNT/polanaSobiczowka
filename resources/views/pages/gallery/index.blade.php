<x-layouts.app title="Galeria Apartament Polana Sobiczkowa – Kościelisko"
    description="Zobacz zdjęcia Apartamentu Polana Sobiczkowa w Kościelisku. Malownicze widoki, komfortowe wnętrza i wyjątkowa atmosfera. Sprawdź naszą galerię!">

    <x-layouts.app-wrapper>

        {{-- hero --}}
        <x-hero image="{{asset('assets/img/mobile/polana-sobiczkowa-8.webp')}}"
            imageMobile="{{asset('assets/img/desktop/polana-sobiczkowa-8.webp')}}" title="Galeria"
            subtitle="Zobacz nas w obiektywie" />

        <x-section>
            <x-container class="max-w-[1700px] space-y-24 ">
                {{-- <div class="flex justify-center items-center gap-4 flex-wrap mb-12">


                    <x-button data-title="" class="filter-btn gallery-btn">Wszyskie</x-button>


                    <x-button data-title="1" class="filter-btn">1</x-button>
                    <x-button data-title="2" class="filter-btn">2</x-button>

                </div> --}}



                {{-- Container for filtered images --}}
                <div class="grid  sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="image-gallery">

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-1.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-1.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-2.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-2.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-3.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-3.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-4.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-4.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-5.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-5.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-6.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-6.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-7.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-7.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-8.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-8.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-9.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-9.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-10.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-10.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-11.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-11.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-12.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-12.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-13.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-13.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-14.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-14.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-15.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-15.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-16.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-16.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-17.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-17.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-18.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-18.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-19.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-19.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-20.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-20.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-21.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-21.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-22.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-22.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-23.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-23.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-24.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-24.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-25.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-25.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-26.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-26.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-27.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-27.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-28.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-28.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-29.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-29.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-30.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-30.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-31.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-31.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-32.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-32.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-33.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-33.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-34.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-34.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-35.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-36.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-37.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-37.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>

                    <div class="w-full h-full object-cover image-item" >
                        <a href="{{asset('assets/img/desktop/polana-sobiczkowa-38.webp')}}" class="glightbox">

                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-38.webp')}}" alt="Apartamenty Polana Sobiczkowa w Kościelisku" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>
                    </div>
                    
                    
                    
                    
                   
                    
                   




                </div>

            </x-container>
        </x-section>
    </x-layouts.app-wrapper>
</x-layouts.app>