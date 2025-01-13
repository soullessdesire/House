<div class="flex gap-4 w-fit items-center h-full">
    @if (!$property->images->isEmpty())
    @foreach ($property->images as $image)
    <div class="relative group">
        <img src="{{asset('storage/' . $image->image_path)}}" alt="" class="w-[250px] h-[250px] object-cover rounded">
        <form action=" {{ route('property.image.destroy',['propertyImage' => $image->id] )}}" class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[50px] h-[50px] ">
            @method('DELETE')
            @csrf
            <button class="translate-y-16 opacity-0 transition-duration-500 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0"><ion-icon name="trash-outline" class="text-white bg-red-500 rounded p-2"></ion-icon></button>
        </form>
    </div>
    @endforeach
    @endif
</div>