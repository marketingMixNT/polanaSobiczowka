<x-layouts.app title="Apartament – Polana Sobiczkowa"
    description="Nasz apartament to komfortowe miejsce z przestronnym wnętrzem, idealne dla osób szukających relaksu w otoczeniu tatrzańskiej przyrody. Zarezerwuj teraz!">

    <x-layouts.app-wrapper>

        {{-- hero --}}
        <x-hero-room image="{{asset('assets/img/desktop/polana-sobiczkowa-20.webp')}}"
            imageMobile="{{asset('assets/img/mobile/polana-sobiczkowa-20.webp')}}"
            title="Apartament" />

        <x-section>
            <x-container class="max-w-[1650px] space-y-24 relative 2xl:px-12">

                <div class="flex flex-col xl:flex-row gap-10 2xl:gap-20 relative">

                    {{-- main --}}
                    <div class=" xl:w-3/4 flex flex-col justify-start items-start gap-12 order-1 xl:order-none">

                        <div class=" prose max-w-full text-lg">

                            <x-text-block>
                                Nasz apartament to komfortowe miejsce, idealne dla par lub małych rodzin
                                szukających odpoczynku w górach. Jego przestronny układ zapewnia prywatność i wygodę, z
                                osobnym pokojem sypialnym oraz salonem. Apartament jest wyposażony w nowoczesne
                                udogodnienia, takie jak  prywatny aneks kuchenny czy balkon z widokiem
                                na góry oraz ogród, co pozwala w pełni cieszyć się otaczającą naturą.

                            </x-text-block>

                            <x-text-block>
                                To miejsce łączy wygodę z funkcjonalnością, idealne do relaksu po dniu spędzonym na
                                górskich szlakach. Bliskość natury oraz komfortowe warunki zapewniają wyjątkowy
                                wypoczynek, który na długo pozostanie w pamięci.
                            </x-text-block>

                        </div>

                        <div class="flex flex-col md:flex-row md:max-h-[410px]  gap-2">

                            <div class="md:w-3/5 h-full ">
                                <img src="{{asset('assets/img/mobile/polana-sobiczkowa-18.webp')}}" alt="" class="w-full h-full object-cover">
                            </div>

                            <div class="md:w-2/5 flex flex-col gap-y-2   h-full ">
                                <img src="{{asset('assets/img/mobile/polana-sobiczkowa-23.webp')}}" alt="" class="w-full h-1/2  object-cover">

                                <div class="grid grid-cols-2 h-1/2 gap-x-2">

                                    <img src="{{asset('assets/img/mobile/polana-sobiczkowa-14.webp')}}" alt="" class="w-full h-full  object-cover">
                                    <img src="{{asset('assets/img/mobile/polana-sobiczkowa-25.webp')}}" alt="" class="w-full h-full  object-cover">
                                </div>



                            </div>

                        </div>

                        <div class="flex justify-start flex-col items-start gap-8 lg:w-4/5">
                            <x-heading-section size="medium">Udogodnienia</x-heading-section>

                            <div class="w-full">

                                <div class="grid grid-cols-1 md:grid-cols-3 w-full gap-6 border-b py-6">

                                    <x-room-pictogram text="Pralka">
                                        <img src="{{asset('assets/icons/pictograms/washing-machine.svg')}}" alt="" class="w-7" />
                                    </x-room-pictogram>

                                    <x-room-pictogram text="Lodówka">
                                        <img src="{{asset('assets/icons/pictograms/fridge.svg')}}" alt="" class="w-7" />
                                    </x-room-pictogram>

                                    <x-room-pictogram text="Ekspres do kawy">
                                        <img src="{{asset('assets/icons/pictograms/coffee-machine.svg')}}" alt="" class="w-7" />
                                    </x-room-pictogram>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-3 w-full gap-6 border-b py-6">
                                    <x-room-pictogram text="Prysznic">
                                        <img src="{{asset('assets/icons/pictograms/shower.svg')}}" alt="" class="w-7" />
                                    </x-room-pictogram>

                                    <x-room-pictogram text="Taras">
                                        <img src="{{asset('assets/icons/pictograms/terrace.svg')}}" alt="" class="w-7" />
                                    </x-room-pictogram>
                                    
                                    <x-room-pictogram text="Mikrofalówka">
                                        <img src="{{asset('assets/icons/pictograms/microwave.svg')}}" alt="" class="w-7" />
                                    </x-room-pictogram>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-3 w-full gap-6 border-b py-6">
                                    <x-room-pictogram text="Telewizor">
                                        <img src="{{asset('assets/icons/pictograms/tv.svg')}}" alt="" class="w-7" />
                                    </x-room-pictogram>

                                    <x-room-pictogram text="Wi-Fi">
                                        <img src="{{asset('assets/icons/pictograms/wifi.svg')}}" alt="" class="w-7" />
                                    </x-room-pictogram>
                                    
                                    <x-room-pictogram text="Czajnik">
                                        <img src="{{asset('assets/icons/pictograms/kettle.svg')}}" alt="" class="w-7" />
                                    </x-room-pictogram>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-3 w-full gap-6 border-b py-6">
                                   
                                    <x-room-pictogram text="Ręczniki">
                                        <img src="{{asset('assets/icons/pictograms/towels.svg')}}" alt="" class="w-7" />
                                    </x-room-pictogram>
                                    <x-room-pictogram text="Wspaniała okolica">
                                        <img src="{{asset('assets/icons/pictograms/mountain.svg')}}" alt="" class="w-7" />
                                    </x-room-pictogram>

                                   
                                </div>

                            </div>


                        </div>

                        <div class="w-full px-12 py-12 bg-primary-400 flex flex-col justify-start items-start ">
                            <x-heading-section size="medium">Ważne iformacje</x-heading-section>

                            <div class="flex flex-col sm:flex-row   gap-6 py-12 border-b border-primary-500 w-full">
                                <div class="flex justify-center items-center gap-3">
                                    <x-lucide-clock class="w-8 text-secondary-400" />
                                    <p class="font-extralight text-lg tracking-wider">Przyjazd: <span
                                            class="text-secondary-400">od 16:00 do 16:30</span></p>
                                </div>
                                <div class="flex justify-center items-center gap-3">
                                    <x-lucide-clock class="w-8 text-secondary-400" />
                                    <p class="font-extralight text-lg tracking-wider">Wyjazd: <span
                                            class="text-secondary-400">do 10:00 do 10:30</span></p>
                                </div>
                            </div>

                            <div class="space-y-10 mt-10">

                                <div class="space-y-4 ">
                                    <h2 class="text-lg font-light ">Polityka względem zwierząt</h2>
                                    <p class="font-extralight text-sm">Zwierzęta są akceptowane</p>
                                </div>

                                <div class="space-y-4 ">
                                    <h2 class="text-lg font-light ">Palenie tytoniu</h2>
                                    <p class="font-extralight text-sm">Palenie jest zabronione.</p>
                                </div>
                               
                                <div class="flex flex-col sm:flex-row justify-start items-start sm:items-center gap-6">
                                    <h2 class="text-lg font-light ">Akceptowane formy płatności: </h2>
                                    <div class="flex justify-start sm:justify-center items-center gap-3">
                                        <img src="{{asset('assets/payments/americanexpress.png')}}"
                                            alt="" class="w-8">
                                        <img src="{{asset('assets/payments/maestro.png')}}"
                                            alt="" class="w-8">
                                        <img src="{{asset('assets/payments/mastercard.png')}}"
                                            alt="" class="w-8">
                                        <img src="{{asset('assets/payments/visa.png')}}"
                                            alt="" class="w-8">
                                        <img src="{{asset('assets/payments/visaelectron.png')}}"
                                            alt="" class="w-8">
                                        
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    {{-- sticky --}}
                    <div class="w-full sm:w-3/4 md:w-1/2 mx-auto xl:w-1/4 -mt-48">
                        <div class="bg-primary-400 w-full sticky top-32 flex flex-col justify-between p-12 gap-12">
                            <x-link-btn href="{{route('contact')}}"
                                class="bg-secondary-400 text-fontLight hover:bg-primary-100 hover:text-fontDark self-center">
                                Zarezerwuj 
                            </x-link-btn>

                            <hr class="w-[90%] border-primary-600">

                            <div class="flex flex-col justify-start items-start gap-6">
                                <x-room-info-item text="Liczba osób: maks. 6 os.">
                                    <x-lucide-user class="w-6" />
                                </x-room-info-item>
                                <x-room-info-item text="Powierzchnia: 65 m²">
                                    <x-lucide-scaling class="w-6" />
                                </x-room-info-item>
                                <x-room-info-item text="łóżko podwójne + <br> 2x rozdkładana sofa">
                                    <x-lucide-bed-single class="w-6"/>
                                </x-room-info-item>
                                
                              
                            </div>

                            <hr class="w-[90%] border-primary-600">
                        </div>
                    </div>
                </div>


            </x-container>
        </x-section>

    </x-layouts.app-wrapper>
</x-layouts.app>