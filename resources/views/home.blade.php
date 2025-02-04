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
    <section class="flex justify-center items-center flex-col gap-12 lg:h-[1000px] sm:h-[1500px] my-[40px] w-[990px] border-y border-black w-full">
        <div>
            <h1 class="font-primary text-6xl text-center mb-2">
                Find what fits you
            </h1>
            <p class="font-secondary text-xs text-neutral-500 text-center">
                we help you find your dream house at a budget
            </p>
        </div>
        <form action="{{route('property')}}" method="GET" class="w-full">
            <h1 class="font-primary mb-3 text-black text-2xl text-center">
                Search by location
            </h1>
            <br><br>
            <div class="grid grid-cols-2 w-full gap-4">
                <select name="county" id="county" class="w-full px-3 py-2 border rounded">
                    <option value="">Select County</option>
                    @foreach ($counties as $county)
                    <option value="{{ $county }}">{{ $county }}</option>
                    @endforeach
                </select>
                <select name="subcounty" id="subcounty" class="w-full px-3 py-2 border rounded">
                    <option value="">Select Subcounty</option>
                </select>
                <select name="constituency" id="constituency" class="w-full px-3 py-2 border rounded">
                    <option value="">Select Constituency</option>
                </select>
                <select name="ward" id="ward" class="w-full px-3 py-2 border rounded">
                    <option value="">Select Ward</option>
                </select>
                <select name="location" id="location" class="w-full px-3 py-2 border rounded">
                    <option value="">Select Location</option>
                </select>
                <select name="sublocation" id="sublocation" class="w-full px-3 py-2 border rounded">
                    <option value="">Select Sublocation</option>
                </select>
                <select name="village" id="village" class="w-full px-3 py-2 border rounded">
                    <option value="">Select Village</option>
                </select>
            </div>
            <br><br>
            </div>

            <h3 class="font-primary mb-3 text-black text-2xl">
                Filter By Budget
            </h3>
            <div class="flex gap-12 flex-wrap mb-12" data-form="budget">
                <label class="px-8 py-4 bg-black font-numbers text-center rounded checkbox-label border hover:text-black text-white transition-all duration-300 hover:bg-transparent border-black">
                    <input type="radio" name="budget" value="0 - 2000" class="mr-2 checkbox-input"> 0 - 2k
                </label>
                <label class="px-8 py-4 bg-black font-numbers text-center rounded checkbox-label border hover:text-black text-white transition-all duration-300 hover:bg-transparent border-black">
                    <input type="radio" name="budget" value="2000 - 4000" class="mr-2 checkbox-input"> 2k - 4k
                </label>
                <label class="px-8 py-4 bg-black font-numbers text-center rounded checkbox-label border hover:text-black text-white transition-all duration-300 hover:bg-transparent border-black">
                    <input type="radio" name="budget" value="4000 - 6000" class="mr-2 checkbox-input"> 4k - 6k
                </label>
                <label class="px-8 py-4 bg-black font-numbers text-center rounded checkbox-label border hover:text-black text-white transition-all duration-300 hover:bg-transparent border-black">
                    <input type="radio" name="budget" value="6000 - 8000" class="mr-2 checkbox-input"> 6k - 8k
                </label>
                <label class="px-8 py-4 bg-black font-numbers text-center rounded checkbox-label border hover:text-black text-white transition-all duration-300 hover:bg-transparent border-black">
                    <input type="radio" name="budget" value="8000 - 10000" class="mr-2 checkbox-input"> 8k - 10k
                </label>
                <label class="px-8 py-4 bg-black font-numbers text-center rounded checkbox-label border hover:text-black text-white transition-all duration-300 hover:bg-transparent border-black">
                    <input type="radio" name="budget" value="10000 - 12000" class="mr-2 checkbox-input"> 10k - 12k
                </label>
            </div>


            <h3 class="font-primary mb-3 text-black text-2xl">
                Preferred Bedrooms Category
            </h3>
            <div class="flex gap-12 flex-wrap mb-12" data-form="bedrooms">
                <label class="px-8 py-4 bg-black text-white transition-all duration-300 hover:bg-transparent hover:text-black border border-black font-numbers text-center rounded checkbox-label">
                    <input type="checkbox" name="bedrooms[]" value="0" class="mr-2 checkbox-input"> Bedsitter
                </label>
                <label class="px-8 py-4 bg-black text-white transition-all duration-300 hover:bg-transparent hover:text-black border border-black font-numbers text-center rounded checkbox-label">
                    <input type="checkbox" name="bedrooms[]" value="0.5" class="mr-2 checkbox-input"> Single Room
                </label>
                <label class="px-8 py-4 bg-black text-white transition-all duration-300 hover:bg-transparent hover:text-black border border-black font-numbers text-center rounded checkbox-label">
                    <input type="checkbox" name="bedrooms[]" value="1" class="mr-2 checkbox-input"> One bedroom
                </label>
                <label class="px-8 py-4 bg-black text-white transition-all duration-300 hover:bg-transparent hover:text-black border border-black font-numbers text-center rounded checkbox-label">
                    <input type="checkbox" name="bedrooms[]" value="2" class="mr-2 checkbox-input"> Two bedroom
                </label>
                <label class="px-8 py-4 bg-black text-white transition-all duration-300 hover:bg-transparent hover:text-black border border-black font-numbers text-center rounded checkbox-label">
                    <input type="checkbox" name="bedrooms[]" value="3" class="mr-2 checkbox-input"> Three bedroom
                </label>
                <label class="px-8 py-4 bg-black text-white transition-all duration-300 hover:bg-transparent hover:text-black border border-black font-numbers text-center rounded checkbox-label">
                    <input type="checkbox" name="bedrooms[]" value="4" class="mr-2 checkbox-input"> Four bedroom
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
                if (e.target.tagName === 'INPUT' && e.target.type === 'checkbox') {
                    checkboxesParent.querySelectorAll('label').forEach(label => {
                        label.classList.remove('checked-outline');
                    });
                    e.target.closest('label').classList.toggle('checked-outline');
                }
            });
        });
    </script>

    <x-footer></x-footer>
</x-layout>