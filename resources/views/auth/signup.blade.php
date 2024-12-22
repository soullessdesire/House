<x-layout>
    <x-slot:heading>
        Signup
    </x-slot:heading>
    <section class="w-full h-screen flex justify-center items-center">
        <div class="w-[600px] h-[600px] border shadow rounded p-4 bg-white">
            <h1 class="font-primary text-4xl mb-10">
                Signup
            </h1>
            <form action="" method="post" class="mb-10">
                <div class="flex gap-20">
                    <input type="text" name="firstname" id="firstname" placeholder="Firstname" class="font-primary placeholder-black w-[225px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4">
                    <input type="text" name="lastname" id="lastname" placeholder="Lastname" class="font-primary placeholder-black w-[225px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4">
                </div>
                <input type="text" name="username" id="username" placeholder="UserName" class="font-primary placeholder-black w-[536px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4">
                <input type="email" name="email" id="email" placeholder="Email" class="font-primary placeholder-black w-[536px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4">
                <input type="password" name="password" id="Location" placeholder="Password" class="font-primary placeholder-black w-[536px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4">
                <button type="submit" class="button-86">Submit</button>
            </form>
            <p class="font-secondary mb-6">Have an account <a href="{{url('/login')}}" class="text-blue-500">Login</a></p>
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