<section id="o-nas" class="py-16 md:pt-12 md:pb-12 ">
    <x-container class="max-w-[1700px] space-y-24 ">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 lg:gap-6">

            {{-- images --}}
            <div class="min-h-[400px]">
                <div class="swiper about-image-carousel h-full ">
                    <div class="swiper-wrapper ">
                        <div class=" h-full w-full swiper-slide">
                            <img src="{{asset('assets/hero.jpg')}}" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class=" h-full w-full swiper-slide">
                            <img src="{{asset('assets/hero-2.jpg')}}" alt="" class="w-full h-full object-cover">
                        </div>

                    </div>
                </div>
                <div class="flex justify-center gap-6 mt-3 px-2">

                    <button class="about-image-prev"><x-lucide-arrow-left-circle  class="size-6 text-accent-400"/>

                    </button>
                    <button class="about-image-next" ><x-lucide-arrow-right-circle  class="size-6 text-accent-400"/>

                    </button>
                </div>
            </div>

            {{-- text --}}
            <div class="bg-bgSecondary-400 py-12 md:py-20 2xl:py-32">

                <div class="px-6 md:px-12 2xl:py-0 2xl:w-3/4 h-full flex flex-col gap-12 justify-center items-start 2xl:pl-20 ">

                    <p class="uppercase text-secondary-200 leading-relaxed tracking-widest font-light text-sm">Lorem
                        ipsum dolor sit amet consectetur.</p>
                    <div class="space-y-4">

                        <h2 class="text-fontDark text-3xl font-extralight">Lorem ipsum dolor sit amet consectetur.</h2>
                        <div class=" border-b border-accent-400 w-[10%] h-[1px] leading-relaxed tracking-widest"
                            style="">
                        </div>

                    </div>

                    <p class="leading-relaxed tracking-widest font-extralight text-sm">Lorem ipsum dolor sit, amet
                        consectetur adipisicing elit. Perferendis temporibus non architecto dicta asperiores corrupti
                        pariatur commodi eos sit, repudiandae ipsa, atque voluptatibus porro reprehenderit. Numquam,
                        aliquam ipsum molestias necessitatibus vel cum, quas nihil quasi suscipit, fugiat molestiae
                        repellendus cumque?</p>


                    <x-link-btn href="">Dowiedz się więcej</x-link-btn>

                </div>
            </div>
        </div>


    </x-container>
</section>