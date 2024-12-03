@props(['href','image','alt','title',])

<a href="{{$href}}" class="aspect-square max-w-[550px]  mx-auto group overflow-hidden relative ">
    <img src="{{$image}}" alt="{{$alt}}" class="w-full h-full object-cover group-hover:scale-105 duration-500">
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="z-50 absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 text-center w-full space-y-4 text-fontLight px-12">

        <h2 class="text-2xl leading-relaxed tracking-widest ">{{$title}}</h2>
        <p class="font-extralight text-sm leading-relaxed tracking-widest opacity-0 group-hover:opacity-100 duration-500">{{$slot}}</p>
    </div>
</a>