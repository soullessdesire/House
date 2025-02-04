<nav {{$attributes->merge(['class'=>"font-secondary flex justify-between items-center h-[80px] border-b border-black w-full"])}}>
    <a href="{{url('/')}}">
        <h1 class="font-primary">
            Company Name
        </h1>
    </a>
    <ul class="inline-flex gap-8">
        <x-navbar.navlinks></x-navbar.navlinks>
    </ul>
    @auth
    <div class="flex gap-8">
        <a href="{{ url('/property/create/meta') }}" class="border border-black bg-black text-white hover:text-black hover:bg-transparent transition transition-all duration-500 text-sm px-5 py-2 rounded">
            Post A Rental
        </a>
    </div>
    @else
    <div class="flex gap-8">
        <a href="{{ url('/login') }}" class="border border-black bg-black text-white hover:text-black hover:bg-transparent transition transition-all duration-500 text-sm px-5 py-2 rounded">
            Login
        </a>
        <a href="{{ url('/signup') }}" class="border border-black bg-transparent hover:text-white hover:bg-black transition transition-all duration-500 px-5 py-2 text-sm rounded">
            Signup
        </a>
    </div>
    @endauth
</nav>