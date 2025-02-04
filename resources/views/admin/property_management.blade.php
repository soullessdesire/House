<x-admin.layout>
    <x-slot:heading>
        Property Management
    </x-slot:heading>
    <section>
        <h1 class="text-6xl font-primary mb-6 w-[950px]">
            Property Management
        </h1>
    </section>
    <section class="grid grid-cols-4 grid-rows-1 gap-2 mb-4">
        <div class="p-2 border shadow rounded flex justify-center items-center flex-col gap-2">
            <h1 class="text-2xl font-primary mb-4">
                <span class="text-xs">#</span><span class="font-numbers text-4xl">1</span> Booking User
            </h1>
            <img src=" {{asset('assets/images/person 1.jpg')}}" alt="" class="w-[150px] h-[150px] rounded-full object-cover mb-4">
            <h3 class="font-secondary text-xl text-center mb-4">Francis Ndungu</h3>
            <p class="text-xs text-neutral-500 text-center font-secondary">francis@gmail.com</p>
        </div>
        <div class="p-2 border shadow rounded flex justify-center items-center flex-col gap-2">
            <h1 class="text-2xl font-primary mb-4">
                <span class="text-xs">#</span><span class="font-numbers text-4xl">1</span> Paying User
            </h1>
            <img src=" {{asset('assets/images/person 2.jpg')}}" alt="" class="w-[150px] h-[150px] rounded-full object-center object-cover mb-4">
            <h3 class="font-secondary text-xl text-center mb-4">Miriam Githingi</h3>
            <p class="text-xs text-neutral-500 text-center font-secondary">miriamgithingi@gmail.com</p>
        </div>
        <div class="rounded shadow border p-2 col-span-2 flex flex-col">
            <form method="GET" action="{{ route('property-management') }}" class="flex justify-between mb-2">
                <input type="text" name="search" value="{{ request('search') }}" id="prop_filter"
                    placeholder="Find Property" class="text-black font-primary outline outline-1 outline-black xy-shadow-no-blur rounded h-[45px] w-4/6 px-3">
                <button type="submit" class="xy-shadow-no-blur rounded border border-black flex justify-center items-center px-2">
                    <ion-icon name="search" class="text-black"></ion-icon>
                </button>
            </form>
            <div class="rounded border shadow max-h-[300px] min-h-[200px] flex-grow flex flex-col gap-2 overflow-y-scroll p-2">
                @foreach ($properties as $property)
                <div class="flex justify-between rounded p-2 xy-shadow-no-blur border">
                    <div class="flex">
                        @foreach ($property->images as $image)
                        <img src="{{$image["image_path"]}}" alt="" class="object-cover h-10 w-10 rounded-full">
                        @endforeach
                    </div>
                    <div class="text-xl font-secondary">
                        {{$property->title}}
                    </div>
                    <form action="{{ route('property.destroy', ['property' => $property->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-800 border border-red-800 text-white rounded transition transition-all duration-300 hover:bg-transparent hover:text-red-800 px-2 py-1 group"><ion-icon name="close-outline" class="text-white group-hover:text-red-800 text-md"></ion-icon></button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="grid grid-rows-1 grid-cols-1 shadow border rounded min-h-[500px]">
        {!! $chart->container() !!}
    </section>
    {{ $chart->script() }}
</x-admin.layout>