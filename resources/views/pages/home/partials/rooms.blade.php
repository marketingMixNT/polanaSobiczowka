<x-section id="pokoje">
    <x-container class="max-w-screen-xl space-y-6 ">

        <x-heading-section>Zobacz nasze pokoje</x-heading-section>

        <x-hr />

        {{-- room grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-2  gap-12">

            <x-room-card href="{{route('room.first')}}" image="{{asset('assets/images/mobile/polana-sobiczkowa-45.webp')}}" alt="Apartament z 1 sypialnią w Apartamenty Polana Sobiczkowa w Kościelisku" title="Apartament z 1 sypialnią">
                Komfortowy apartament z jedną sypialnią, idealny dla par lub małych rodzin, wyposażony w aneks kuchenny i przestronny salon.
            </x-room-card>

            <x-room-card href="{{route('room.second')}}" image="{{asset('assets/images/mobile/polana-sobiczkowa-43.webp')}}" alt="Apartament z widokiem na góry w Apartamenty Polana Sobiczkowa w Kościelisku" title="Apartament z widokiem na góry">
                Stylowy apartament z panoramicznym widokiem na Tatry, oferujący niezapomniane wrażenia z pobytu w sercu gór.
            </x-room-card>

        </div>

        <x-hr />

    </x-container>
</x-section>