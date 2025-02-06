<x-layout>
    <x-slot:heading>
        Home
    </x-slot:heading>
    <x-slot:modalContent>
    </x-slot:modalContent>
    <x-navbar.navbar></x-navbar.navbar>
    <section class="flex justify-center items-center flex-col gap-12 h-[530px] my-[40px]">
        <h1 class="font-primary text-8xl w-[976px] text-center">
            Find Your Perfect Rental—Where Dreams Meet Reality
        </h1>
        <button class="button-86 font-primary"> Find your Dream Home </button>
    </section>
    <x-form.shared-search :counties="$counties" :subcounties="$subcounties" :constituencies="$constituencies" :wards="$wards"></x-form.shared-search>
    <x-footer></x-footer>
</x-layout>