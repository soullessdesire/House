<x-form.layout>
    <x-slot:height>
        h-[1000px]
    </x-slot:height>
    <x-form.input type="text" name="title" id="title" placeholder="Title"></x-form.input>
    <textarea placeholder="Description" name="description" class="outline outline-black outline-1 xy-shadow-no-blur text-black bg-white w-5/6 h-[100px] rounded p-2 mb-2"></textarea>
    <x-form.input type="number" name="price" id="price" placeholder="Price"></x-form.input>
    <x-form.input type="number" name="bedrooms" id="bedrooms" placeholder="Bedrooms" max="6" min="1"></x-form.input>
    <x-form.location></x-form.location>
    <button id="submit" type="click" class="button-86 mt-6">Submit</button>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('submit').addEventListener('click', () => {
                document.querySelectorAll('input').forEach(input => {
                    sessionStorage.setItem(input.name, input.value)
                });
                sessionStorage.setItem(document.querySelector('textarea').name, document.querySelector('textarea').value)

                location.href = 'http://localhost:8000/property/create/media'
            })
        })
    </script>
</x-form.layout>