<x-section>
    <x-container class="max-w-[1700px] space-y-24 ">

        <x-text-image-block-container>

            {{-- text --}}
            <x-text-image-block-text class="bg-primary-400">

                <x-subheading-block>
                    Góry na wyciągnięcie ręki
                </x-subheading-block>

                <x-heading-block large>
                    Twoje idealne miejsce na relaks
                </x-heading-block>

                <x-text-block large>
                    Położona w malowniczej części Kościeliska, Polana Sobiczkowa oferuje idealne połączenie spokoju i
                    dostępu do lokalnych atrakcji. Zaledwie 3 km dzielą nas od Zakopanego i jego kultowych Krupówek.
                    <br><br>
                    W okolicy znajdziesz liczne szlaki turystyczne, wyciągi narciarskie oraz restauracje serwujące
                    regionalne specjały. To doskonałe miejsce dla miłośników aktywnego wypoczynku i pięknych widoków.
                </x-text-block>

                <x-link-btn href="{{route('location')}}">Dowiedz się więcej</x-link-btn>

            </x-text-image-block-text>

            {{-- image --}}
            <div class="min-h-[400px]">
                <div class=" h-full w-full">
                    <img src="{{asset('assets/images/mobile/polana-sobiczkowa-12.webp')}}" alt="widok z lotu ptaka nad Apartamenty Polana Sobiczkowa w Kościelisku" class="sm:hidden w-full h-full object-cover">
                    <img src="{{asset('assets/images/desktop/polana-sobiczkowa-12.webp')}}" alt="widok z lotu ptaka nad Apartamenty Polana Sobiczkowa w Kościelisku" class="hidden sm:block w-full h-full object-cover">
                </div>

            </div>
        </x-text-image-block-container>


    </x-container>
</x-section>