<x-mail>
    <x-slot:header>
        <img src="{{ asset('logo.png') }}" alt="Company Logo">
    </x-slot:header>

    <p class="text-lg text-neutral-500">Thank you for signing up for our service. Please verify your email by clicking the button below.</p>

    <x-mail:button :url="">
        Verify Email
    </x-mail:button>

    <x-slot:subcopy>
        If you’re having trouble clicking the "Verify Email" button, copy and paste this URL into your browser: {{ $url }}
    </x-slot:subcopy>

    <x-slot:footer>
        © {{ date('Y') }} Your Company. All rights reserved.
    </x-slot:footer>
</x-mail>