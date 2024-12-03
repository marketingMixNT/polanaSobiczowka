@props(['large'=>false])

<p class="leading-relaxed tracking-widest font-extralight {{$large ? '' : 'text-sm'}} ">{{$slot}}</p>