@props(['class'=>''])

<div class=" py-12 md:py-20 2xl:py-32 {{$class}}">

    <div class="px-6 md:px-12 2xl:py-0 2xl:w-[85%] h-full flex flex-col gap-12 justify-center items-start 2xl:pl-20 ">

        {{$slot}}

    </div>
</div>