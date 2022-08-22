@props(['song'])
<x-card>
    <a href="/home" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$song->logo ? asset('storage/' . $song->logo) : asset('/images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/songs/{{$song->id}}">{{$song->name}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$song->album}}</div>
            <x-song-artist :artistCsv="$song->artist" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-music"></i> {{$song->genre}}
            </div> <br>
        </div>
    </div>
</x-card>