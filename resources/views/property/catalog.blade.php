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
    <x-form.shared-search :counties="$counties" :subcounties="$subcounties" :constituencies="$constituencies" :wards="$wards"></x-form.shared-search>
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