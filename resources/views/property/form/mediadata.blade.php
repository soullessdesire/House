<x-form.layout>
    <x-slot:height>
        h-[1000px]
    </x-slot:height>
    <form method="POST" action="{{route("property.store")}}">
        @foreach (['title','description','price','bedrooms','county','subcounty','constitiuency','ward','location','sublocation','village'] as $field)
        @error($field)
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        @endforeach
        @csrf
        <x-form.image></x-form.image>
        <x-form.video></x-form.video>
        <button id="submit" type="submit" class="button-86 mt-6">Submit All</button>
    </form>
</x-form.layout>