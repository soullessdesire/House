<x-layout>
    <x-slot:heading>
        Catalog
    </x-slot:heading>
    <x-navbar.navbar></x-navbar.navbar>
    <section class="flex justify-center items-center flex-col gap-12 h-[400px] my-[40px]">
        <h1 class="font-primary text-8xl w-[976px] text-center">
            Catalog
        </h1>
    </section>
    <section class="border-y border-black w-full h-[100px]" data-height="change">
        <form action="{{route('property')}}" method="get" class="flex flex-col w-full items-center h-full">
            <div class="flex justify-between w-full items-center h-fit mt-3">
                <x-form.search class="w-[950px]"></x-form.search>
                <button class="w-[50px] h-[50px] bg-white border border-black xy-shadow-no-blur rounded" type="button" data-type="menu">
                    <ion-icon name="filter-outline" class="text-black"></ion-icon>
                </button>
            </div>
            <div class="hidden" data-form=full>
                <br><br>
                <h3 class="font-primary mb-3 text-black text-2xl">
                    Filter By Budget
                </h3>
                <div class="flex gap-12 flex-wrap mb-12" data-form="budget">
                    <label class="px-8 py-4 bg-white shadow font-numbers text-center rounded checkbox-label">
                        <input type="radio" name="budget" value="price-1" class="mr-2 checkbox-input"> price - price
                    </label>
                    <label class="px-8 py-4 bg-white shadow font-numbers text-center rounded checkbox-label">
                        <input type="radio" name="budget" value="price-2" class="mr-2 checkbox-input"> price - price
                    </label>
                    <label class="px-8 py-4 bg-white shadow font-numbers text-center rounded checkbox-label">
                        <input type="radio" name="budget" value="price-3" class="mr-2 checkbox-input"> price - price
                    </label>
                    <label class="px-8 py-4 bg-white shadow font-numbers text-center rounded checkbox-label">
                        <input type="radio" name="budget" value="price-4" class="mr-2 checkbox-input"> price - price
                    </label>
                    <label class="px-8 py-4 bg-white shadow font-numbers text-center rounded checkbox-label">
                        <input type="radio" name="budget" value="price-5" class="mr-2 checkbox-input"> price - price
                    </label>
                    <label class="px-8 py-4 bg-white shadow font-numbers text-center rounded checkbox-label">
                        <input type="radio" name="budget" value="price-6" class="mr-2 checkbox-input"> price - price
                    </label>
                </div>

                <br><br>
                <h3 class="font-primary mb-3 text-black text-2xl">
                    Preferred Bedrooms Category
                </h3>
                <div class="flex gap-12 flex-wrap mb-12" data-form="bedrooms">
                    <label class="px-8 py-4 bg-white shadow font-numbers text-center rounded checkbox-label">
                        <input type="checkbox" name="bedrooms[]" value="0" class="mr-2 checkbox-input"> Bedsitter
                    </label>
                    <label class="px-8 py-4 bg-white shadow font-numbers text-center rounded checkbox-label">
                        <input type="checkbox" name="bedrooms[]" value="0.5" class="mr-2 checkbox-input"> Single Room
                    </label>
                    <label class="px-8 py-4 bg-white shadow font-numbers text-center rounded checkbox-label">
                        <input type="checkbox" name="bedrooms[]" value="1" class="mr-2 checkbox-input"> One bedroom
                    </label>
                    <label class="px-8 py-4 bg-white shadow font-numbers text-center rounded checkbox-label">
                        <input type="checkbox" name="bedrooms[]" value="2" class="mr-2 checkbox-input"> Two bedroom
                    </label>
                    <label class="px-8 py-4 bg-white shadow font-numbers text-center rounded checkbox-label">
                        <input type="checkbox" name="bedrooms[]" value="3" class="mr-2 checkbox-input"> Three bedroom
                    </label>
                    <label class="px-8 py-4 bg-white shadow font-numbers text-center rounded checkbox-label">
                        <input type="checkbox" name="bedrooms[]" value="4" class="mr-2 checkbox-input"> Four bedroom
                    </label>
                    <label class="px-8 py-4 bg-white shadow font-numbers text-center rounded checkbox-label">
                        <input type="checkbox" name="bedrooms[]" value="5" class="mr-2 checkbox-input"> Five bedroom
                    </label>
                    <label class="px-8 py-4 bg-white shadow font-numbers text-center rounded checkbox-label">
                        <input type="checkbox" name="bedrooms[]" value="6" class="mr-2 checkbox-input"> Six bedroom
                    </label>
                </div>

                <input type="submit" value="Search" class="w-full text-center bg-black text-white h-[50px] rounded-lg outline outline-black outline-1 hover:text-black hover:bg-white transition transition-duration-300 font-primary">

            </div>
        </form>
    </section>
    <section class=" flex justify-center items-center p-2">
        <h1 class="font-primary text-6xl text-left self-start">
            Houses
        </h1>
    </section>
    <section class="grid grid-cols-3 gap-12 h-[2050px]">
        @foreach ($properties as $property)
        <div class="flex flex-col gap-2 rouded shadow border p-2 h-[450px]">
            <img src="{{asset('assets/images/house.jpeg')}}" alt="" class="rounded object-cover w-full aspect-ratio-1">
            <h3 class="font-primary text-xl text-left">{{ $property->title }}</h3>
            <p class="font-secondary text-sm text-neutral-500 mb-auto">{{ $property->description }}</p>
            <a href="{{url('/property/'. $property->id)}}" class="justify-self-end px-4 py-3 bg-black rounded border w-fit border-black text-white hover:text-black hover:bg-white transition transitioon-duration-500">Check This House</a>
        </div>
        @endforeach
        <div class="col-span-3 border-t border-black py-3">
            {{ $properties->links() }}
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelector('[data-type=menu]').addEventListener('click', (e) => {
                const elToChange = document.querySelector('[data-height=change]')
                const elToDisplay = document.querySelector('[data-form=full]')

                elToChange.classList.toggle('h-800')

                elToDisplay.classList.toggle('hidden')

            });
            const checkboxesParent = document.querySelector('div[data-form=budget]');
            const checkboxesParentBeds = document.querySelector('div[data-form=bedrooms]');

            checkboxesParent.addEventListener('click', (e) => {
                e.stopPropagation();

                console.log(e.target.parentNode);
                if (e.target.tagName === 'INPUT' && e.target.type === 'radio') {
                    checkboxesParent.querySelectorAll('label').forEach(label => {
                        label.classList.remove('checked-outline');
                    });
                    e.target.closest('label').classList.add('checked-outline');
                }
            });

            checkboxesParentBeds.addEventListener('click', (e) => {
                e.stopPropagation();

                console.log(e.target.parentNode);
                if (e.target.tagName === 'INPUT' && e.target.type === 'radio') {
                    checkboxesParent.querySelectorAll('label').forEach(label => {
                        label.classList.remove('checked-outline');
                    });
                    e.target.closest('label').classList.add('checked-outline');
                }
            });
        })
    </script>

    <x-footer></x-footer>
</x-layout>