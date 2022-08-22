@props(['listing'])
<x-card>
    <a href="/home" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}"
            alt=""
            style="height: 200px; width: 200px"
        />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>

            <div class="text-lg mt-4">
                <i class="fa fa-user" aria-hidden="true"></i>Made By: {{$listing->user->name}} <br>
                <a href="/songs{{$listing->id}}"><p>View Playlist</p></a>
            </div> <br>
        </div>
    </div>
</x-card>