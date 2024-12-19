@php
    $links = [
        ['Home', '/'],
        ['About Us', '/about-us'],
        ['Contact Us', '/contact-us'],
        ['Catalog', '/catalog']
    ]
@endphp


@foreach ($links as [ $link , $url ])
        <li><x-navbar.navlink href="{{ $url }}"> {{ $link }} </x-navbar.navlink></li>
@endforeach