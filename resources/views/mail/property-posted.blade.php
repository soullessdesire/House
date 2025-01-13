<x-mail>
    <x-slot:header>
        <img src="{{ asset('logo.png') }}" alt="Company Logo">
    </x-slot:header>

    <p class="text-4xl font-primary">Congratulations</p>

    <p>{{$property->owner}} have successfully created a property listing</p>

    <x-mail:button :url="/property/{{ $property->id}}">
        View Property Listing
    </x-mail:button>

    <x-slot:subcopy>
        If you’re having trouble clicking the "Verify Email" button, copy and paste this URL into your browser: {{ $url }}
    </x-slot:subcopy>

    <x-slot:footer>
        © {{ date('Y') }} Your Company. All rights reserved.
    </x-slot:footer>
</x-mail>