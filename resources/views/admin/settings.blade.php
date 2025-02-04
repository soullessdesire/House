<x-admin.layout>
    <x-slot:heading>
        Settings
    </x-slot:heading>
    <section>
        <h1 class="text-6xl font-primary mb-6 w-[950px]">
            Settings
        </h1>
    </section>
    <section>
        <h2 class="font-primary text-3xl mb-6">
            Email
        </h2>
        <div class="flex justify-between gap-4">
            <input type="text" readonly value="admin.info@gmail.com" class="h-[50px] px-4 flex-grow xy-shadow-no-blur outline outline-1 outline-black rounded font-primary">
            <button class="button-86">
                Update Email
            </button>
        </div>
    </section>
</x-admin.layout>