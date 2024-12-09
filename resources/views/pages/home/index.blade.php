<x-layouts.app title="Luksusowe Apartamenty w Kościelisku – Polana Sobiczkowa"
   description="Odkryj komfortowe apartamenty w Kościelisku, 3 km od Zakopanego. Styl góralski, widoki na Tatry, ogród, WiFi i parking. Idealne miejsce na relaks w sercu natury.">

   <x-layouts.app-wrapper>
      
      @include('pages.home.partials.hero-slider')
      @include('pages.home.partials.rooms')
      @include('pages.home.partials.about')
      @include('pages.home.partials.about-second')
      @include('pages.home.partials.pictograms')
      @include('pages.home.partials.image-slider')
      {{-- @include('pages.home.partials.features') --}}
      @include('pages.home.partials.testimonials')


   </x-layouts.app-wrapper>
</x-layouts.app>