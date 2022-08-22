<x-layout>
@include('partials._search')
<a href="/home" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
<x-card class="p-10">
    <div
        class="flex flex-col items-center justify-center text-center"
    >
        <img
            class="w-48 mr-6 mb-6"
            src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}"
            alt=""
        />

        <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
        <i class="fa fa-user"></i>Made By: {{$listing->user['name']}} <br>
        @if (Auth::id() == $listing->user_id)
        <div class="text-lg my-4">
            <a href="/songs/create">
                <a href="/songs/create/">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add a song
                    </a>
            <a href="/listings/{{$listing->id}}/edit">
                <i class="fa-solid fa-pencil"></i> Edit
                </a>
               <form method="POST" action="/listings/{{$listing->id}}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"> <i class="fa-solid fa-trash"></i> Delete</button> <br>
                <i class="fa fa-eye" aria-hidden="true"></i><a href="/songs{{$listing->id}}"> View Playlist</a><br>
                <i class="fa fa-eye" aria-hidden="true"></i><a href="/listings/manage"> Manage Playlist</a><br>
                <i class="fa fa-music" aria-hidden="true"></i><a href="/songs/manage"> Manage Songs</a>
            @else
           <i class="fa fa-eye" aria-hidden="true"></i><a href="/songs{{$listing->id}}">View Playlist</a>
            @endauth
        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
    </div>
</x-card>
{{-- <x-card class="mt-4 p-2 flex space-x-6">
    <a href="/listings/{{$listing->id}}/edit">
    <i class="fa-solid fa-pencil"></i> Edit
    </a>
   <form method="POST" action="/listings/{{$listing->id}}">
    @csrf
    @method('DELETE')
    <button class="text-red-500"> <i class="fa-solid fa-trash"></i> Delete</button>
</form>
</x-card> --}}
</div>

</x-layout>
