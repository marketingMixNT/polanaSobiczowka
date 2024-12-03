<nav>
    <ul class="flex justify-center items-center gap-10">

        <x-header.nav-item href="{{route('about')}}" activeRoute="about">O nas</x-header.nav-item>
      

        <x-header.nav-item href="{{route('room.index')}}" activeRoute='rooms.index'>Pokoje</x-header.nav-item>
        <x-header.nav-item href="{{route('location')}}" activeRoute='location'>Lokalizacja</x-header.nav-item>
        <x-header.nav-item href="{{route('gallery')}}" activeRoute='gallery'>Galeria</x-header.nav-item>
        <x-header.nav-item href="{{route('contact')}}" activeRoute='contact'>Kontakt</x-header.nav-item>
        
    </ul>
</nav>