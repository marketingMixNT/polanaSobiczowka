<x-layouts.app title="Pokoje" description="meta">

    <x-layouts.app-wrapper>

        {{-- hero --}}
        <x-hero image="{{asset('assets/hero.jpg')}}" title="Pokoje" subtitle="Wybierz pokoj" />

        {{-- rooms --}}
        <x-section id="o-nas">
            <x-container class="max-w-screen-xl space-y-12 ">

                <x-heading-section>Wybierz pokój idealny dla siebie</x-heading-section>

                <x-hr />

                {{-- room grid --}}
                <div class="grid grid-cols-1 lg:grid-cols-2  gap-12">

                    <x-room-card href="#" image="{{asset('assets/hero.jpg')}}" alt="#" title="Apartament z 1 sypialnią">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Blanditiis praesentium animi possimus.
                    </x-room-card>

                    <x-room-card href="#" image="{{asset('assets/hero.jpg')}}" alt="#"
                        title="Apartament z widokiem na góry">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Blanditiis praesentium animi possimus.
                    </x-room-card>

                </div>

                <x-hr />

            </x-container>
        </x-section>


        <x-section>
            <x-heading-section size="medium">Lorem ipsum dolor sit.</x-heading-section>

        {{-- info --}}
        <div class="border-t border-b w-full   py-8 border-primary-400   my-12 space-y-12">



            <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-y-12 gap-x-20">

                <x-info-card heading=" Gwarancja ceny " text="

Najniższa cena tylko na naszej stronie www
">
                    <x-lucide-phone class="w-12 text-primary-600 mb-3 group-hover:scale-105 duration-500" />
                </x-info-card>

                <x-info-card heading=" Oferty specjalne "  text="Oferty specjalne i pakiety dostępne tylko na naszej stronie">
                    <x-lucide-mail class="w-12 text-primary-600 mb-3 group-hover:scale-105 duration-500" />
                </x-info-card>

                <x-info-card heading="Potwierdzenie" 
                    text="

Otrzymujesz natychmiastowe potwierdzenie rezerwacji
">
                    <x-lucide-map-pin class="w-12 text-primary-600 mb-3 group-hover:scale-105 duration-500" />
                </x-info-card>

                <x-info-card heading="Bezpieczeństwo" 
                    text="

Gwarantujemy bezpieczeństwo każdej transakcji
">
                    <x-lucide-map-pin class="w-12 text-primary-600 mb-3 group-hover:scale-105 duration-500" />
                </x-info-card>
            </div>



        </div>
        </x-section>

    </x-layouts.app-wrapper>
</x-layouts.app>