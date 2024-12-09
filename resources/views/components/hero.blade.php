@props(['image','imageMobile','title','subtitle'])

<section class="w-[99%] h-[80vh] mx-auto flex flex-col justify-center items-center relative">

    <div class="absolute inset-0 bg-black opacity-30 z-0"></div>

    <img src="{{$imageMobile}}" alt="wnętrze apartamentu w Apartamenty Polana Sobiczkowa w Kościelisku"
        class="sm:hidden w-full h-full object-cover object-center absolute top-0 left-0 -z-10" />

    <img src="{{$image}}" alt="wnętrze apartamentu w Apartamenty Polana Sobiczkowa w Kościelisku"
        class="hidden sm:block w-full h-full object-cover object-center absolute top-0 left-0 -z-10" />

    <div
        class="font-heading text-fontLight tracking-wide z-20 text-center flex flex-col justify-center items-center gap-16">
        <h1 class="px-6 md:px-12 text-center text-4xl xs:text-5xl lg:text-7xl font-extralight" style="line-height: 1.2">
            {{$title}}
        </h1>
        <span class="text-sm lg:text-2xl font-thin font-text">
            {{$subtitle}}
        </span>
    </div>

    <x-link-btn class="absolute bottom-32 flex justify-center items-center w-[200px] z-30" href="{{route('contact')}}">
        Zarezerwuj
    </x-link-btn>
</section>