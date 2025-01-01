<x-layout>
    <x-slot:heading>
        About Us
    </x-slot:heading>
    <x-slot:otherImports>
    </x-slot:otherImports>
    <x-navbar.navbar></x-navbar.navbar>
    <section class="flex justify-center items-center flex-col gap-12 h-[400px] my-[40px]">
        <h1 class="font-primary text-8xl w-[976px] text-center">
            About Us
        </h1>
    </section>
    <section class="bg-black rounded w-full text-white p-4 flex justify-between mb-2">
        <div class="w-1/2 h-[400px]">
            <h1 class="text-6xl mb-10 font-primary">
                Select Your Dream House
            </h1>
            <p class="text-sm font-secondary mb-6">
                Discover a wide range of properties tailored to fit your lifestyle and budget. Whether you're looking for a cozy apartment, a spacious family home, or a luxurious getaway, we have options to match your preferences. With intuitive search tools and detailed property descriptions, finding your ideal rental has never been simpler. Start your journey today and turn your dream into reality!
            </p>
            <button class="flex items-center justify-center border-white border font-secondary px-4 rounded hover:bg-white hover:border-black transition transition-duration-500 hover:text-black">
                <p class="text-sm">
                    See Our Catalog
                </p>
                <img src=" {{asset('assets/svgs/arrow-right-white.svg')}} " alt="" class="w-[48px] h-[30px] hover:black trnasition transition-duration-500">
            </button>
        </div>
        <img src="{{ asset('assets/images/Frame 122.png') }}" alt="" class="rounded-lg object-cover w-1/2">
    </section>
    <section class="flex justify-center items-center flex-col bg-white p-2 rounded-lg xy-shadow-no-blur border border-black">
        <img src=" {{ asset('assets/images/enquire.jpg')}} " alt="" class="rounded-lg object-cover w-full h-[400px]">
        <div>
            <h1 class="font-primary text-6xl mb-10">Enquire</h1>
            <p class="font-secondary text-sm mb-6">
                Have questions about your desired rental? We’re here to help! Share your details and let us assist you in making the right choice. Whether it’s pricing, availability, or specific property features, our team is ready to provide all the information you need. Fill out the form below or contact us directly to start your journey toward your dream rental today!
            </p>
            <button class="flex justify-center items-center px-4 border rounded border-black">
                <p class="font-secondary">
                    Contact Us
                </p>
                <img src=" {{asset('assets/svgs/arrow-right.svg')}} " alt="" class="w-[48px] h-[30px] hover:black trnasition transition-duration-500">
            </button>
        </div>
    </section>
    <section class="flex gap-12 p-2 bg-black text-white mt-2 rounded">
        <img src=" {{ asset('assets/images/Frame 123.png')}} " alt="">
        <div>
            <h1 class="font-primary text-6xl mb-10">
                Buy
            </h1>
            <p class="font-secondary text-sm mb-6">
                Choose the most convenient way to make your purchase! Whether you prefer the ease of online transactions or the personalized experience of an in-person visit, we’ve got you covered. Explore our website for a seamless online buying process or visit us in person to see your options up close. Your satisfaction is our priority—shop the way that works best for you!
            </p>
        </div>
    </section>
    <section class="flex flex-col gap-4 mt-2 p-2 bg-white border border-black xy-shadow-no-blur mb-4 rounded">
        <div>
            <h1 class="font-primary text-6xl mb-10">
                Collect
            </h1>
            <p class="font-secondary text-sm mb-6">
                Experience a hassle-free collection process designed with your convenience in mind. Once your order is ready, choose the collection method that suits you best—pick it up in person or opt for a scheduled delivery. Our team ensures a smooth and efficient handover, whether you're visiting us directly or coordinating a collection point. Rest assured, your satisfaction is our priority from start to finish!
            </p>
        </div>
        <img src=" {{ asset('assets/images/Frame.png')}} " alt="" class="rounded object-cover h-[200px]">
    </section>
    <x-footer></x-footer>
</x-layout>