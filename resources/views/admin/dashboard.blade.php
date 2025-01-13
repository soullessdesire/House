<x-admin.layout>
    <x-slot:heading>
        DashBoard
    </x-slot:heading>
    <section class="mb-8">
        <h1 class="text-6xl font-primary w-[950px]">
            DashBoard
        </h1>
    </section>
    <section class="flex gap-2">
        <section class="grid grid-cols-3 grid-rows-2 w-full gap-6">
            <div class="border text-black font-primary rounded p-2 shadow">
                <h1 class="text-xl">
                    New Users
                </h1>
                <p class="font-numbers text-5xl">100,230</p>
            </div>
            <div class="border text-black font-primary rounded p-2 shadow">
                <h1 class="text-xl">
                    Properties Posted
                </h1>
                <p class="font-numbers text-5xl">100</p>
            </div>
            <div class="border text-black font-primary rounded p-2 shadow">
                <h1 class="text-xl">
                    Payments This Month
                </h1>
                <p class="font-numbers text-5xl">450</p>
            </div>
            <div class="border text-black font-primary rounded p-2 shadow">
                <h1 class="text-xl">
                    Bookings This Month
                </h1>
                <p class="font-numbers text-5xl">650</p>
            </div>
            <div class="border text-black font-primary rounded p-2 shadow">
                <h1 class="text-xl">
                    Bookings Revenue
                </h1>
                <p class="font-numbers text-5xl">650,000</p>
            </div>
            <div class="border text-black font-primary rounded p-2 shadow">
                <h1 class="text-xl">
                    User Earnings
                </h1>
                <p class="font-numbers text-5xl">200,000</p>
            </div>
            </div>
        </section>
        <!-- <section class="p-2 border rounded shadow">
            <div class="flex justify-between items-center mb-4">
                <h1 class="font-primary text-2xl">
                    Recent Notifications
                </h1>
            </div>
            <div class="h-[50px] flex mb-4 items-center gap-2">
                <div class="h-full rounded bg-red-500 w-2"></div>
                <div>
                    <h1 class="text-lg text-black">
                        This is a new message
                    </h1>
                    <p class="text-xs text-neutral-500 text-no-wrap overflow-hidden">
                        This is the message content of the message that has been sent to you. Please read it so that you can understant its contents
                    </p>
                </div>
            </div>
            <div class="h-[50px] flex mb-4 items-center gap-2">
                <div class="h-full rounded bg-neutral-500 w-2"></div>
                <div>
                    <h1 class="text-lg text-black">
                        This is a old message
                    </h1>
                    <p class="text-xs text-neutral-500 text-no-wrap overflow-hidden">
                        This is the message content of the message that has been sent to you. Please read it so that you can understant its contents
                    </p>
                </div>
            </div>
        </section> -->
    </section>
    <section class="w-full border shadow rounded mt-4 grid grid-cols-1 grid-rows-1 h-[500px]">
        {!! $chart->container() !!}
    </section>
    {{ $chart->script() }}
</x-admin.layout>