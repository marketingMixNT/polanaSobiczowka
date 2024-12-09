<x-layouts.app title="O nas - Polana Sobiczkowa | Komfortowe Apartamenty w Górach"
    description="Polana Sobiczkowa to komfortowe apartamenty w góralskim stylu, idealne na wypoczynek. Zaledwie 3 km od Zakopanego, z bliskością atrakcji Podhala.">

    <x-layouts.app-wrapper>

        {{-- hero --}}
        <x-hero image="{{asset('assets/images/desktop/polana-sobiczkowa-32.webp')}}"
            imageMobile="{{asset('assets/images/mobile/polana-sobiczkowa-32.webp')}}" title="O nas"
            subtitle="Poznaj nas" />

        {{-- text --}}
        <x-text-section>
            <strong>Polana Sobiczkowa</strong> to miejsce, które łączy tradycję z nowoczesnością. Nasze komfortowe
            apartamenty w góralskim stylu zapewniają wygodę i przestronność, idealne dla rodzin oraz grup przyjaciół.
            <br><br>Zaledwie 3 km od Zakopanego, oferujemy ciszę i spokój, jednocześnie będąc w pobliżu atrakcji
            Podhala. To doskonała baza wypadowa na górskie wędrówki, narciarstwo i odpoczynek w otoczeniu natury.
        </x-text-section>

        {{-- block --}}
        <x-section>
            <x-container class="max-w-[1700px] space-y-24 ">

                <x-text-image-block-container>

                    {{-- text --}}
                    <x-text-image-block-text>

                        <x-subheading-block>
                            Przestrzeń dla każdego
                        </x-subheading-block>

                        <x-heading-block large>
                            Odpoczynek w sercu Podhala
                        </x-heading-block>

                        <x-text-block large>
                            Polana Sobiczkowa to miejsce, które powstało z pasji do gór oraz gościnności. Chcieliśmy
                            stworzyć przestrzeń, która łączy w sobie tradycyjny góralski klimat z nowoczesnymi
                            udogodnieniami. Nasze apartamenty zapewniają wygodę, przestronność oraz unikalny klimat,
                            który sprzyja zarówno relaksowi, jak i aktywnemu wypoczynkowi. Każdy detal został
                            zaprojektowany z myślą o naszych gościach, by poczuli się jak w domu, odpoczywając w
                            otoczeniu pięknej przyrody.
                            <br><br>
                            Nasze apartamenty to nie tylko komfortowe wnętrza, ale także idealna lokalizacja, zaledwie 3
                            km od Zakopanego. Jesteśmy doskonałą bazą wypadową do górskich wędrówek, narciarstwa czy
                            innych atrakcji Podhala. Wierzymy, że w Polana Sobiczkowa każdy znajdzie coś dla siebie,
                            niezależnie od tego, czy szuka spokoju w otoczeniu natury, czy aktywnego wypoczynku w
                            górach.

                        </x-text-block>

                    </x-text-image-block-text>

                    {{-- image --}}
                    <div class="min-h-[400px]">
                        <div class=" h-full w-full">
                            <img src="{{asset('assets/images/mobile/polana-sobiczkowa-40.webp')}}"
                            alt="wnętrze apartamentu w Apartamenty Polana Sobiczkowa w Kościelisku"
                            class="sm:hidden w-full h-full object-cover">
                            
                        <img src="{{asset('assets/images/desktop/polana-sobiczkowa-40.webp')}}"
                            alt="wnętrze apartamentu w Apartamenty Polana Sobiczkowa w Kościelisku"
                            class="hidden sm:block w-full h-full object-cover">
                        </div>

                    </div>
                </x-text-image-block-container>


            </x-container>
        </x-section>

        {{-- block --}}
        <x-section class="pb-24">
            <x-container class="max-w-[1700px] space-y-24 ">

                <x-text-image-block-container>
                    {{-- image --}}
                    <div class="min-h-[400px]">
                        <div class=" h-full w-full">
                            <img src="{{asset('assets/images/mobile/polana-sobiczkowa-43.webp')}}"
                                alt="wnętrze apartamentu w Apartamenty Polana Sobiczkowa w Kościelisku"
                                class="sm:hidden w-full h-full object-cover">
                                
                            <img src="{{asset('assets/images/desktop/polana-sobiczkowa-43.webp')}}"
                                alt="wnętrze apartamentu w Apartamenty Polana Sobiczkowa w Kościelisku"
                                class="hidden sm:block w-full h-full object-cover">
                        </div>

                    </div>
                    {{-- text --}}
                    <x-text-image-block-text>

                        <x-subheading-block>
                            Twoje miejsce w sercu gór
                        </x-subheading-block>

                        <x-heading-block large>
                            Góry, komfort i wyjątkowa atmosfera
                        </x-heading-block>

                        <x-text-block large>
                            Polana Sobiczkowa to miejsce, które zostało stworzone z myślą o tych, którzy szukają
                            spokoju, komfortu i niezapomnianych widoków. Nasze apartamenty, urządzone w tradycyjnym
                            góralskim stylu, zapewniają pełną wygodę i przestronność, którą docenią zarówno rodziny, jak
                            i grupy przyjaciół. Każdy szczegół naszej oferty jest zaprojektowany z myślą o Twoim
                            komforcie, a naszym celem jest stworzenie atmosfery, w której poczujesz się jak u siebie w
                            domu.
                            <br><br>
                            Chcieliśmy połączyć tradycję z nowoczesnością, aby nasi goście mogli cieszyć się spokojem
                            górskiego klimatu, nie rezygnując z wygody. Polana Sobiczkowa to nie tylko miejsce na
                            nocleg, ale także przestrzeń do odpoczynku, relaksu i tworzenia wspomnień. Po dniu pełnym
                            wrażeń możesz wrócić do komfortowego apartamentu, w którym poczujesz się zrelaksowany i
                            wypoczęty.
                        </x-text-block>

                    </x-text-image-block-text>


                </x-text-image-block-container>


            </x-container>
        </x-section>


    </x-layouts.app-wrapper>
</x-layouts.app>