<x-layouts.app title="Apartament i Domek Polana Sobiczkowa - Komfort w Kościelisku"
   description="Oferujemy apartament i domek w Kościelisku. Widok na Tatry, komfortowe wnętrza i bliskość Zakopanego. Idealne miejsce na wypoczynek!">

   <x-layouts.app-wrapper>
      
      @include('pages.home.partials.hero-slider')
      {{-- @include('pages.home.partials.rooms') --}}
      @include('pages.home.partials.about')
      @include('pages.home.partials.about-second')
      @include('pages.home.partials.pictograms')
      @include('pages.home.partials.image-slider')
      {{-- @include('pages.home.partials.features') --}}
      @include('pages.home.partials.testimonials')


   </x-layouts.app-wrapper>
</x-layouts.app>