<x-admin_layout>
    <x-slot:heading>
        Property Management
    </x-slot:heading>
    <section>
        <h1 class="text-6xl font-primary mb-6 w-[950px]">
            Property Management
        </h1>
    </section>
    <section class="grid grid-cols-4 grid-rows-1 gap-2 mb-4">
        <div class="p-2 border shadow rounded">
            <h1 class="text-3xl font-primary mb-4">
                <span class="text-xs">#</span><span class="font-numbers text-5xl">1</span> Booking User
            </h1>
            <img src="" alt="" class="w-full h-[150px] rounded-full object-center object-cover mb-4">
            <h3 class="font-secondary text-xl text-center mb-4">Francis Ndungu</h3>
            <p class="text-xs text-neutral-500 text-center font-secondary">francis@gmail.com</p>
        </div>
        <div class="p-2 border shadow rounded">
            <h1 class="text-3xl font-primary mb-4">
                <span class="text-xs">#</span><span class="font-numbers text-5xl">1</span> Paying User
            </h1>
            <img src="" alt="" class="w-full h-[150px] rounded-full object-center object-cover mb-4">
            <h3 class="font-secondary text-xl text-center mb-4">Miriam Githingi</h3>
            <p class="text-xs text-neutral-500 text-center font-secondary">miriamgithingi@gmail.com</p>
        </div>
        <div class="rounded shadow border p-2 col-span-2 flex flex-col">
            <form action="" method=" get" class="flex justify-between mb-2">
                <input type="text" name="" id="" placeholder="Find Property" class="text-black font-primary outline outline-1 outline-black xy-shadow-no-blur rounded h-[45px] w-4/6 px-3">
                <button type="submit" class="xy-shadow-no-blur rounded border border-black flex justify-center items-center px-2">
                    <ion-icon name="search" class="text-black"></ion-icon>
                </button>
            </form>
            <div class="rounded border shadow  min-h-[200px] flex-grow">

            </div>
        </div>
    </section>
    <section class="grid grid-rows-1 grid-cols-1 shadow border rounded min-h-[500px]">
        <!-- Graph -->
    </section>
    </x-admin.admin_layout>