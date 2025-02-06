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
            <div class="grid grid-cols-2 w-full gap-4 spacing-4">
                <select name="county" id="county" class="w-full px-3 py-2 border rounded">
                    <option value="">Select County</option>
                    @foreach ($counties as $county)
                    <option value="{{ $county }}">{{ $county }}</option>
                    @endforeach
                </select>
                <select name="subcounty" id="subcounty" class="w-full px-3 py-2 border rounded">
                    <option value="">Select Subcounty</option>
                    @foreach ($subcounties as $subcounty)
                    <option value="{{ $subcounty }}"> {{ $subcounty }}</option>
                    @endforeach
                </select>
                <select name="constituency" id="constituency" class="w-full px-3 py-2 border rounded">
                    <option value="">Select Constituency</option>
                    @foreach ($constituencies as $constituency)
                    <option value="{{ $constituency }}">{{ $constituency }}</option>
                    @endforeach
                </select>
                <select name="ward" id="ward" class="w-full px-3 py-2 border rounded">
                    <option value="">Select Ward</option>
                    @foreach ($wards as $ward)
                    <option value="{{ $ward }}">{{ $ward }}</option>
                    @endforeach
                </select>
                <input type="text" name="location" id="location" class="placeholder:text-neutral-500 placeholder:font-primary font-primary p-2 rounded outline outline-1 outline-black" placeholder="location">
                <input type="text" name="sublocation" id="sublocation" class="placeholder:text-neutral-500 placeholder:font-primary font-primary p-2 rounded outline outline-1 outline-black" placeholder="sublocation">
                <input type="text" name="village" id="village" class="placeholder:text-neutral-500 placeholder:font-primary font-primary p-2 rounded outline outline-1 outline-black" placeholder="village">
            </div>
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
            const budgetLabels = document.querySelectorAll('div[data-form=budget] label');
            const bedroomLabels = document.querySelectorAll('div[data-form=bedrooms] label');

            budgetLabels.forEach(label => {
                const input = label.querySelector('input');

                input.addEventListener('click', (event) => {
                    if (input.checked) {
                        if (label.classList.contains('checked-outline')) {
                            input.checked = false;
                            label.classList.remove('checked-outline');
                        } else {
                            budgetLabels.forEach(l => l.classList.remove('checked-outline'));
                            label.classList.add('checked-outline');
                        }
                    }
                });
            });

            bedroomLabels.forEach(label => {
                const input = label.querySelector('input');

                input.addEventListener('click', () => {
                    if (input.checked) {
                        label.classList.add('checked-outline');
                    } else {
                        label.classList.remove('checked-outline');
                    }
                });
            });
        });
    </script>