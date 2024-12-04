<x-layouts.app title="gallery" description="meta">

    <x-layouts.app-wrapper>

        {{-- hero --}}
        <x-hero image="{{asset('assets/hero.jpg')}}" title="Galeria" subtitle="Galeria" />

        <x-section>
            <x-container class="max-w-[1700px] space-y-24 ">
        <div class="flex justify-center items-center gap-4 flex-wrap mb-12">

            {{-- "All" Button --}}
            {{-- <button
                class="border   px-8 py-3 uppercase text-xs duration-300 bg-secondary-400   text-fontLight   gallery-btn filter-btn"
                data-title="">
                Wszystkie
            </button> --}}
            <x-button data-title="" class="filter-btn gallery-btn">Wszyskie</x-button>

            {{-- Buttons to filter by title --}}
            {{-- @foreach ($images as $image) --}}

            {{-- <button
                class="filter-btn border   px-8 py-3 uppercase text-xs duration-300  bg-secondary-400   text-fontLight"
                data-title="1" aria-label="Filtruj przez: 1">
                1
            </button> --}}
            <x-button data-title="1" class="filter-btn">1</x-button>
            <x-button data-title="2" class="filter-btn">2</x-button>
            {{-- @endforeach --}}
        </div>
       

      
 {{-- Container for filtered images --}}
 <div class="grid  sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="image-gallery">
    {{-- @foreach ($images as $image)
    @foreach ($image->images as $img) --}}
    <div class="w-full h-full object-cover image-item" data-title="1">
        <a href="{{asset('assets/hero.jpg')}}" class="glightbox">

            <img src="{{asset('assets/hero.jpg')}}"
                alt="" loading="lazy"
                class="w-full object-cover aspect-square">
        </a>

    </div>
    <div class="w-full h-full object-cover image-item" data-title="2">
        <a href="{{asset('assets/hero-2.jpg')}}" class="glightbox">

            <img src="{{asset('assets/hero-2.jpg')}}"
                alt="" loading="lazy"
                class="w-full object-cover aspect-square">
        </a>

    </div>
    {{-- @endforeach
    @endforeach --}}
</div>

            </x-container></x-section>
    </x-layouts.app-wrapper>
</x-layouts.app>