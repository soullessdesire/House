<x-form.layout>
    <x-slot:height>
        h-[1200px]
    </x-slot:height>

    @session('error')
    <div class="text-red text-sm font-primary">
        {{ $message }}
    </div>
    @endsession
    @foreach (['title','description','price','bedrooms','county','subcounty','constitiuency','ward','location','sublocation','village'] as $field)
    @error($field)
    <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
    @endforeach


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
    @if(session('error'))
    <script>
        Swal.fire({
            title: 'Error!',
            text: "{{ session('error') }}",
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>
    @endif

</x-form.layout>