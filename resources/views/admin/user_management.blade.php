<x-admin.layout>
    <x-slot:heading>
        User Management
    </x-slot:heading>
    <section>
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
            <form method="GET" action="{{route('user-management')}}" class="flex justify-between mb-2">
                <input type="text" name="search" id="usr_filter" value="{{request('search')}}" placeholder="Find User" class="text-black font-primary outline outline-1 outline-black xy-shadow-no-blur rounded h-[45px] w-4/6 px-3">
                <button type="submit" class="xy-shadow-no-blur rounded border border-black flex justify-center items-center px-2">
                    <ion-icon name="search" class="text-black"></ion-icon>
                </button>
            </form>
            <div class="rounded border border-black max-h-[400px] flex-grow overflow-y-scroll flex flex-col gap-2 p-2">
                @foreach ($users as $user)
                <div class="flex justify-between rounded border xy-shadow-no-blur items-center px-2">
                    <ion-icon name="person-circle-outline"></ion-icon>
                    <div class="flex flex-col gap-2 justify-center items-center">
                        <h1 class="font-secondary text-lg">{{$user->username}}</h1>
                        <p class="font-primary text-xs text-neutral-500">{{$user->email}}</p>
                    </div>
                    <form action="{{ route('destroy.user', ['id' => $user->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-800 border border-red-800 text-white rounded transition transition-all duration-300 hover:bg-transparent hover:text-red-800 px-2 py-1 group"><ion-icon name="close-outline" class="text-white group-hover:text-red-800 text-md"></ion-icon></button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-admin.layout>