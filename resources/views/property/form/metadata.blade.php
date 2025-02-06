<x-form.layout>
    <x-slot:height>
        h-[1200px]
    </x-slot:height>

    @session('error')
    <div class="text-red text-sm font-primary">
        There is a field you forgot to fill
    </div>
    @endsession

    <form id="property-form" action="{{ route('property.redirect.media') }}" method="POST">
        @csrf
        <x-form.input type="text" name="title" id="title" placeholder="Title"></x-form.input>
        <textarea placeholder="Description" name="description" class="outline outline-black outline-1 xy-shadow-no-blur text-black bg-white w-5/6 h-[100px] rounded p-2 mb-2"></textarea>
        <x-form.input type="number" name="price" id="price" placeholder="Price"></x-form.input>
        <x-form.input type="number" name="bedrooms" id="bedrooms" placeholder="Bedrooms" max="6" min="1"></x-form.input>
        <x-form.location></x-form.location>
        <button type="submit" class="button-86 mt-6">Submit</button>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('submit').addEventListener('click', (event) => {
                event.preventDefault();

                document.querySelectorAll('input').forEach(input => {
                    sessionStorage.setItem(input.name, input.value);
                });
                sessionStorage.setItem(document.querySelector('textarea').name, document.querySelector('textarea').value);

                document.getElementById('property-form').submit()
            });
        });
    </script>
</x-form.layout>