<x-layout>
    <x-slot:heading>
        Catalog
    </x-slot:heading>
    <x-slot:otherImports>
    </x-slot:otherImports>
    <x-navbar.navbar></x-navbar.navbar>
    <section class="flex justify-center items-center flex-col gap-12 h-[470px] my-[40px]">
        <h1 class="font-primary text-8xl w-[976px] text-center">
            Catalog
        </h1>
    </section>
    <section class="border-y border-black w-full h-[100px]">
        <form action="" method="get" class="flex justify-between w-full items-center h-full">
            <x-forms.search-input class="w-[1000px]"></x-forms.search-input>
            <button class="w-[50px] h-[50px] bg-white border border-black xy-shadow-no-blur rounded">
                <ion-icon name="filter-outline" class="text-black"></ion-icon>
            </button>
        </form>
    </section>
    <section class=" flex justify-center items-center p-2">
        <h1 class="font-primary text-6xl text-left self-start">
            Houses
        </h1>
    </section>
    <section></section>
    <x-footer></x-footer>
</x-layout>