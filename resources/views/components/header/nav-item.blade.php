@props(['href','activeRoute'])



<li>

    <a href="{{$href}}" 
    class="{{ request()->routeIs($activeRoute) ? 'active' : '' }} 
    xl:uppercase hover:text-accent-400 duration-500 text-2xl xl:text-sm font-extralight text-fontLight  xl:text-fontDark
    xl:font-light xl:tracking-widest relative group link-hover ">
    {{$slot}}</a>
</li>