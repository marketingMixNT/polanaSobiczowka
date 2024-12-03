<x-section>
    <x-container class="max-w-screen-xl space-y-12 text-center">

        {{-- heading --}}
        <div class="space-y-6 max-w-screen-lg mx-auto">

            <x-heading-section size="large">Poznaj opinie naszych gości</x-heading-section>

            <x-text-heading large>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, possimus earum!
                Optio, sequi minus aperiam deleniti consectetur eligendi ex aspernatur quos similique quidem
                perspiciatis accusantium autem rerum explicabo totam cupiditate et porro!</x-text-heading>

            </div>
            
            <div class="flex justify-center items-center">
                <x-rating source="google" rate="5/5" href="#" />
            </div>
        {{-- testimonials --}}
        <div class="swiper testimonials-carousel max-w-screen-md">
            <div class="swiper-wrapper ">

               <x-testimonial-card author="Martin Necas" source="google.pl" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga exercitationem repudiandae ratione, iusto doloribus necessitatibus recusandae. Numquam cum debitis dignissimos quasi velit, praesentium quod sit magni ipsum reprehenderit aspernatur et."/>

               <x-testimonial-card author="Brent Burns" source="google.pl" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga exercitationem repudiandae ratione, iusto doloribus necessitatibus recusandae. Numquam cum debitis dignissimos quasi velit, praesentium quod sit magni ipsum reprehenderit aspernatur et."/>

            </div>
        </div>


    </x-container>
</x-section>