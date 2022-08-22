<x-layout>
    <a href="/songs{{$song->listing['id']}}" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
    <x-card class="p-10">
        <div
            class="flex flex-col items-center justify-center text-center"
        >
            <img
                class="w-48 mr-6 mb-6"
                src="{{$song->logo ? asset('storage/' . $song->logo) : asset('/images/no-image.png')}}"
                alt=""
            />
    
            <h3 class="text-2xl mb-2">{{$song->name}}</h3>
           
                <x-song-artist :artistCsv="$song->artist" />
                
            <div class="text-lg my-4">
                <i class="fa fa-play-circle" aria-hidden="true"></i> Playlist: {{$song->listing['title']}} <br>
                <i class="fa fa-book" aria-hidden="true"></i> Album: {{$song->album}} <br>
                <i class="fa fa-headphones" aria-hidden="true"></i> Genre: {{$song->genre}} 
            </div>
            <div class="border border-gray-200 w-full mb-6"></div>
            <audio controls autoplay>
                <source src="{{$song->audio ? asset('storage/' . $song->audio) : asset('/aud/MicrosoftWindowsXPError.mp3')}}" type="audio/mpeg"> daw
                </audio>
            </div>
        </div>
    </x-card>
    <x-card class="mt-4 p-2 flex space-x-6">
        @if($song->listing['user_id'] === \Auth::id())
            
       
        <a href="/songs/{{$song->id}}/edit">
        <i class="fa-solid fa-pencil"></i> Edit
        </a>
       <form method="POST" action="/songs/{{$song->id}}">
        @csrf
        @method('DELETE')
        <button class="text-red-500"> <i class="fa-solid fa-trash"></i> Delete</button>
        @else
        @endif
    </form>
    </x-card>
    </div>
    
    </x-layout>
    