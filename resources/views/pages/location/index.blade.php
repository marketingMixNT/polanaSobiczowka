<x-layouts.app title="Lokalizacja Apartament Polana Sobiczkowa - Górska Oaza blisko Zakopanego"
    description="Apartament Polana Sobiczkowa to idealna lokalizacja 3 km od Zakopanego, blisko atrakcji górskich i narciarskich, idealna na aktywny wypoczynek.">

    <x-layouts.app-wrapper>

        {{-- hero --}}
        <x-hero image="{{asset('assets/img/desktop/polana-sobiczkowa-9.webp')}}"
            imageMobile="{{asset('assets/img/mobile/polana-sobiczkowa-9.webp')}}" title="Lokalizacja"
            subtitle="W sercu Podhala" />

        {{-- text --}}
        <x-text-section>
            Nasza lokalizacja to idealne połączenie bliskości natury i wygody dostępu do Zakopanego. Apartament Polana
            Sobiczkowa leży w sercu Tatr, w pobliżu licznych szlaków turystycznych, co sprawia, że stanowią doskonałą
            bazę wypadową dla miłośników górskich wędrówek.
            <br><br>
            Zaledwie 3 km dzielą nas od centrum Zakopanego, gdzie czekają na Ciebie liczne atrakcje turystyczne, sklepy
            oraz restauracje. To miejsce, które pozwala cieszyć się ciszą gór i jednocześnie być blisko miejskiego
            życia.
        </x-text-section>

        {{-- block --}}
        <x-section>
            <x-container class="max-w-[1700px] space-y-24 ">

                <x-text-image-block-container>

                    {{-- text --}}
                    <x-text-image-block-text>

                        <x-subheading-block>
                            Wyjątkowa lokalizacja w sercu Tatr
                        </x-subheading-block>

                        <x-heading-block>
                            Atrakcje w okolicy:
                        </x-heading-block>

                        
                            <ul class="prose leading-relaxed tracking-widest font-extralight">
                                <li>Kolej linowa Butorowy Wierch – 200m</li>
                                <li>Wyciąg orczykowy w Czajkach – 450m</li>
                                <li>Wyciąg orczykowy na Budzowskim Wierchu – 450m</li>
                                <li>Stacja narciarska na Polanie Szymoszkowej – 900m</li>
                                <li>Dolina za Bramką – 2,1km</li>
                                <li>Dolina Małej Łąki – 3,1km</li>
                                <li>Dolina Kościeliska – 5,3km</li>
                                <li>Dolina Chochołowska – 8km</li>
                                <li>Aquapark Zakopane – 4,5km</li>
                                <li>Chochołowskie Termy – 13km</li>
                                <li>Sanktuarium Matki Boskiej Fatimskiej – 900m</li>
                                <li>Karczma Szymaszkowa – 900m</li>
                                <li>Karczma Siuchajsko – 1km</li>
                                <li>Karczma Holny – 1,3km</li>
                            </ul>

                    </x-text-image-block-text>

                    {{-- image --}}
                    <div class="min-h-[400px]">
                        <div class=" h-full w-full">
                            <img src="{{asset('assets/img/mobile/polana-sobiczkowa-13.webp')}}" alt="Apartament Polana Sobiczówka w Kościelisku" class="sm:hidden w-full h-full object-cover">
                            <img src="{{asset('assets/img/desktop/polana-sobiczkowa-13.webp')}}" alt="Apartament Polana Sobiczówka w Kościelisku" class="hidden sm:block w-full h-full object-cover">
                        </div>

                    </div>
                </x-text-image-block-container>


            </x-container>
        </x-section>

       
      


    </x-layouts.app-wrapper>
</x-layouts.app>