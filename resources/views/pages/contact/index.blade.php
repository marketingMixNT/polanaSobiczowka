<x-layouts.app title="Kontakt" description="meta">

    <x-layouts.app-wrapper>

        {{-- hero --}}
        <x-hero image="{{asset('assets/hero.jpg')}}" title="Kontakt" subtitle="Kontakt" />

        {{-- contact cards --}}
        <div class="border-t border-b w-full   py-8 border-primary-400 grid grid-cols-1 md:grid-cols-3 gap-y-12 max-w-screen-xl mx-auto my-12">

            <x-contact-card heading="Telefon" href="tel:+48123456789" text="+48 123 456 789">
                <x-lucide-phone class="w-12 text-primary-600 mb-3 group-hover:scale-105 duration-500" />
            </x-contact-card>

            <x-contact-card heading="Email" href="mailto:test@gmail.com" text="test@test.pl">
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