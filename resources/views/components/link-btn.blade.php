@props(['href','class'=>'',])

<a href="{{$href}}" class="border border-secondary-400 px-8 py-3 text-sm rounded-3xl bg-primary-400 text-fontDark hover:bg-secondary-400 hover:text-fontLight duration-500 {{$class}}">{{$slot}}</a>