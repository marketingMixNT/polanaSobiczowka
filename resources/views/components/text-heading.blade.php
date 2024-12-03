@props(['large'=>false])

<p class="leading-relaxed tracking-widest font-extralight {{$large ? 'text-lg' : ''}} ">{{$slot}}</p>