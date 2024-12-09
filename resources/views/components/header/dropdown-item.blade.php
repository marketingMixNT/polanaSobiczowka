@props(['href','activeRoute'])

<li class=" text-sm border-b border-bgSecondary-600 bg-primary-100 duration-500 hover:bg-bgThird">
    <a href="{{$href}}"
       class="{{ request()->routeIs($activeRoute) ? 'text-accent-400' : 'text-fontDark' }} flex items-center justify-center w-full h-full p-5 text-center  hover:text-secondary-400 hover:bg-primary-200 duration-500 font-extralight ">
        {{$slot}}
    </a>
</li>