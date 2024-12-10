<div id="mobileMenu"
    class="fixed top-0 bottom-0 right-0 left-0 sm:left-1/2  flex flex-col justify-between px-7 py-5  bg-primary-800  opacity-0 duration-300 ease-out z-50 translate-x-[100%]" style="z-index: 10000000000">

    <div class="flex flex-col gap-16">

        {{-- close --}}
        <div class="flex justify-end">
            <button id="closeMenu" class="border border-white p-2 rounded-full cursor-pointer group" aria-label="Zamknij menu">
                <img src="{{asset('assets/icons/close.svg')}}" alt=""
                    class="size-10 group-hover:rotate-90 duration-300">
            </button>
        </div>

        <nav>
            <ul class="flex flex-col justify-start items-start gap-5 pl-6">
                <x-header.nav-item href="{{route('about')}}" activeRoute="about">O nas</x-header.nav-item>
                <x-header.nav-item href="{{route('apartment')}}" activeRoute="apartment">Apartament</x-header.nav-item>

                
                {{-- <x-header.dropdown-mobile title="Apartamenty">
                   
                    <x-header.dropdown-mobile-item href="{{route('room.first')}}" activeRoute="room.first">Apartament z 1 sypialnią</x-header.dropdown-mobile-item>
                    <x-header.dropdown-mobile-item href="{{route('room.second')}}" activeRoute="room.second">Apartament z widokiem na góry</x-header.dropdown-mobile-item>
                  
                  
                
                </x-header.dropdown-mobile> --}}

                <x-header.nav-item href="{{route('location')}}" activeRoute='location'>Lokalizacja</x-header.nav-item>
                <x-header.nav-item href="{{route('gallery')}}" activeRoute='gallery'>Galeria</x-header.nav-item>
                <x-header.nav-item href="{{route('contact')}}" activeRoute='contact'>Kontakt</x-header.nav-item>
           
            </ul>
        </nav>
    </div>
    <div class="flex flex-col justify-end ">
        <hr class="mb-5">
        <ul id="languageSwitcher"
        class="justify-center items-center gap-5 list-none text-sm flex border border-primary-500 px-[7px] py-[5px] self-end">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}"
                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                class="relative uppercase hover:text-accent-400 duration-500  text-sm text-fontLight tracking-wider font-extralight {{ App::getLocale() === $localeCode ? ' before:absolute before:bottom-0 before:left-0 before:w-[70%] before:h-[1px] before:bg-accent-400 active font-normal ' : '' }}">
                {{ strtoupper($localeCode) }}
            </a>
        </li>
        @endforeach
    </ul>



    </div>

</div>