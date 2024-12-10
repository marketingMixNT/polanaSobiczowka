<x-section>
    <x-container class="max-w-screen-xl space-y-12 text-center">

        {{-- heading --}}
        <div class="space-y-6 max-w-screen-lg mx-auto">

            <x-heading-section size="large">Poznaj opinie naszych gości</x-heading-section>

            <x-text-heading large>Zadowolenie naszych gości jest dla nas najważniejsze. Wierzymy, że prawdziwa wartość
                miejsca tkwi w doświadczeniach osób, które tu wypoczywają. Przeczytaj, co mówią o swoim pobycie w
                <strong>Polana Sobiczkowa</strong>, i przekonaj się, dlaczego tak wielu gości wraca do nas każdego roku.
                Wasze opinie są dla nas inspiracją, aby nieustannie podnosić jakość naszych usług.
            </x-text-heading>

        </div>

        {{-- <div class="flex flex-col justify-center items-center">
            <x-rating source="google" rate="5/5" href="#" />
            <x-rating source="booking" rate="9.4/10" href="#" />
        </div> --}}
        {{-- testimonials --}}
        <div class="swiper testimonials-carousel max-w-screen-md">
            <div class="swiper-wrapper ">

                <x-testimonial-card author="Magdalena" source="google"
                    content="Najwspanialsze miejsce w jakim byłam. Zdala od turystów a bardzo blisko od centrum Zakopanego bo tylko  3 km. Piękny apartament z widokiem ma Śpiącego Rycerza. Poranna kawa na tarasie nastraja pozytywnie na cały dzień. Gorąco polecam 👍" />

                <x-testimonial-card author="Iwona" source="booking"
                    content="Super lokalizacja, wszędzie niedaleko: do sklepów, na Krupówki i na szlaki , cisza i spokój, blisko las i rzeka. Apartament wyposażony we wszystkie udogodnienia, oddzielna sypialnia, duży taras,  grill do dyspozycji gości przy apartamencie.  Dodatkowo podziemny garaż. Same plusy." />

                <x-testimonial-card author="Amanda Dylewicz-Jaźwiec" source="google"
                    content="Obiekt zasłużył na więcej niż 5 gwiazdek! Kameralny apartament tuż u zbocza Giewontu, piękne widoki, super właściciele. Wszędzie blisko. Dokonała baza wypadowa na Krupówki czy Gubałówkę. Blisko stoku narciarskiego. Serdecznie polecam ❤️" />

                <x-testimonial-card author="Anna" source="booking"
                    content="Świetna lokalizacja, apartament czysty, nowoczenry, przestronny. Dzięki oknom dookoła całego apartamentu jest bardzo jasno i przytulnie. Ogromny taras to dodatkowy atut. W ogrodzie grill, sauna mały plac zabaw. Gorąco polecamy!" />

                <x-testimonial-card author="Lukas PL" source="google"
                    content="Super miejsce, ładnie i czysto, ale najlepszy jest taras i ten widok na Tatry... Poza tym do kolejki na Góbałówkę 5 minut, na Polane Szymoszkową 10 minut, na Krupówki 25 minut piechotą. Pozdrowienia dla wspaniałych gospodarzy :) Napewno tam wrócimy" />

                <x-testimonial-card author="Marta" source="booking"
                    content="Apartament jest cudowny, super obsługa oraz kontakt z właścicielem, wszędzie blisko do sklepu, restauracji oraz na przystanek Serdecznie polecam Apartamenty Sobiczkowa" />

            </div>
        </div>


    </x-container>
</x-section>