@props(['image','title','subtitle'])

<section
    class="w-[99%] h-[80vh] bg-cover bg-center bg-fixed mx-auto bg-blend-multiply bg-gray-400 flex flex-col justify-center items-center relative"
    style="background-image:url({{$image}})">

<div class="font-heading  text-fontLight  tracking-wide z-50 text-center flex flex-col justify-center items-center gap-16">

    <h1 class=" px-6 md:px-12 text-center text-4xl xs:text-5xl lg:text-7xl       font-extralight"
    style="line-height: 1.2">
   {{$title}}
</h1>
<span class=" text-sm lg:text-2xl font-thin font-text ">
    {{$subtitle}}</span>

</div>

<x-link-btn class="absolute bottom-32 flex justify-center items-center w-[200px] " href="">Zarezerwuj</x-link-btn>

</section>