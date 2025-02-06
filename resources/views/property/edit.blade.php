<x-layout>
    <x-utilities.modal id="create-image">
        <div class="p-2 m-2 w-fit h-fit bg-white rounded shadow border">
            <form action="{{route('property.image.create', ['property' => $property->id])}}" method="post">
                @csrf
                <x-form.image></x-form.image>
                <div class="flex gap-4 ml-2">
                    <button id="submit-image" type="submit" class="bg-green-500 text-white font-secondary px-6 py-2 flex justify-center items-center hover:bg-opacity-0 transition duration-500 border border-green-500 hover:text-green-500 rounded h-fit">Submit</button>
                    <button id="close-image" type="button" class="bg-red-600 text-white font-secondary px-6 py-2 flex justify-center items-center hover:bg-opacity-0 transition duration-500 border border-red-600 hover:text-red-600 rounded w-fit">Close</button>
                </div>
            </form>
        </div>
    </x-utilities.modal>
    <x-slot:heading>
        Edit
    </x-slot:heading>
    <x-utilities.modal id="create-video">
        <div class="p-2 m-2 w-fit h-fit bg-white rounded shadow border">
            <form action="{{route('property.video.create', ['property' => $property->id])}}" method="post">
                @csrf
                <x-form.video></x-form.video>
                <div class="flex gap-4 ml-2">
                    <button id="submit-video" type="submit" class="bg-green-500 text-white font-secondary px-6 py-2 flex justify-center items-center hover:bg-opacity-0 transition duration-500 border border-green-500 hover:text-green-500 rounded h-fit">Submit</button>
                    <button id="close-video" type="button" class="bg-red-600 text-white font-secondary px-6 py-2 flex justify-center items-center hover:bg-opacity-0 transition duration-500 border border-red-600 hover:text-red-600 rounded w-fit">Close</button>
                </div>
            </form>
        </div>
    </x-utilities.modal>
    <x-navbar.navbar class="mb-2"></x-navbar.navbar>
    <div class="flex justify-between mb-6 w-full">
        <h2 class="text-6xl font-primary text-left mr-auto">
            Edit
        </h2>
        <div class="flex gap-8">
            <button id="submit" type="submit" form="update-form" class="bg-black text-white font-secondary px-6 py-2 flex justify-center items-center hover:bg-opacity-0 transition duration-500 border border-black hover:text-black rounded h-fit">Update</button>
            <form action="{{route('property.destroy', ['property' => $property->id])}}">
                @csrf
                @method('DELETE')
                <button id="submit" type="submit" class="bg-red-600 text-white font-secondary px-6 py-2 flex justify-center items-center hover:bg-opacity-0 transition duration-500 border border-red-600 hover:text-red-600 rounded w-fit">Delete</button>
            </form>
        </div>
    </div>
    <h2 class="text-2xl font-primary text-left mr-auto mb-2">
        Meta
    </h2>
    <form action="{{route('property.update', ['property' => $property->id])}}" id="update-form">
        @csrf
        <x-form.input type="text" name="title" id="title" placeholder="Title" value="{{$property->title}}"></x-form.input>
        <textarea placeholder="Description" name="description" class="outline outline-black outline-1 xy-shadow-no-blur text-black bg-white w-5/6 h-[150px] font-primary rounded p-2 mb-2"> {{$property->description}}</textarea>
        <x-form.input type="number" name="price" id="price" placeholder="Price" value="{{$property->price}}"></x-form.input>
        <select class="outline outline-1 outline-black p-2 h-[50px] w-[150px] rounded" name="bedrooms" id="bedrooms" class="form-control">
            @foreach([
            '0' => 'Bedsitter',
            '0.5' => 'Single Room',
            '1' => 'One Bedroom',
            '2' => 'Two Bedroom',
            '3' => 'Three Bedroom',
            '4' => 'Four Bedroom'
            ] as $value => $label)
            <option value="{{ $value }}" {{ $property->bedrooms == $value ? 'selected' : '' }}>
                {{ $label }}
            </option>
            @endforeach
        </select>
        <x-form.location :property="$property"></x-form.location>
    </form>
    <div id='imagedisplay' class="w-full h-[400px] rounded bg-black px-4 py-2 mb-3 ">
        <h2 class="text-4xl font-primary text-left mb-2 text-white">
            Image(s)
        </h2>
        <div class="flex h-5/6 items-center">
            <x-form.view-image :property="$property"></x-form.view-image>
            <button id="image-btn" class="w-[250px] h-[250px] flex justify-center items-center border border-2 border-green-500 rounded ml-4 transition-all duration-500 group">
                <ion-icon name="add-circle-outline" class="text-white rounded bg-green-500 p-2 group-hover:bg-opacity-0 group-hover:text-green-500 transition-all duration-500"></ion-icon>
            </button>
        </div>
    </div>
    <div id="videodisplay" class="w-full h-[400px] rounded bg-white px-4 py-2 shadow border">
        <h2 class="text-4xl font-primary text-left mb-2 text-black">
            Video(s)
        </h2>
        <div class="flex h-5/6 items-center">
            <x-form.view-video :property="$property"></x-form.view-video>
            <button id="video-btn" class="w-[250px] h-[250px] flex justify-center items-center border border-2 border-green-500 rounded ml-4 transition-all duration-500 group">
                <ion-icon name="add-circle-outline" class="text-white rounded bg-green-500 p-2 group-hover:bg-opacity-0 group-hover:text-green-500 transition-all duration-500"></ion-icon>
            </button>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const openVidBtn = document.getElementById('video-btn');
                const closeVidBtn = document.getElementById('close-video');
                const videoDisplay = document.getElementById('create-video');
                const openImgBtn = document.getElementById('image-btn');
                const closeImgBtn = document.getElementById('close-image');
                const imageDisplay = document.getElementById('create-image');

                openVidBtn.addEventListener('click', (e) => {
                    videoDisplay.style.display = 'flex';
                })

                closeVidBtn.addEventListener('click', (e) => {
                    videoDisplay.style.display = 'none';
                })

                openImgBtn.addEventListener('click', (e) => {
                    imageDisplay.style.display = 'flex';
                })

                closeImgBtn.addEventListener('click', (e) => {
                    imageDisplay.style.display = 'none';
                })
            })
        </script>
</x-layout>