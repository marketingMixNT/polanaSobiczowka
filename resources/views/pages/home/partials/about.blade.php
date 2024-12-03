<x-section>
    <x-container class="max-w-[1700px] space-y-24 ">

        <x-text-image-block-container>

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

                    <button class="about-image-prev">
                        <x-lucide-arrow-left-circle class="size-6 text-accent-400" />

                    </button>
                    <button class="about-image-next">
                        <x-lucide-arrow-right-circle class="size-6 text-accent-400" />

                    </button>
                </div>
            </div>

            {{-- text --}}
            <x-text-image-block-text >


                <x-subheading-block class="text-primary-500">
                    Lorem ipsum dolor sit amet consectetur.
                </x-subheading-block>

                <x-heading-block>
                    Lorem ipsum dolor sit amet consectetur.
                </x-heading-block>

                <x-text-block>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui quidem voluptates numquam debitis
                    voluptate nam, temporibus molestias voluptas amet rem quia, facilis magni rerum libero corrupti
                    odio nulla laudantium architecto impedit, tempora sint. Eos eius officiis architecto non illum
                    similique veniam laudantium consequuntur harum, cumque molestiae nostrum optio ullam impedit?
                </x-text-block>


                <x-link-btn href="#">Dowiedz się więcej</x-link-btn>

                </div>
            </x-text-image-block-text>

        </x-text-image-block-container>


    </x-container>
</x-section>