<nav>
    <ul class="flex justify-center items-center gap-10">

        <x-header.nav-item href="{{route('about')}}" activeRoute="about">O nas</x-header.nav-item>
      


        <x-header.nav-item-dropdown href="{{route('room.index')}}" activeRoute="room.index" title="Apartamenty">
            <x-header.dropdown>
               
                <x-header.dropdown-item href="{{route('room.first')}}" activeRoute="room.first">Apartament z 1 sypialnią</x-header.dropdown-item>
                <x-header.dropdown-item href="{{route('room.second')}}" activeRoute="room.second">Apartament z widokiem na góry</x-header.dropdown-item>
            

            </x-header.dropdown>
        </x-header.nav-item-dropdown>



        <x-header.nav-item href="{{route('location')}}" activeRoute='location'>Lokalizacja</x-header.nav-item>
        <x-header.nav-item href="{{route('gallery')}}" activeRoute='gallery'>Galeria</x-header.nav-item>
        <x-header.nav-item href="{{route('contact')}}" activeRoute='contact'>Kontakt</x-header.nav-item>
        
    </ul>
</nav>