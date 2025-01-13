<nav {{$attributes->merge(['class'=>"font-secondary flex justify-between items-center h-[80px] border-b border-black w-full"])}}>
    <h1>
        Company Name
    </h1>
    <ul class="inline-flex gap-8">
        <x-navbar.navlinks></x-navbar.navlinks>
    </ul>
    <div class="flex gap-8">
        <a href="{{ url('/login') }}" class="border border-black bg-black text-white hover:text-black hover:bg-transparent transition transition-all duration-500 text-sm px-5 py-2 rounded">
            Login
        </a>
        <a href="{{ url('/signup') }}" class="border border-black bg-transparent hover:text-white hover:bg-black transition transition-all duration-500 px-5 py-2 text-sm rounded">
            Signup
        </a>
    </div>
</nav>