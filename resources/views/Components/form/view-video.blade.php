<div class="bg-white flex gap-4 items-center h-full text-black mb-4 w-fit">
    @if (!$property->videos->isEmpty())
    @foreach ($property->videos as $video)
    <div>
        <img src="{{asset('storage/' . $video->video_path)}}" alt="" class="w-[150px] h-[150px] object-cover rounded">
        <form action="{{ route('property.video.destroy', ['propertyVideo' => $video->id])}}">
            @method('DELETE')
            @csrf
            <button class="translate-y-16 opacity-0 transition-duration-500 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0"><ion-icon name="trash-outline" class="text-white bg-red-500 rounded p-2"></ion-icon></button>
        </form>
    </div>
    @endforeach
    @endif
</div>