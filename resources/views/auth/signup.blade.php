<x-layout>
    <x-slot:heading>
        Signup
    </x-slot:heading>
    <nav class="font-secondary flex justify-between items-center h-[80px] border-b border-black w-full">
        <h1>
            Company Name
        </h1>
    </nav>
    <section class="w-full flex h-screen justify-center items-center p-4">
        <div class="w-[600px] h-fit border shadow rounded p-4 bg-white">
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
                            placeholder="First Name"
                            class="font-primary placeholder-neutral-500 w-[240px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4"
                            aria-label="Firstname">
                    </div>
                    @error('firstname')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                    <div>
                        <input
                            type="text"
                            name="last_name"
                            id="lastname"
                            placeholder="Last Name"
                            class="font-primary placeholder-neutral-500 w-[240px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4"
                            aria-label="Lastname">
                    </div>
                    @error('lastname')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <input
                        type="text"
                        name="username"
                        id="username"
                        placeholder="Username"
                        class="font-primary placeholder-neutral-500 w-[536px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4"
                        aria-label="Username">
                </div>
                @error('username')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                <div>
                    <input
                        type="text"
                        name="phone_number"
                        id="phonenumber"
                        placeholder="Phone Number"
                        class="font-primary placeholder-neutral-500 w-[536px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4"
                        aria-label="Phone_number">
                </div>
                @error('phone_number')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                <div>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Email"
                        class="font-primary placeholder-neutral-500 w-[536px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4"
                        aria-label="Email">
                </div>
                @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                <div>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Password"
                        class="font-primary placeholder-neutral-500 w-[536px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4"
                        aria-label="Password">
                </div>
                @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                <div class="flex gap-2">
                    <input type="checkbox" name="terms" id="terms" class="w-4 h-4" />
                    <span class="text-neutral-500 italic text-xs">By registering you will be agreeing to our <a href="{{ route('Terms.Conditions') }}" target="_blank" rel="noopener noreferrer" class="text-blue-500">Terms and Conditions</a></span>

                </div>
                @error('terms')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                <br>
                <button type="submit" class="button-86">Submit</button>
            </form>
            <p class="font-secondary mb-6">
                Have an account? <a href="{{ url('/login') }}" class="text-blue-500">Login</a>
            </p>
            <!-- <div class="flex justify-between">
                <a href="{{route('social.redirect', ['provider' => 'google'])}}" target="_blank" rel="noopener noreferrer" class="flex justify-center items-center gap-10 button-86">
                    <ion-icon name="logo-google" class="text-white"></ion-icon>
                    <p>
                        Google
                    </p>
                </a>
                <a href="{{route('social.redirect', ['provider' => 'facebook'])}}" target="_blank" rel="noopener noreferrer" class="flex justify-center items-center gap-10 button-86 ">
                    <ion-icon name="logo-facebook" class="text-white"></ion-icon>
                    <p>
                        Facebook
                    </p>
                </a>
            </div> -->
        </div>
    </section>
</x-layout>