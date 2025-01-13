<div {{$attributes->merge(['class' => 'fixed top-0 left-0 right-0 bottom-0 z-20 bg-black bg-opacity-20 hidden flex justify-center items-center overflow-hidden'])}} onscroll="(e) => {e.stopPropagation();e.preventDefault();}">
    {{$slot}}
</div>