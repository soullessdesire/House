<x-layout>
    <x-slot:heading>
        Home
    </x-slot:heading>
    <x-slot:otherImports>
    </x-slot:otherImports>
    <x-navbar.navbar></x-navbar.navbar>
    <section class="flex justify-center items-center flex-col gap-12 h-[530px] my-[40px]">
        <h1 class="font-primary text-8xl w-[976px] text-center">
            Find Your Perfect Rental—Where Dreams Meet Reality
        </h1>
        <button class="button-86 font-primary"> Find your Dream Home </button>
    </section>
    <section class="flex justify-center items-center flex-col gap-12 lg:h-[900px] sm:h-[1500px] my-[40px] w-[990px] border-y border-black w-full">
        <div>
            <h1 class="font-primary text-6xl text-center mb-2">
                Find what fits you
            </h1>
            <p class="font-secondary text-xs text-neutral-500 text-center">
                we help you find your dream house at a budget
            </p>
        </div>
        <form action="{{route('property')}}" method="get">
            <h1 class="font-primary mb-3 text-black text-2xl text-center">
                Search by location
            </h1>
            <x-forms.search-input></x-forms.search-input>
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
        </form>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
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
        });
    </script>

    <x-footer></x-footer>
</x-layout>