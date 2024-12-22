<x-layout>
    <x-slot:heading>
        Post a Rental
    </x-slot:heading>
    <x-slot:otherImports>
        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    </x-slot:otherImports>
    <section class="w-full h-[1300px] flex justify-center items-center">
        <div class="w-[600px] border border-black xy-shadow-no-blur rounded p-4 bg-white">
            <h1 class="font-primary text-4xl mb-10">
                Post a Rental
            </h1>

            <!-- Metadata Form -->
            <form action="/submit-metadata" method="post" id="metadataForm" class="mb-6">
                @csrf
                <input type="number" name="price" id="price" placeholder="Price" class="font-primary placeholder-black w-[536px] h-[50px] outline outline-black outline-1 rounded mb-4 px-4">
                <input type="number" name="bedrooms" id="bedrooms" placeholder="Bedrooms" class="font-primary placeholder-black w-[536px] h-[50px] outline outline-black outline-1 rounded mb-4 px-4">
                <div>
                    <h1 class="font-primary text-2xl mb-4">
                        Location
                    </h1>
                    <div>
                        <input type="text" name="county" id="county" placeholder="County" class="font-primary placeholder-black w-[536px] h-[50px] outline outline-black outline-1 rounded mb-4 px-4">
                        <input type="text" name="subcounty" id="subcounty" placeholder="Subcounty" class="font-primary placeholder-black w-[536px] h-[50px] outline outline-black outline-1 rounded mb-4 px-4">
                        <input type="text" name="constituency" id="constituency" placeholder="Constituency" class="font-primary placeholder-black w-[536px] h-[50px] outline outline-black outline-1 rounded mb-4 px-4">
                        <input type="text" name="ward" id="ward" placeholder="Ward" class="font-primary placeholder-black w-[536px] h-[50px] outline outline-black outline-1 rounded mb-4 px-4">
                        <input type="text" name="location" id="location" placeholder="Location" class="font-primary placeholder-black w-[536px] h-[50px] outline outline-black outline-1 rounded mb-4 px-4">
                        <input type="text" name="sublocation" id="sublocation" placeholder="Sublocation" class="font-primary placeholder-black w-[536px] h-[50px] outline outline-black outline-1 rounded mb-4 px-4">
                        <input type="text" name="village" id="village" placeholder="Village" class="font-primary placeholder-black w-[536px] h-[50px] outline outline-black outline-1 rounded mb-4 px-4">

                    </div>
                </div>
            </form>

            <!-- Image Upload Form -->
            <form id="imageForm" action="/upload-images" method="POST" class="dropzone mb-6 rounded">
                @csrf
                <h2 class="font-primary text-2xl mb-4">Upload Images</h2>
            </form>

            <!-- Video Upload Form -->
            <form id="videoForm" action="/upload-videos" method="POST" class="dropzone mb-6 rounded">
                @csrf
                <h2 class="font-primary text-2xl mt-6 mb-4">Upload Videos</h2>
            </form>

            <!-- Submit Button -->
            <button id="submitAll" type="button" class="button-86 mt-6">Submit All</button>
        </div>
    </section>

    <script type="text/javascript">
        document.getElementById('submitAll').addEventListener('click', function() {
            const imageForm = document.getElementById('imageForm');
            const videoForm = document.getElementById('videoForm');
            const metadataForm = document.getElementById('metadataForm');

            const imageFormData = new FormData(imageForm);

            // Submit images first
            fetch(imageForm.action, {
                    method: 'POST',
                    body: imageFormData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                })
                .then(response => response.json())
                .then(imageData => {
                    console.log('Images uploaded successfully:', imageData);

                    const videoFormData = new FormData(videoForm);

                    // Submit videos next
                    return fetch(videoForm.action, {
                        method: 'POST',
                        body: videoFormData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        },
                    }).then(response => response.json());
                })
                .then(videoData => {
                    console.log('Videos uploaded successfully:', videoData);

                    const metadataFormData = new FormData(metadataForm);

                    // Combine image and video IDs into metadata
                    if (videoData.video_ids) {
                        videoData.video_ids.forEach(id => metadataFormData.append('video_ids[]', id));
                    }
                    if (imageData.image_ids) {
                        imageData.image_ids.forEach(id => metadataFormData.append('image_ids[]', id));
                    }

                    // Submit metadata last
                    return fetch(metadataForm.action, {
                        method: 'POST',
                        body: metadataFormData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        },
                    });
                })
                .then(response => response.json())
                .then(metadataResponse => {
                    console.log('Metadata submitted successfully:', metadataResponse);
                })
                .catch(error => {
                    console.error('Error during submission:', error);
                });
        });

        // Initialize Dropzone for Images
        Dropzone.options.imageForm = {
            paramName: 'images', // Name for image files
            maxFilesize: 20, // MB
            acceptedFiles: ".jpeg,.jpg,.png",
            addRemoveLinks: true,
        };

        // Initialize Dropzone for Videos
        Dropzone.options.videoForm = {
            paramName: 'videos', // Name for video files
            maxFilesize: 50, // MB
            acceptedFiles: ".mp4,.mov,.avi",
            addRemoveLinks: true,
        };
    </script>
</x-layout>