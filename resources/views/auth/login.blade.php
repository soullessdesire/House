<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>
    <x-slot:otherImports></x-slot:otherImports>
    <section class="w-full h-screen flex justify-center items-center">
        <div class="w-[600px] h-fit border shadow rounded p-4 bg-white">
            <h1 class="font-primary text-4xl mb-10">
                Login
            </h1>
            <form action="{{route('session.user')}}" method="post" class="mb-10">
                @csrf
                <input type="text" name="username_email" id="username_email" placeholder="Username or Email" class="font-primary placeholder-black w-[536px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4">
                <input type="password" name="password" id="Location" placeholder="Password" class="font-primary placeholder-black w-[536px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4">
                <button type="submit" class="button-86">Submit</button>
            </form>
            <p class="font-secondary mb-6">Don&comma;t have an account <a href="{{url('/signup')}}" class="text-blue-500">Sign Up</a></p>
            <div class="flex justify-between">
                <a href="http://" target="_blank" rel="noopener noreferrer" class="button-86">
                    <ion-icon name="logo-google" class="text-white"></ion-icon>
                    <p>
                        Google
                    </p>
                </a>
                <a href="http://" target="_blank" rel="noopener noreferrer" class="button-86 ">
                    <ion-icon name="logo-facebook" class="text-white"></ion-icon>
                    <p>
                        Facebook
                    </p>
                </a>
            </div>
        </div>
    </section>
</x-layout>