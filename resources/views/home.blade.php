<x-layout>
    <x-slot:heading>
        Home
    </x-slot:heading>
    <x-navbar.navbar></x-navbar.navbar>
    <section class="flex justify-center items-center flex-col gap-12 h-[530px] my-[40px]">
        <h1 class="font-primary text-8xl w-[976px] text-center">
            Find Your Perfect Rental—Where Dreams Meet Reality
        </h1>
        <button class="button-86 font-primary"> Find your Dream Home </button>
    </section>
    <section class="flex justify-center items-center flex-col gap-12 h-[600px] my-[40px] w-[990px] border-y border-black w-full">
        <div>
            <h1 class="font-primary text-6xl text-center mb-2">
                Find what fits you
            </h1>
            <p class="font-secondary text-xs text-neutral-500 text-center">
                we help you find your dream house at a budget
            </p>
        </div>
        <form action="" method="get">
            <h1 class="font-primary mb-3 text-black text-2xl text-center">
                Search by location
            </h1>
            <x-forms.search-input></x-forms.search-input>
            <br><br>
            <h3 class="font-primary mb-3 text-black text-2xl">
                Filter By Budget
            </h3>
            <div class="flex gap-12 flex-wrap mb-12">
                <div class="px-8 py-4 bg-white shadow font-numbers text-center rounded">price - price</div>
                <div class="px-8 py-4 bg-white shadow font-numbers text-center rounded">price - price</div>
                <div class="px-8 py-4 bg-white shadow font-numbers text-center rounded">price - price</div>
                <div class="px-8 py-4 bg-white shadow font-numbers text-center rounded">price - price</div>
                <div class="px-8 py-4 bg-white shadow font-numbers text-center rounded">price - price</div>
                <div class="px-8 py-4 bg-white shadow font-numbers text-center rounded">price - price</div>
            </div>
            <input type="submit" value="Search" class="w-full text-center bg-black text-white h-[50px] rounded-lg border hover:text-black hover:bg-white transition transition-duration-300 font-primary">
        </form>
    </section>
    <x-footer></x-footer>
</x-layout>