<x-layouts.app title="Kontakt – Apartament Polana Sobiczkowa" description="Skontaktuj się z nami, aby zarezerwować pobyt w Apartamencie Polana Sobiczkowa. Jesteśmy dostępni, aby odpowiedzieć na wszystkie pytania i pomóc w planowaniu Twojego wypoczynku.">

    <x-layouts.app-wrapper>

        {{-- hero --}}
        <x-hero 
        image="{{asset('assets/img/desktop/polana-sobiczkowa-10.webp')}}"
        imageMobile="{{asset('assets/img/mobile/polana-sobiczkowa-10.webp')}}"
    

         title="Kontakt" subtitle="Skontaktuj się z nami" />

        {{-- contact cards --}}
        <div class="border-t border-b w-full   py-8 border-primary-400 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-12 max-w-screen-xl mx-auto my-12">

            <x-contact-card heading="Telefon" href="tel:+48604280425" text="+48 604 280 425">
                <x-lucide-phone class="w-12 text-primary-600 mb-3 group-hover:scale-105 duration-500" />
            </x-contact-card>

            <x-contact-card heading="Telefon" href="tel:+48604101207" text="+48 604 101 207">
                <x-lucide-phone class="w-12 text-primary-600 mb-3 group-hover:scale-105 duration-500" />
            </x-contact-card>

            <x-contact-card heading="Email" href="mailto:polana.sobiczkowa@gmail.com" text="polana.sobiczkowa@gmail.com">
                <x-lucide-mail class="w-12 text-primary-600 mb-3 group-hover:scale-105 duration-500" />
            </x-contact-card>

            <x-contact-card heading="Adres" href="https://maps.app.goo.gl/xwWZQ1RN8K64soyL8"
                text="Sobiczkowa 59<br>34-511 Kościelisko">
                <x-lucide-map-pin class="w-12 text-primary-600 mb-3 group-hover:scale-105 duration-500" />
            </x-contact-card>



        </div>

        {{-- contact form --}}
        <section class="py-4">

            <div class="bg-primary-300 max-w-[1700px] mx-auto py-32 px-12 2xl:px-0">
                
                <x-heading-section size="large">Formularz kontaktowy</x-heading-section>

                <div class="max-w-screen-lg mx-auto pt-16">

                    {{-- form --}}
                    <livewire:contact-form/>
                </div>

            </div>
        </section>


    </x-layouts.app-wrapper>
</x-layouts.app>