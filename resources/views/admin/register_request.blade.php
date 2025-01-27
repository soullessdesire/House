<x-admin.layout>
    <x-slot:heading>
        User Register Requests
    </x-slot:heading>
    <section>
        <h1 class="text-6xl font-primary mb-6 w-[950px]">
            User Register Requests
        </h1>
    </section>
    <section class="w-full">
        @foreach ($requests as $request)
        <div class="rounded border shadow mb-4 items-center pl-4 m-2 p-2 grid grid-cols-4 grid-rows-1 w-full gap-4">
            <span class="font-numbers text-2xl">
                {{$request->id}}
            </span>
            <h1 class="font-primary text-2xl grow text-center">
                {{$request->first_name}}
                {{$request->last_name}}
            </h1>
            <div class="font-secondary text-sm">
                <p>
                    {{$request->username}}
                </p>
                <p>
                    {{$request->email}}
                </p>
            </div>
            <div class="flex gap-4 justify-end">
                <form action="{{route('accept-register-request',['registerrequest' => $request->id])}}" method="post">
                    @csrf
                    <button type="submit" class="bg-green-800 border border-green-800 text-white rounded transition transition-all duration-300 hover:bg-transparent hover:text-green-800 px-3 py-2 group"><ion-icon name="checkmark-outline" class="text-white group-hover:text-green-800"></ion-icon></button>
                </form>
                <form action="{{ route('deny-register-request', ['registerrequest' => $request->id])}}" method="post">
                    @csrf
                    <button type="submit" class="bg-red-800 border border-red-800 text-white rounded transition transition-all duration-300 hover:bg-transparent hover:text-red-800 px-3 py-2 group"><ion-icon name="close-outline" class="text-white group-hover:text-red-800"></ion-icon></button>
                </form>
            </div>
        </div>
        @endforeach
    </section>
</x-admin.layout>