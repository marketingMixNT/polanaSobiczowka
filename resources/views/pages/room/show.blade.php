<x-layouts.app title="Pokoj" description="meta">

    <x-layouts.app-wrapper>

        {{-- hero --}}
        <x-hero-room image="{{asset('assets/hero.jpg')}}" title="Pokój pojedyńczy" />

        <x-section>
            <x-container class="max-w-[1650px] space-y-24 relative 2xl:px-12">

                <div class="flex flex-col xl:flex-row gap-10 2xl:gap-20 relative">

                    {{-- main --}}
                    <div class=" xl:w-3/4 flex flex-col justify-start items-start gap-12 order-1 xl:order-none">

                        <div class=" prose max-w-full text-lg">
                            <x-text-block>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident quibusdam
                                voluptatibus dicta
                                reprehenderit accusamus libero nobis cumque illo modi vero, ducimus exercitationem
                                placeat.
                                Temporibus molestias a officia porro dolor libero ducimus necessitatibus!</x-text-block>

                            <x-text-block>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident quibusdam
                                voluptatibus dicta
                                reprehenderit accusamus libero nobis cumque illo modi vero, ducimus exercitationem
                                placeat.
                                Temporibus molestias a officia porro dolor libero ducimus necessitatibus!</x-text-block>

                        </div>

                        <div class="flex flex-col md:flex-row md:max-h-[410px]  gap-2">

                            <div class="md:w-3/5 h-full ">
                                <img src="{{asset('assets/hero.jpg')}}" alt="" class="w-full h-full object-cover">
                            </div>

                            <div class="md:w-2/5 flex flex-col gap-y-2   h-full ">
                                <img src="{{asset('assets/hero.jpg')}}" alt="" class="w-full h-1/2  object-cover">

                                <div class="grid grid-cols-2 h-1/2 gap-x-2">

                                    <img src="{{asset('assets/hero.jpg')}}" alt="" class="w-full h-full  object-cover">
                                    <img src="{{asset('assets/hero.jpg')}}" alt="" class="w-full h-full  object-cover">
                                </div>



                            </div>

                        </div>

                        <div class="flex justify-start flex-col items-start gap-8 lg:w-4/5">
                            <x-heading-section size="medium">Udogodnienia</x-heading-section>

                            <div class="w-full">

                                <div class="grid grid-cols-1 md:grid-cols-3 w-full gap-6 border-b py-6">
                                    <x-room-pictogram text="Mikrofalówka">
                                        <x-lucide-user class="w-7" />
                                    </x-room-pictogram>

                                    <x-room-pictogram text="Mikrofalówka">
                                        <x-lucide-user class="w-7" />
                                    </x-room-pictogram>

                                    <x-room-pictogram text="Mikrofalówka">
                                        <x-lucide-user class="w-7" />
                                    </x-room-pictogram>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-3 w-full gap-6 border-b py-6">
                                    <x-room-pictogram text="Mikrofalówka">
                                        <x-lucide-user class="w-7" />
                                    </x-room-pictogram>

                                    <x-room-pictogram text="Mikrofalówka">
                                        <x-lucide-user class="w-7" />
                                    </x-room-pictogram>

                                    <x-room-pictogram text="Mikrofalówka">
                                        <x-lucide-user class="w-7" />
                                    </x-room-pictogram>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-3 w-full gap-6 border-b py-6">
                                    <x-room-pictogram text="Mikrofalówka">
                                        <x-lucide-user class="w-7" />
                                    </x-room-pictogram>

                                    <x-room-pictogram text="Mikrofalówka">
                                        <x-lucide-user class="w-7" />
                                    </x-room-pictogram>

                                    <x-room-pictogram text="Mikrofalówka">
                                        <x-lucide-user class="w-7" />
                                    </x-room-pictogram>
                                </div>

                            </div>


                        </div>

                        <div class="w-full px-12 py-12 bg-primary-400 flex flex-col justify-start items-start ">
                            <x-heading-section size="medium">Udogodnienia</x-heading-section>

                            <div class="flex flex-col sm:flex-row   gap-6 py-12 border-b border-primary-500 w-full">
                                <div class="flex justify-center items-center gap-3">
                                    <x-lucide-clock class="w-8 text-secondary-400" />
                                    <p class="font-extralight text-lg tracking-wider">Przyjazd: <span
                                            class="text-secondary-400">od 15:00</span></p>
                                </div>
                                <div class="flex justify-center items-center gap-3">
                                    <x-lucide-clock class="w-8 text-secondary-400" />
                                    <p class="font-extralight text-lg tracking-wider">Wyjazd: <span
                                            class="text-secondary-400">do 11:00</span></p>
                                </div>
                            </div>

                            <div class="space-y-10 mt-10">
                                <div class="space-y-4 ">
                                    <h2 class="text-lg font-light ">Polityka względem zwierząt</h2>
                                    <p class="font-extralight text-sm">Akceptowane są psy do 10 kg, za dodatkową opłatą
                                        50
                                        pln / doba. </p>
                                </div>
                                <div class="space-y-4 ">
                                    <h2 class="text-lg font-light ">Polityka względem zwierząt</h2>
                                    <p class="font-extralight text-sm">Akceptowane są psy do 10 kg, za dodatkową opłatą
                                        50
                                        pln / doba. </p>
                                </div>
                                <div class="space-y-4 ">
                                    <h2 class="text-lg font-light ">Polityka względem zwierząt</h2>
                                    <p class="font-extralight text-sm">Akceptowane są psy do 10 kg, za dodatkową opłatą
                                        50
                                        pln / doba. </p>
                                </div>

                                <div class="space-y-4 ">
                                    <h2 class="text-lg font-light ">Polityka względem zwierząt</h2>
                                    <p class="font-extralight text-sm">Akceptowane są psy do 10 kg, za dodatkową opłatą
                                        
                                        pln / doba. </p>
                                </div>
                                <div class="flex flex-col sm:flex-row justify-start items-start sm:items-center gap-6">
                                    <h2 class="text-lg font-light ">Akceptowane formy płatności: </h2>
                                    <div class="flex justify-start sm:justify-center items-center gap-3">
                                        <img src="https://www.platinumresidence.com/templates/platinumresidencegroup/images/cards/americanexpress.png" alt="" class="w-8">
                                        <img src="https://www.platinumresidence.com/templates/platinumresidencegroup/images/cards/americanexpress.png" alt="" class="w-8">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    {{-- sticky --}}
                    <div class="w-full sm:w-3/4 md:w-1/2 mx-auto xl:w-1/4 -mt-48">
                        <div class="bg-primary-400 w-full sticky top-32 flex flex-col justify-between p-12 gap-12">
                            <x-button
                                class="bg-secondary-400 text-fontLight hover:bg-primary-100 hover:text-fontDark self-center">
                                Zarezerwuj online
                            </x-button>

                            <hr class="w-[90%] border-primary-600">

                            <div class="flex flex-col justify-start items-start gap-6">
                                <x-room-info-item text="Liczba os. maks. 2 os.">
                                    <x-lucide-user class="w-6" />
                                </x-room-info-item>
                                <x-room-info-item text="Liczba os. maks. 2 os.">
                                    <x-lucide-user class="w-6" />
                                </x-room-info-item>
                                <x-room-info-item text="Liczba os. maks. 2 os.">
                                    <x-lucide-user class="w-6" />
                                </x-room-info-item>
                                <x-room-info-item text="Liczba os. maks. 2 os.">
                                    <x-lucide-user class="w-6" />
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