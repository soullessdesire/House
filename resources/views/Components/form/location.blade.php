<h1 class="font-primary text-2xl mb-4">
    Location
</h1>
<div>
    @php
    $input_names = [
    'county',
    'subcounty',
    'constituency',
    'ward',
    'location',
    'sublocation',
    'village',
    ];
    @endphp
    @foreach ($input_names as $input_name)
    <x-form.input type="text" name={{$input_name}} id="{{$input_name}}" placeholder="{{ ucwords(strtolower($input_name))}}"></x-form.input>
    @endforeach
</div>