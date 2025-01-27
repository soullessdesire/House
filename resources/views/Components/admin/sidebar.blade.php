    <div id="sidebar" class="w-[300px] h-screen border-r p-2">
        @php
        $sidebarlinks = [
        ['Dashboard', '/admin'],
        ['User Management', '/admin/user-management'],
        ['Property Management', '/admin/property-management'],
        ['Settings', '/admin/settings'],
        ['User Register Request', '/admin/user-register-request'],
        ]
        @endphp
        <ul class="flex flex-col flex-no-wrap justify-center items-center gap-4">
            <li class="px-4 border text-black py-3 rounded w-[250px] flex gap-4">
                <div class="w-12 h-12 rounded-full bg-black text-white font-secondary text-xl flex justify-center items-center">Ad</div>
                <div>
                    <h1 class="text-2xl font-secondary">
                        Admin
                    </h1>
                    <p class="text-xs font-primary text-neutral-500">
                        admin@gmail.com
                    </p>
                </div>
            </li>
            @foreach ($sidebarlinks as [ $sidebarlink , $url ])
            <li class="px-4 border text-black py-3 rounded w-[250px]">
                <x-navbar.navlink href="{{ $url }}"> {{ $sidebarlink }} </x-navbar.navlink>
            </li>
            @endforeach
        </ul>
    </div>