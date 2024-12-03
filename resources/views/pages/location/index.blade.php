<x-layouts.app title="location" description="meta">

    <x-layouts.app-wrapper>

        {{-- hero --}}
        <x-hero image="{{asset('assets/hero.jpg')}}" title="Lokalizacja" subtitle="Lokalizacja" />

        {{-- text --}}
        <x-text-section>
            Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Repellendus quia nihil quibusdam odit veritatis sapiente impedit
            placeat minima facere, at alias dolorum deserunt! Ex pariatur beatae ad cum nemo officia rerum
            aliquam. Similique aliquid error eos, adipisci quis facere voluptate maxime id harum doloribus alias
            quo dolores voluptates omnis rerum expedita sequi officiis! Aut quidem voluptates sapiente
            laudantium magni neque.
        </x-text-section>

        {{-- block --}}
        <x-section>
            <x-container class="max-w-[1700px] space-y-24 ">

                <x-text-image-block-container>

                    {{-- text --}}
                    <x-text-image-block-text>

                        <x-subheading-block>
                            Lorem ipsum dolor sit amet consectetur.
                        </x-subheading-block>

                        <x-heading-block large>
                            Lorem ipsum dolor sit amet consectetur.
                        </x-heading-block>

                        <x-text-block large>
                            Lorem ipsum dolor sit, amet
                            consectetur adipisicing elit. Perferendis temporibus non architecto dicta asperiores
                            corrupti
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

        {{-- block --}}
        <x-section class="pb-24">
            <x-container class="max-w-[1700px] space-y-24 ">

                <x-text-image-block-container>
                    {{-- image --}}
                    <div class="min-h-[400px]">
                        <div class=" h-full w-full">
                            <img src="{{asset('assets/hero.jpg')}}" alt="" class="w-full h-full object-cover">
                        </div>

                    </div>
                    {{-- text --}}
                    <x-text-image-block-text >

                        <x-subheading-block>
                            Lorem ipsum dolor sit amet consectetur.
                        </x-subheading-block>

                        <x-heading-block large>
                            Lorem ipsum dolor sit amet consectetur.
                        </x-heading-block>

                        <x-text-block large>
                            Lorem ipsum dolor sit, amet
                            consectetur adipisicing elit. Perferendis temporibus non architecto dicta asperiores
                            corrupti
                            pariatur commodi eos sit, repudiandae ipsa, atque voluptatibus porro reprehenderit. Numquam,
                            aliquam ipsum molestias necessitatibus vel cum, quas nihil quasi suscipit, fugiat molestiae
                            repellendus cumque?
                        </x-text-block>

                    </x-text-image-block-text>


                </x-text-image-block-container>


            </x-container>
        </x-section>


    </x-layouts.app-wrapper>
</x-layouts.app>