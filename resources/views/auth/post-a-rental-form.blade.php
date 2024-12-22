<x-layout>
    <x-slot:heading>
        Post a Rental
    </x-slot:heading>
    <x-slot:otherImports>
        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    </x-slot:otherImports>
    <section class="w-full flex justify-center items-center h-[1300px]">
        <div class="w-[600px] h-fit border shadow rounded p-4 bg-white">
            <h1 class="font-primary text-4xl mb-10">
                Post a Rental
            </h1>

            <!-- Metadata Form -->
            <form action="/submit-metadata" method="post" id="metadataForm">
                @csrf
                <input type="number" name="price" id="price" placeholder="Price" class="font-primary placeholder-black w-[536px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4">
                <input type="number" name="bedrooms" id="bedrooms" placeholder="Bedrooms" class="font-primary placeholder-black w-[536px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4">
                <div>
                    <h1 class="font-primary text-2xl mb-4">
                        Location
                    </h1>
                    <div class="flex flex-col flex-wrap">
                        <input type="text" name="county" id="county" placeholder="County" class="font-primary placeholder-black w-[250px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4">
                        <input type="text" name="subcounty" id="subcounty" placeholder="Subcounty" class="font-primary placeholder-black w-[250px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4">
                        <input type="text" name="constituency" id="constituency" placeholder="Constituency" class="font-primary placeholder-black w-[250px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4">
                        <input type="text" name="ward" id="ward" placeholder="Ward" class="font-primary placeholder-black w-[250px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4">
                        <input type="text" name="location" id="location" placeholder="Location" class="font-primary placeholder-black w-[250px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4">
                        <input type="text" name="sublocation" id="sublocation" placeholder="Sublocation" class="font-primary placeholder-black w-[250px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4">
                        <input type="text" name="village" id="village" placeholder="Village" class="font-primary placeholder-black w-[250px] h-[50px] outline outline-black outline-1 xy-shadow-no-blur rounded mb-6 px-4">
                    </div>
                </div>
            </form>

            <!-- Image Upload Form -->
            <form id="imageForm" action="/upload-images" method="POST" class="dropzone rounded mb-4">
                @csrf
                <h2>Upload Images</h2>
            </form>

            <!-- Submit Button -->
            <button id="submitAll" type="button" class="button-86 mt-4">Submit</button>
        </div>
    </section>

    <script type="text/javascript" defer>
        document.getElementById('submitAll').addEventListener('click', function() {
            const imageForm = document.getElementById('imageForm');
            const metadataForm = document.getElementById('metadataForm');

            const imageFormData = new FormData(imageForm);

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

                    const metadataFormData = new FormData(metadataForm);

                    if (imageData.image_ids) {
                        imageData.image_ids.forEach(id => {
                            metadataFormData.append('image_ids[]', id);
                        });
                    }

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

        // Initialize Dropzone
        Dropzone.options.imageForm = {
            paramName: 'images', // Name attribute for files
            maxFilesize: 20, // MB
            acceptedFiles: ".jpeg,.jpg,.png",
            addRemoveLinks: true,
        };
    </script>
</x-layout>