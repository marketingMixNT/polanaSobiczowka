<nav id="mobile-bottom-nav"
    class="bottom-nav_container fixed -bottom-20 left-0 right-0  grid lg:hidden grid-cols-4 z-30 transition-all duration-300  ">

    <x-shared.mobile-buttons.mobile-button-item href="{{route('contact')}}" target="_blank">
        <x-lucide-pointer class="size-5  text-fontLight" />
        <span class="text-xs uppercase  text-fontLight">Zarezerwuj</span>
    </x-shared.mobile-buttons.mobile-button-item>
   

    <x-shared.mobile-buttons.mobile-button-item href="{{route('gallery')}}">
        <x-lucide-images class="size-5  text-fontDark" />
        <span class="text-xs uppercase  text-fontDark">Galeria</span>
    </x-shared.mobile-buttons.mobile-button-item>


    <x-shared.mobile-buttons.mobile-button-item href="tel:+48604280425">
        <x-lucide-phone class="size-5  text-fontDark" />
        <span class="text-xs uppercase  text-fontDark">Telefon</span>
    </x-shared.mobile-buttons.mobile-button-item>
    

    <x-shared.mobile-buttons.mobile-button-item href="{{route('location')}}" target="_blank">
        <x-lucide-map-pin class="size-5 text-fontDark" />
        <span class="text-xs uppercase  text-fontDark">Lokalizacja</span>
    </x-shared.mobile-buttons.mobile-button-item>
    

</nav>