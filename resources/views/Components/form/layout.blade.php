<x-layout>
    <x-slot:heading>
        Post a Rental
    </x-slot:heading>
    <section class="w-full flex {{ $height }} justify-center items-center">
        <div class="w-[600px] border border-black xy-shadow-no-blur rounded p-4 bg-white">
            <h1 class="font-primary text-4xl mb-10">
                Post a Rental
            </h1>
            {{ $slot }}
        </div>
    </section>
</x-layout>