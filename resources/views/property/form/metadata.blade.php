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
        <select class="outline outline-1 outline-black p-2 h-[50px] w-[150px] rounded" name="bedrooms" id="bedrooms" class="form-control">
            @foreach([
            '0' => 'Bedsitter',
            '0.5' => 'Single Room',
            '1' => 'One Bedroom',
            '2' => 'Two Bedroom',
            '3' => 'Three Bedroom',
            '4' => 'Four Bedroom'
            ] as $value => $label)
            <option value="{{ $value }}" {{ old('bedrooms') == $value ? 'selected' : '' }}>
                {{ $label }}
            </option>
            @endforeach
        </select>
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