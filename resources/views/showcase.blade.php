<x-layout>
    <x-slot:heading>
        ShowCase
    </x-slot:heading>
    <x-navbar.navbar></x-navbar.navbar>
    <br>
    <section class="w-full flex">
        <img src=" {{ asset('assets/images/image 2.jpeg')}} " alt="" class="object-cover w-1/2 pr-4">
        <section class="w-1/2">
            <p class="text-sm text-neutral-500 font-secondary mb-10">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, est vel distinctio hic illum sapiente magni itaque reprehenderit repudiandae quibusdam vitae debitis saepe consectetur deleniti eum exercitationem laborum, nemo blanditiis.
                Quod quam, fuga officiis labore ad esse, cum id aut, enim nam delectus harum iure distinctio vel? Cum sint accusantium in saepe eius dolorum quos minus, maiores ab voluptatibus assumenda.
                Reprehenderit accusantium possimus deleniti sequi at odio doloribus voluptatem quae optio, error ullam sapiente porro in mollitia. Omnis ducimus repudiandae suscipit, non nostrum odit, sunt adipisci fugit dolore nobis nulla!
            </p>
            <button class="flex items-center justify-between p-2 bg-black text-white w-full h-[50px] font-secondary mb-6">
                <p>
                    Specificaitions
                </p>
                <img src="{{ asset('assets/svgs/arrow-right-white.svg')}}" alt="" class="w-[48px] h-[36px]">
            </button>
            <button class="flex items-center justify-between p-2 border border-black w-full h-[50px] font-secondary mb-6">
                <p>
                    Running Costs
                </p>
                <img src="{{ asset('assets/svgs/arrow-right.svg')}}" alt="" class="w-[48px] h-[36px]">
            </button>
            <div class="flex justify-between mb-4">
                <button class="bg-black text-white flex gap-4 h-[50px] justify-center items-center px-6 font-secondary">
                    <ion-icon name="call-outline"></ion-icon>
                    <p>
                        Call Us
                    </p>
                </button>
                <button class="bg-green-500 text-white flex gap-4 h-[50px] justify-center items-center px-6 font-secondary">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                    <p>
                        Whatsapp
                    </p>
                </button>
                <button class="flex items-center justify-center px-6 gap-4 border border-black h-[50px] font-secondary">
                    <ion-icon name="share-social-outline" class="text-black"></ion-icon>
                    <p>
                        Share
                    </p>
                </button>
            </div>
        </section>
    </section>
    <br>
    <section class="flex gap-4 self-start">
        <img src=" {{ asset('assets/images/image 2.jpeg')}} " alt="" class="w-[200px] h-[200px] object-cover">
        <img src=" {{ asset('assets/images/image 4.png')}}" alt="" class="w-[200px] h-[200px] object-cover">
        <img src=" {{ asset('assets/images/image 3.jpeg')}} " alt="" class="w-[200px] h-[200px] object-cover">
        <img src=" {{ asset('assets/images/images 1.jpg ')}} " alt="" class="w-[200px] h-[200px] object-cover">
    </section>
    <br>
    <x-footer></x-footer>
</x-layout>