<x-layouts.app title="Apartamenty Polana Sobiczkowa – Komfortowe apartamenty w sercu Tatr"
    description="Oferujemy przestronne apartamenty w góralskim stylu, idealne na wypoczynek w Zakopanem. Zarezerwuj już teraz pobyt w Polana Sobiczkowa i ciesz się komfortem w otoczeniu gór.">

    <x-layouts.app-wrapper>

        {{-- hero --}}
        <x-hero image="{{asset('assets/images/desktop/polana-sobiczkowa-30.webp')}}"
            imageMobile="{{asset('assets/images/mobile/polana-sobiczkowa-30.webp')}}" title="Apartamenty"
            subtitle="Spokój w sercu Tatr" />

        {{-- rooms --}}
        <x-section id="o-nas">
            <x-container class="max-w-screen-xl space-y-12 ">

                <x-heading-section>Wybierz apartament idealny dla siebie</x-heading-section>

                <x-hr />

                {{-- room grid --}}
                <div class="grid grid-cols-1 lg:grid-cols-2  gap-12">

                    <x-room-card href="{{route('room.first')}}"
                        image="{{asset('assets/images/mobile/polana-sobiczkowa-45.webp')}}"
                        alt="Apartament z 1 sypialnią w Apartamenty Polana Sobiczkowa w Kościelisku"
                        title="Apartament z 1 sypialnią">
                        Komfortowy apartament z jedną sypialnią, idealny dla par lub małych rodzin, wyposażony w aneks
                        kuchenny i przestronny salon.
                    </x-room-card>

                    <x-room-card href="{{route('room.second')}}"
                        image="{{asset('assets/images/mobile/polana-sobiczkowa-43.webp')}}"
                        alt="Apartament z widokiem na góry w Apartamenty Polana Sobiczkowa w Kościelisku"
                        title="Apartament z widokiem na góry">
                        Stylowy apartament z panoramicznym widokiem na Tatry, oferujący niezapomniane wrażenia z pobytu
                        w sercu gór.
                    </x-room-card>

                </div>

                <x-hr />

            </x-container>
        </x-section>


        <x-section>
            <x-heading-section size="medium">Niezapomniany wypoczynek w Tatrach</x-heading-section>

            {{-- info --}}
            <div class="border-t border-b w-full   py-8 border-primary-400   my-12 space-y-12">



                <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-y-12 gap-x-20">

                    <x-info-card heading="Bliskość natury" text="Odpocznij w sercu tatrzańskiej przyrody, otoczony górami i lasami.">
                        <img src="{{asset('assets/icons/tree.svg')}}" alt="" class="w-12  mb-3 group-hover:scale-110 duration-500" />
                      
                    </x-info-card>

                    <x-info-card heading="Góralski klimat" text="Tradycyjna architektura góralska w połączeniu z nowoczesnym stylem zapewnia wyjątkowy klimat.">
                        <img src="{{asset('assets/icons/mountain.svg')}}" alt="" class="w-12  mb-3 group-hover:scale-110 duration-500" />
                    </x-info-card>

                    <x-info-card heading="Spokojna lokalizacja" text="Zrelaksuj się w spokojnej okolicy, z dala od miejskiego zgiełku, ale blisko atrakcji Zakopanego.">
                        <img src="{{asset('assets/icons/pin.svg')}}" alt="" class="w-12  mb-3 group-hover:scale-110 duration-500" />
                    </x-info-card>

                    <x-info-card heading="Zachwycający widok" text="Apartamenty z przepięknym widokiem na góry – idealne miejsce do relaksu i podziwiania natury.">
                        <img src="{{asset('assets/icons/mountain-second.svg')}}" alt="" class="w-12  mb-3 group-hover:scale-110 duration-500" />
                    </x-info-card>
                </div>



            </div>
        </x-section>

    </x-layouts.app-wrapper>
</x-layouts.app>