<x-admin_layout>
    <x-slot:heading>
        User Management
    </x-slot:heading>
    <section class="w-[950px]">
        <h1 class="text-6xl font-primary mb-6">
            User Management
        </h1>
    </section>
    <section class="grid grid-cols-3 grid-rows-1 w-full gap-6 mb-6 ">
        <div class="p-2 border shadow rounded flex justify-center items-center flex-col gap-2">
            <h1 class="text-3xl font-primary mb-4">
                <span class="text-xs">#</span><span class="font-numbers text-5xl">1</span> Booking User
            </h1>
            <img src="{{asset('assets/images/person 1.jpg')}}" alt="" class="w-[200px] h-[200px] rounded-full object-center object-cover mb-2">
            <h3 class="font-secondary text-xl mb-2 text-center">Francis Ndungu</h3>
            <p class="text-xs text-neutral-500 text-center font-secondary">francis@gmail.com</p>
        </div>
        <div class="p-2 border shadow rounded flex justify-center items-center flex-col gap-2">
            <h1 class="text-3xl font-primary mb-4">
                <span class="text-xs">#</span><span class="font-numbers text-5xl">1</span> Posting User
            </h1>
            <img src="{{asset('assets/images/person 2.jpg')}}" alt="" class="w-[200px] h-[200px] rounded-full object-center object-cover mb-2">
            <h3 class="font-secondary text-xl mb-2 text-center">Miriam Githingi</h3>
            <p class="text-xs text-neutral-500 text-center font-secondary">miriamgithingi@gmail.com</p>
        </div>
        <div class="p-2 border shadow rounded flex justify-center items-center flex-col gap-2">
            <h1 class="text-3xl font-primary mb-4">
                <span class="text-xs">#</span><span class="font-numbers text-5xl">1</span> Paying User
            </h1>
            <img src="{{asset('assets/images/person 3.jpg')}}" alt="" class="w-[200px] h-[200px] rounded-full object-center object-cover mb-2">
            <h3 class="font-secondary text-xl mb-2 text-center">Reily Reid</h3>
            <p class="text-xs text-neutral-500 text-center font-secondary">reilyreid@gmail.com</p>
        </div>
    </section>
    <section class="grid grid-rows-1 grid-cols-3 gap-2">
        <div class="col-span-2 rounded shadow border">
            {{ $chart->container() }}
            {{ $chart->script() }}
        </div>
        <div class="p-2 shadow border rounded min-h-[400px] flex flex-col">
            <form action="" method="get" class="flex justify-between mb-2">
                <input type="text" name="" id="" placeholder="Find User" class="text-black font-primary outline outline-1 outline-black xy-shadow-no-blur rounded h-[45px] w-4/6 px-3">
                <button type="submit" class="xy-shadow-no-blur rounded border border-black flex justify-center items-center px-2">
                    <ion-icon name="search" class="text-black"></ion-icon>
                </button>
            </form>
            <div class="rounded border shadow min-h-[300px] flex-grow">
            </div>
        </div>
    </section>
</x-admin_layout>