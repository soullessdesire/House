@php
$counties = [
(object) ['id' => 1, 'name' => 'Nairobi'],
(object) ['id' => 2, 'name' => 'Mombasa'],
(object) ['id' => 3, 'name' => 'Kisumu'],
(object) ['id' => 4, 'name' => 'Nakuru'],
(object) ['id' => 5, 'name' => 'Eldoret'],
(object) ['id' => 6, 'name' => 'Meru'],
(object) ['id' => 7, 'name' => 'Nyeri'],
(object) ['id' => 8, 'name' => 'Kiambu'],
(object) ['id' => 9, 'name' => 'Machakos'],
(object) ['id' => 10, 'name' => 'Kajiado'],
(object) ['id' => 11, 'name' => 'Bomet'],
(object) ['id' => 12, 'name' => 'Bungoma'],
(object) ['id' => 13, 'name' => 'Busia'],
(object) ['id' => 14, 'name' => 'Elgeyo-Marakwet'],
(object) ['id' => 15, 'name' => 'Embu'],
(object) ['id' => 16, 'name' => 'Garissa'],
(object) ['id' => 17, 'name' => 'Homa Bay'],
(object) ['id' => 18, 'name' => 'Isiolo'],
(object) ['id' => 19, 'name' => 'Kakamega'],
(object) ['id' => 20, 'name' => 'Kericho'],
(object) ['id' => 21, 'name' => 'Kisii'],
(object) ['id' => 22, 'name' => 'Kitui'],
(object) ['id' => 23, 'name' => 'Kwale'],
(object) ['id' => 24, 'name' => 'Laikipia'],
(object) ['id' => 25, 'name' => 'Lamu'],
(object) ['id' => 26, 'name' => 'Machakos'],
(object) ['id' => 27, 'name' => 'Mandera'],
(object) ['id' => 28, 'name' => 'Meru'],
(object) ['id' => 29, 'name' => 'Migori'],
(object) ['id' => 30, 'name' => 'Mombasa'],
(object) ['id' => 31, 'name' => 'Murang’a'],
(object) ['id' => 32, 'name' => 'Nairobi'],
(object) ['id' => 33, 'name' => 'Nakuru'],
(object) ['id' => 34, 'name' => 'Narok'],
(object) ['id' => 35, 'name' => 'Nyandarua'],
(object) ['id' => 36, 'name' => 'Nyamira'],
(object) ['id' => 37, 'name' => 'Samburu'],
(object) ['id' => 38, 'name' => 'Siaya'],
(object) ['id' => 39, 'name' => 'Taita Taveta'],
(object) ['id' => 40, 'name' => 'Tana River'],
(object) ['id' => 41, 'name' => 'Tharaka Nithi'],
(object) ['id' => 42, 'name' => 'Trans-Nzoia'],
(object) ['id' => 43, 'name' => 'Uasin Gishu'],
(object) ['id' => 44, 'name' => 'Vihiga'],
(object) ['id' => 45, 'name' => 'Wajir'],
(object) ['id' => 46, 'name' => 'West Pokot'],
(object) ['id' => 47, 'name' => 'Lamu'],
];
@endphp


<div {{$attributes->merge(['class' => "grid grid-cols-3 grid-rows-4 bg-white xy-shadow-no-blur border border-black text-black rounded-lg items-center rounded gap-6 relative pr-[10px]"])}}>
    <select name="county" id="county" class="font-primary w-full placeholder-black  h-[50px] rounded-lg ">
        <option value="">Select a county</option>
        @foreach ($counties as $county)
        <option value="{{ $county->id }}">{{ $county->name }}</option>
        @endforeach
    </select>
</div>