<x-layout>
    <x-slot:heading>
        ShowCase
    </x-slot:heading>
    <x-navbar.navbar></x-navbar.navbar>
    <br>
    <section class="w-full flex">
        <div class="relative mr-4 w-1/2 md:h-[400px] lg:h-[500px]">
            <button type="button" class="absolute top-1/2 left-0 -transform-y-1/2">
                <ion-icon name="chevron-back-outline" class="text-white text-2xl"></ion-icon>
            </button>
            <button type="button" class="absolute top-1/2 left-1/2 -transform-y-1/2 -transform-x-1/2" id="play-button">
                <ion-icon name="play" class="text-white text-2xl"></ion-icon>
            </button>
            <img id="bigImage" src=" {{ asset('assets/images/image 2.jpeg')}} " alt="" class="object-cover rounded w-full h-full transition-all duration-300">
            <button type="button" class="absolute top-1/2 right-0 -transform-y-1/2">
                <ion-icon name="chevron-forward-outline" class="text-white text-2xl"></ion-icon>
            </button>
        </div>
        <section class="grow">
            <h1 class="text-2xl text-black font-primary mb-6">
                {{$property->title}}
            </h1>
            <p class="text-sm text-neutral-500 font-secondary mb-10">
                {{ $property->description }}
            </p>
            <button id="toggleSidebar" class="flex items-center justify-between p-2 bg-black text-white w-full h-[50px] font-secondary mb-6 rounded hover:text-black border border-black hover:bg-transparent transition transition-all duration-500 group">
                <p>
                    Specificaitions
                </p>
                <ion-icon name="arrow-forward-outline" class="group-hover:text-black text-white transition transition-all duration-500"></ion-icon>
            </button>
            <div class="flex gap-8 mb-4 w-full">
                <button class="bg-black text-white flex gap-4 py-3 justify-center items-center px-6 font-secondary rounded transition transition-all hover:rounded-xl duration-150">
                    <ion-icon name="call-outline"></ion-icon>
                    <p>
                        Call Us
                    </p>
                </button>
                <button class="bg-green-700 text-white flex gap-4 py-3 justify-center items-center px-6 font-secondary rounded transition transition-all hover:text-green-700 hover:bg-transparent duration-500 border border-green-700">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                    <p>
                        Whatsapp
                    </p>
                </button>

                @can('update', $property)
                <a href="{{url('/property/edit/'.$property->id)}}" class="bg-black text-white flex gap-4 py-3 justify-center items-center px-6 font-secondary rounded transition transition-all hover:rounded-xl duration-150">
                    <ion-icon name="create-outline"></ion-icon>
                    <p>
                        Edit
                    </p>
                </a>
                @endcan
            </div>
        </section>
    </section>
    <br>
    <section id="gallery" class="flex gap-4 self-start">
        <img src=" {{ asset('assets/images/image 2.jpeg')}} " alt="" class="w-[200px] h-[200px] object-cover rounded">
        <img src=" {{ asset('assets/images/image 4.png')}}" alt="" class="w-[200px] h-[200px] object-cover rounded">
        <img src=" {{ asset('assets/images/image 3.jpeg')}} " alt="" class="w-[200px] h-[200px] object-cover rounded">
        <img src=" {{ asset('assets/images/images 1.jpg ')}} " alt="" class="w-[200px] h-[200px] object-cover rounded">
    </section>
    <br>
    <section id="propertyDetails" class="fixed translate-x-full  h-screen w-1/3 bg-white shadow-lg border-l border-gray-300 top-0 right-0 p-6 transition transition-all duration-300 z-20">
        <h2 class="text-2xl font-primary mb-4 border-b pb-2">Property Details</h2>
        <table class="w-full border-collapse font-secondary">
            <thead class="bg-gray-100 text-left">
                <tr>
                    <th class="border-b font-regular font-primary border-gray-300 py-2 px-4">Specification</th>
                    <th class="border-b font-regular font-primary border-gray-300 py-2 px-4">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border-b border-gray-200 py-2 px-4">Price</td>
                    <td class="border-b border-gray-200 py-2 px-4">{{$property->price}}</td>
                </tr>
                <tr>
                    <td class="border-b border-gray-200 py-2 px-4">Bedrooms</td>
                    <td class="border-b border-gray-200 py-2 px-4">{{$property->bedrooms}}</td>
                </tr>
                @foreach ([
                'county',
                'subcounty',
                'constituency',
                'ward',
                'location',
                'sublocation',
                'village',
                ] as $location)
                <tr>
                    <td class="border-b border-gray-200 py-2 px-4 capitalize">{{$location}}</td>
                    <td class="border-b border-gray-200 py-2 px-4">{{$property->location[$location]}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sidebar = document.getElementById('propertyDetails');
            const toggleButton = document.getElementById('toggleSidebar');
            const overlay = document.getElementById('overlay');
            const bigImage = document.getElementById('bigImage');
            const gallery = document.getElementById('gallery');
            const playButton = document.getElementById('play-button');

            const toggleSidebar = () => {
                sidebar.classList.toggle('translate-x-full');
                overlay.classList.toggle('hidden');
                window.scrollTo(0, 0)
                document.body.classList.toggle('overflow-hidden');
            };

            const closeSidebarOnClickOutside = (event) => {
                if (!sidebar.contains(event.target) && !toggleButton.contains(event.target)) {
                    sidebar.classList.add('translate-x-full');
                    overlay.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden', !isHidden);
                }
            };
            const changeImage = (event) => {
                bigImage.style.opacity = 0
                setTimeout(() => {
                    bigImage.src = event.target.src;
                    bigImage.style.opacity = 100
                }, 200);
            }

            const play = () => {
                playButton.style.opacity = 0

                function toggleIcon() {
                    const playIcon = '<ion-icon name="play" class="text-white text-2xl"></ion-icon>'
                    const pauseIcon = '<ion-icon name="pause" class="text-white text-2xl"></ion-icon>'
                    if (playButton.innerHTML == playIcon) playButton.innerHTML = pauseIcon
                    else playButton.innerHTML = playIcon
                }
                setTimeout(() => {
                    toggleIcon()
                    playButton.style.opacity = 100
                })
            }

            gallery.addEventListener('click', changeImage);
            toggleButton.addEventListener('click', toggleSidebar);
            document.addEventListener('click', closeSidebarOnClickOutside);


        });
    </script>
    <x-footer></x-footer>
</x-layout>