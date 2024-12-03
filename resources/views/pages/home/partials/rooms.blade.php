<x-section id="o-nas">
    <x-container class="max-w-screen-xl space-y-6 ">

        <x-heading-section>Zobacz nasze pokoje</x-heading-section>

        <x-hr />

        {{-- room grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-2  gap-12">

            <x-room-card href="#" image="{{asset('assets/hero.jpg')}}" alt="#" title="Apartament z 1 sypialnią">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Blanditiis praesentium animi possimus.
            </x-room-card>

            <x-room-card href="#" image="{{asset('assets/hero.jpg')}}" alt="#" title="Apartament z widokiem na góry">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Blanditiis praesentium animi possimus.
            </x-room-card>

        </div>

        <x-hr />

    </x-container>
</x-section>