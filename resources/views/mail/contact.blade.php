<x-mail:message>
    <p>You have received a new message from the contact form:</p>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $message }}</p>
</x-mail:message>
<x-mail:footer>
    © {{ date('Y') }} Your Company. All rights reserved.
</x-mail:footer>