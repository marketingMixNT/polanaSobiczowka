<x-section>

    <x-container class=" space-y-3 ">

        <x-heading-section size="medium">Nasze udogodnienia</x-heading-section>


        <div class="border-t border-b w-full   border-primary-400">

            <div class="flex justify-center items-center max-w-[1700px] mx-auto py-8">



                <button class="feature-prev">
                    <x-lucide-arrow-left aria-label="poprzednie udogodnienie" class="w-6 text-secondary-400 " />

                </button>


                <div class="relative  swiper features-carousel ">


                    <div class="swiper-wrapper ">

                        <x-pictogram-card title="Taras" text="Ciesz się pięknymi widokami na góry z przestronnego tarasu, idealnego na poranną kawę.">
                            <img src="{{asset('assets/icons/terrace.svg')}}" alt="" class="w-20" laoding="lazy" />
                        </x-pictogram-card>

                        <x-pictogram-card title="Ogród" text="Spędzaj czas na świeżym powietrzu w naszym zadbanym ogrodzie, doskonałym na relaks i zabawę.">
                            <img src="{{asset('assets/icons/garden.svg')}}" alt="" class="w-20" laoding="lazy" />
                        </x-pictogram-card>

                        <x-pictogram-card title="Parking" text="Gwarantujemy bezpieczne i wygodne miejsce parkingowe bez dodatkowych opłat.">
                            <img src="{{asset('assets/icons/parking.svg')}}" alt="" class="w-20" laoding="lazy" />
                        </x-pictogram-card>

                        <x-pictogram-card title="Wi-Fi" text="Korzystaj z szybkiego internetu, aby pozostać online w każdym momencie.">
                            <img src="{{asset('assets/icons/wi-fi.svg')}}" alt="" class="w-20" laoding="lazy" />
                        </x-pictogram-card>

                        <x-pictogram-card title="TV" text="Zrelaksuj się przy ulubionych programach i filmach dzięki telewizji w apartamencie.">
                            <img src="{{asset('assets/icons/tv.svg')}}" alt="" class="w-20" laoding="lazy" />
                        </x-pictogram-card>

                        <x-pictogram-card title="Aneks kuchenny" text="Przygotuj swoje ulubione potrawy w pełni wyposażonym aneksie kuchennym.">
                            <img src="{{asset('assets/icons/kitchen.svg')}}" alt="" class="w-20" laoding="lazy" />
                        </x-pictogram-card>

                        <x-pictogram-card title="Sprzęt do grillowania" text="Rozkoszuj się smakiem potraw z grilla w urokliwym otoczeniu gór.">
                            <img src="{{asset('assets/icons/grill.svg')}}" alt="" class="w-20" laoding="lazy" />
                        </x-pictogram-card>

                        <x-pictogram-card title="Prywatna łazienka" text="Korzystaj z komfortu własnej, przestronnej łazienki z nowoczesnym wyposażeniem.">
                            <img src="{{asset('assets/icons/bathroom.svg')}}" alt="" class="w-20" laoding="lazy" />
                        </x-pictogram-card>

                        <x-pictogram-card title="Klimatyzacja" text="Odpoczywaj w idealnej temperaturze, niezależnie od pogody za oknem.">
                            <img src="{{asset('assets/icons/air-conditioning.svg')}}" alt="" class="w-20" laoding="lazy" />
                        </x-pictogram-card>
                        
                    </div>
                </div>
                <button class="feature-next" aria-label="następne udogodnienie">
                    <x-lucide-arrow-right class="w-6 text-secondary-400 " />

                </button>

            </div>
        </div>
    </x-container>

</x-section>