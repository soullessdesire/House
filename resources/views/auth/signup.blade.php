<x-layout>
    <x-slot:heading>
        Signup
    </x-slot:heading>
    <x-slot:otherImports></x-slot:otherImports>
    <section class="w-full h-screen flex justify-center items-center">
        <div class="w-[600px] h-[600px] border shadow rounded p-4 bg-white">
            <h1 class="font-primary text-4xl mb-10">
                Signup
            </h1>
            <form action="{{ route('register.user') }}" method="post" class="mb-10">
                @csrf
                <div class="flex gap-14">
                    <div>
                        <input
                            type="text"
                            name="first_name"
                            id="firstname"
                            placeholder="Firstname"
                            class="font-primary placeholder-neutral-500 w-[225px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4"
                            aria-label="Firstname">
                        @error('firstname')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <input
                            type="text"
                            name="last_name"
                            id="lastname"
                            placeholder="Lastname"
                            class="font-primary placeholder-neutral-500 w-[225px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4"
                            aria-label="Lastname">
                        @error('lastname')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    <input
                        type="text"
                        name="username"
                        id="username"
                        placeholder="Username"
                        class="font-primary placeholder-neutral-500 w-[536px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4"
                        aria-label="Username">
                    @error('username')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <input
                        type="text"
                        name="phone_number"
                        id="phonenumber"
                        placeholder="Phone_number"
                        class="font-primary placeholder-neutral-500 w-[536px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4"
                        aria-label="Phone_number">
                    @error('phone_number')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Email"
                        class="font-primary placeholder-neutral-500 w-[536px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4"
                        aria-label="Email">
                    @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Password"
                        class="font-primary placeholder-neutral-500 w-[536px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4"
                        aria-label="Password">
                    @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="button-86">Submit</button>
            </form>
            <p class="font-secondary mb-6">
                Have an account? <a href="{{ url('/login') }}" class="text-blue-500">Login</a>
            </p>
            <div class="flex justify-between">
                <a href="http://" target="_blank" rel="noopener noreferrer" class="flex justify-center items-center gap-10 button-86">
                    <ion-icon name="logo-google" class="text-white"></ion-icon>
                    <p>
                        Google
                    </p>
                </a>
                <a href="http://" target="_blank" rel="noopener noreferrer" class="flex justify-center items-center gap-10 button-86 ">
                    <ion-icon name="logo-facebook" class="text-white"></ion-icon>
                    <p>
                        Facebook
                    </p>
                </a>
            </div>
        </div>
    </section>
</x-layout>