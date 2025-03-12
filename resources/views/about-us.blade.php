<x-layout>
    <x-slot:heading>
        About Us
    </x-slot:heading>
    <x-slot:modalContent>
    </x-slot:modalContent>
    <x-navbar.navbar></x-navbar.navbar>

    <section class="flex justify-center items-center flex-col gap-12 h-[400px] my-[40px]">
        <h1 class="font-primary text-8xl w-[976px] text-center">About Us</h1>
    </section>

    <section class="bg-black rounded w-full text-white p-4 flex justify-between mb-2">
        <div class="w-1/2 h-[400px]">
            <h1 class="text-6xl mb-10 font-primary">Select Your Dream House</h1>
            <p class="text-sm font-secondary mb-6">
                Discover a wide range of properties tailored to fit your lifestyle and budget. Whether you're looking for a cozy apartment, a spacious family home, or a luxurious getaway, we have options to match your preferences.
            </p>
            <button class="flex items-center justify-center border-white border font-secondary px-4 rounded hover:bg-white hover:border-black transition duration-500 hover:text-black">
                <p class="text-sm">See Our Catalog</p>
                <img src="{{ asset('assets/svgs/arrow-right-white.svg') }}" alt="" class="w-[48px] h-[30px]">
            </button>
        </div>
        <img src="{{ asset('assets/images/Frame 122.png') }}" alt="" class="rounded-lg object-cover w-1/2">
    </section>

    <section class="bg-white text-black p-6 rounded-lg border border-black">
        <h1 class="text-6xl font-primary mb-6">Welcome to iRent</h1>
        <p class="text-sm font-secondary mb-4">
            At iRent, we simplify the way you find and rent homes. Whether you're looking for a cozy apartment, a spacious house, or a stylish condo, our platform offers a wide selection of rental properties to meet all your needs.
        </p>
        <h2 class="text-4xl font-primary mb-4">Our Mission</h2>
        <p class="text-sm font-secondary mb-6">
            Our mission at iRent is to provide a seamless, transparent, and stress-free rental experience for tenants and landlords alike. We are dedicated to offering a wide variety of rental options to cater to different tastes, budgets, and preferences.
        </p>
        <h2 class="text-4xl font-primary mb-4">What We Offer</h2>
        <ul class="list-disc ml-6 text-sm font-secondary mb-6">
            <li>Diverse Property Listings</li>
            <li>Detailed Property Information</li>
            <li>Search Flexibility with Advanced Filters</li>
            <li>User-Friendly Interface</li>
            <li>Secure Communication System</li>
        </ul>
        <h2 class="text-4xl font-primary mb-4">Why Choose iRent?</h2>
        <ul class="list-disc ml-6 text-sm font-secondary mb-6">
            <li>Wide Variety of Homes</li>
            <li>Trusted Platform with Verified Listings</li>
            <li>Dedicated Customer Support</li>
            <li>Efficient and Hassle-Free Rental Experience</li>
        </ul>
        <h2 class="text-4xl font-primary mb-4">How iRent Works</h2>
        <h3 class="text-2xl font-primary mb-2">For Tenants:</h3>
        <p class="text-sm font-secondary">Explore listings, contact landlords, and find your dream home.</p>
        <h3 class="text-2xl font-primary mt-4 mb-2">For Landlords:</h3>
        <p class="text-sm font-secondary">Create listings, manage inquiries, and connect with potential tenants.</p>
    </section>

    <section class="flex flex-col gap-4 mt-2 p-2 bg-white border border-black xy-shadow-no-blur mb-4 rounded">
        <h1 class="font-primary text-6xl mb-10">Contact Us</h1>
        <p class="text-sm font-secondary">
            If you have any questions or need assistance, don’t hesitate to contact us! You can reach our support team at <a href="mailto:irentprospace@gmail.com" class="text-blue-500">irentprospace@gmail.com</a> or call us at <span class="font-bold">0113405561 / 0745896953</span>.
        </p>
    </section>

    <x-footer></x-footer>
</x-layout>