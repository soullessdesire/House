@php
$bedroom_object = [
'0' => 'Bedsitter',
'0.5' => 'Single Room',
'1' => 'One Bedroom',
'2' => 'Two Bedroom',
'3' => 'Three Bedroom',
'4' => 'Four Bedroom',
'5' => 'Five Bedroom',
'6' => 'Six Bedroom'
];
@endphp


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
    @error('*')
    There has been an error. Please try again
    @enderror
    <section class="grid grid-cols-3 gap-12 h-fit">
        @if ($properties)
        @foreach ($properties as $property)
        <div class="flex flex-col gap-2 rouded shadow border p-2 h-[500px]">
            <img src="{{asset('assets/images/house.jpeg')}}" alt="" class="rounded object-cover w-full aspect-ratio-1">
            <h3 class="font-primary text-xl text-left">{{ $property->title }}
            </h3>
            <div class="flex gap-2">
                <span class="backdrop-blur h-fit w-fit px-2 py-1 rounded border-l-white/20 border-t-white/20 text-sm bg-neutral-500">
                    <a href="{{url('/property?budget='.floor($property->price))}}">
                        {{$property->price}}
                    </a>
                </span>
                <span class="backdrop-blur h-fit w-fit px-2 py-1 rounded border-l-white/20 border-t-white/20 text-sm bg-neutral-500">
                    <a href="{{ url('/property?bedrooms[]='.$property->bedrooms)}}">
                        {{$bedroom_object[(string)$property->bedrooms]}}
                    </a>
                </span>
                <span class="backdrop-blur h-fit w-fit px-2 py-1 rounded border-l-white/20 border-t-white/20 text-sm bg-neutral-500">
                    <a href="{{ url('/property?county='.$property->location->county)}}">
                        {{$property->location->county}}
                    </a>
                </span>
                <span class="backdrop-blur h-fit w-fit px-2 py-1 rounded border-l-white/20 border-t-white/20 text-sm bg-neutral-500">
                    <a href="{{ url('/property?status='.$property->status)}}">
                        {{$property->status}}
                    </a>
                </span>
            </div>
            <p class="font-secondary text-sm text-neutral-500 mb-auto">{{ $property->description }}</p>
            <a href="{{url('/property/'. $property->id)}}" class="justify-self-end px-4 py-3 bg-black rounded border w-fit border-black text-white hover:text-black hover:bg-transparent transition-all duration-500">Check This House</a>
        </div>
        @endforeach
        <div class="col-span-3 border-t border-black py-3">
            {{ $properties->links() }}
        </div>
        @else
        <h1 class="flex gap-2 text-center justify-center items-center">
            <ion-icon name="information-circle-outline"></ion-icon>
            There are no rooms of that description
        </h1>
        @endif

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