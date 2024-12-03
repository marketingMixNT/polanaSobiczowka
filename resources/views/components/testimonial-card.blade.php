<div class="swiper-slide">

    <div class="testimonial relative mx-12 mt-12 flex flex-col gap-8 jc-center items-center">
        <img src="{{ asset('assets/icons/quote.svg') }}" alt=""
            class="absolute -top-7 -left-12 w-12 opacity-80 ">
        <p class="leading-relaxed tracking-widest font-extralight ">{{$content}}</p>
        <span class="font-text text-sm text-secondary-400 tracking-widest ">{{$author}}, <span class="font-light text-xs">{{$source}}</span></span>
    </div>
</div>