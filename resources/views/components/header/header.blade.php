<header id="header"
    class="fixed left-0 right-0 top-0 flex justify-between items-center  min-h-[80px] px-5 xl:px-10  bg-primary-100 duration-700 z-50 border-b border-primary-600">

    {{-- logo --}}
    <a href="{{route('home')}}" aria-label="strona główna"
        class="absolute xl:relative left-1/2 xl:left-auto top-1/2 xl:top-auto -translate-x-1/2 xl:-translate-x-0 -translate-y-1/2 xl:-translate-y-0">
        <img src="{{asset('assets/logo/logo--dark.png')}}" alt="logo apartamentów Polana Sobiczkowa " class="w-32 xl:w-36">
    </a>

    <div class="hidden xl:flex justify-center items-center gap-16">
        {{-- links --}}
        <x-header.nav-links />

        {{-- language switcher --}}
        <x-header.language-switcher />
    </div>

    {{-- mobile --}}
    <x-header.language-switcher class="xl:hidden" />
    <x-header.hamburger class="xl:hidden" />



</header>