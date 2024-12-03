<x-section>
    <x-container class="max-w-[1700px] space-y-24 ">

        <x-text-image-block-container>

            {{-- text --}}
            <x-text-image-block-text class="bg-primary-400">

                <x-subheading-block>
                    Lorem ipsum dolor sit amet consectetur.
                </x-subheading-block>

                <x-heading-block large>
                    Lorem ipsum dolor sit amet consectetur.
                </x-heading-block>

                <x-text-block large>
                    Lorem ipsum dolor sit, amet
                    consectetur adipisicing elit. Perferendis temporibus non architecto dicta asperiores corrupti
                    pariatur commodi eos sit, repudiandae ipsa, atque voluptatibus porro reprehenderit. Numquam,
                    aliquam ipsum molestias necessitatibus vel cum, quas nihil quasi suscipit, fugiat molestiae
                    repellendus cumque?
                </x-text-block>

            </x-text-image-block-text>

            {{-- image --}}
            <div class="min-h-[400px]">
                <div class=" h-full w-full">
                    <img src="{{asset('assets/hero.jpg')}}" alt="" class="w-full h-full object-cover">
                </div>

            </div>
        </x-text-image-block-container>


    </x-container>
</x-section>