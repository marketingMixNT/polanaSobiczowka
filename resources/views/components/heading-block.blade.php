@props(['large'=>false])

<div class="space-y-4">

    <h2 class="text-fontDark {{$large ? "text-5xl" : 'text-3xl' }}  font-extralight">{{$slot}}</h2>
    <div class=" border-b border-secondary-400 w-[10%] h-[1px] leading-relaxed tracking-widest"
        style="">
    </div>

</div>
