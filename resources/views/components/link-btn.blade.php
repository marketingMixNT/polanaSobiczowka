@props(['href','class'=>''])

<a href="{{$href}}" class="border border-accent-400 px-8 py-3 text-sm rounded-3xl bg-accent-400 text-primary-400 hover:bg-primary-400 hover:text-accent-400 duration-500 {{$class}}">{{$slot}}</a>