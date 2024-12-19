<x-layout>
    <x-slot:heading>
        Contact Us
    </x-slot:heading>
    <x-navbar.navbar></x-navbar.navbar>
    <section class="flex justify-center items-center flex-col gap-12 h-[530px] my-[40px]">
        <h1 class="font-primary text-8xl w-[976px] text-center">
            Contact Us
        </h1>
    </section>
    <section class="self-start w-full">
        <h1 class="text-4xl font-primary">
            Get In Touch
        </h1>
        <br>
        <br>
        <form action="" method="post" class="flex justify-between w-full">
            <div class="flex flex-col">
                <input type="text" name="name" id="name" required placeholder="Name..." class="xy-shadow h-[50px] w-[300px] rounded px-4">
                <br>
                <br>
                <input type="email" name="Email" id="Email" required placeholder="Email..." class="xy-shadow h-[50px] w-[300px] rounded px-4">
                <br>
                <br>
                <button class="border border-black font-secondary px-4 py-2 text-white shover:bg-white bg-black hover:text-black transition transition-duration-500">
                    Send
                </button>
            </div>
            <textarea name="message" id="" required class="xy-shadow h-[300px] w-[600px] rounded px-4 py-2" placeholder="Message Us ..."></textarea>
        </form>
    </section>
    <section class="w-full">
        <div class="flex gap-0">
            <button class="text-white bg-black focus:border-black font-secondary focus:bg-white focus:text-black px-4 py-2 border-white">
                Location 1
            </button>
            <button class="text-white bg-black focus:border-black font-secondary focus:bg-white focus:text-black px-4 py-2 border-white">
                Locaiton 2
            </button>
            <button class="text-white bg-black focus:border-black font-secondary focus:bg-white focus:text-black px-4 py-2 border-white">
                Location 3
            </button>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7979.604940787039!2d37.74201750855991!3d0.1615009781826614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17883bbfa480ddb7%3A0x8fdba91570622862!2sKianjai!5e0!3m2!1sen!2ske!4v1734604666421!5m2!1sen!2ske" class="h-[500px] w-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <x-footer></x-footer>
</x-layout>