@props(['class'=>'','size'=>'large'])

@if($size === 'large')

<h2 class="text-5xl leading-relaxed tracking-widest text-center font-extralight {{$class}}">{{$slot}}</h2>

@elseif ($size === 'medium')

<h2 class="text-3xl font-thin text-center text-fontDark {{$class}}">{{$slot}}</h2>


@endif


