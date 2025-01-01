<x-form.layout>
    <x-slot:height>
        h-[1000px]
    </x-slot:height>
    <form method="post">
        @csrf
        <x-form.image></x-form.image>
        <x-form.video></x-form.video>
        <button id="submit" type="button" class="button-86 mt-6">Submit All</button>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelector('#submit').addEventListener('click', async () => {
                const form = document.querySelector('form[method=post]');
                const formData = new FormData(form);


                const sessionData = JSON.stringify(sessionStorage);
                formData.append('sessionData', sessionData);


                console.log(sessionData, JSON.parse(sessionData), document.querySelector('[name=_token]').value)
                const imageInputs = document.querySelector('[name="images[]"]');
                if (imageInputs.files.length > 0) {
                    for (let i = 0; i < imageInputs.files.length; i++) {
                        formData.append(`images[${i}]`, imageInputs.files[i]);
                    }
                }
                const videoInputs = document.querySelector('[name="videos[]"]');
                if (videoInputs.files.length > 0) {
                    for (let i = 0; i < videoInputs.files.length; i++) {
                        formData.append(`videos[${i}]`, videoInputs.files[i]);
                    }
                }
                formData.forEach((value, key) => {
                    console.log(`${key}: ${value}`);
                });
                try {
                    const response = await fetch('http://localhost:8000/property/create', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('[name=_token]').value,
                        },
                        body: formData,
                    });

                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }

                    const result = await response.json();
                    console.log('Response:', result);
                } catch (error) {
                    console.log('Error:', error);
                }
            });
        });
    </script>
</x-form.layout>