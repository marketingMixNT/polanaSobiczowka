@props(['image','imageMobile','title','subtitle'])

<section
    class="w-[99%] h-[80vh]  mx-auto  flex flex-col justify-center items-start relative">

    <div class="absolute inset-0 bg-black opacity-30 z-0"></div>

    <img src="{{$imageMobile}}" alt="wnętrze apartamentu w Apartamenty Polana Sobiczkowa w Kościelisku"
        class="sm:hidden w-full h-full object-cover object-center absolute top-0 left-0 -z-10" />

    <img src="{{$image}}" alt="wnętrze apartamentu w Apartamenty Polana Sobiczkowa w Kościelisku"
        class="hidden sm:block w-full h-full object-cover object-center absolute top-0 left-0 -z-10" />

    <div
        class="font-heading  text-fontLight  tracking-wide z-50 text-center flex flex-col justify-center items-center gap-16">

        <h1 class=" px-6 md:px-12 lg:px-24 text-center text-4xl xs:text-5xl lg:text-6xl       font-extralight"
            style="line-height: 1.2">
            {{$title}}
        </h1>


    </div>



</section>