<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Create a Song you're into
                        </h2>
                        <p class="mb-4">What you're into</p>
                    </header>

                    <form action="/songs/{{$song->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                            <label
                                for="name"
                                class="inline-block text-lg mb-2"
                                >Name of the song</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="name"
                                placeholder="Example: Runaway"
                               value="{{$song->name}}"
                            />

                            @error('name')
                                <p class="text-red-500 text-xs mt-1">
                                    {{$message}}
                                </p>
                            @enderror

                        </div>

                        <div class="mb-6">
                            <label
                                for="genre"
                                class="inline-block text-lg mb-2"
                                >Genre</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="genre"
                                placeholder="Example: Pop"
                                value="{{$song->genre}}"
                            />
                            @error('genre')
                            <p class="text-red-500 text-xs mt-1">
                                {{$message}}
                            </p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <label for="album" class="inline-block text-lg mb-2"
                                >Album</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="album"
                                placeholder="Example: Graduation"
                                value="{{$song->album}}"
                            />
                            @error('album')
                            <p class="text-red-500 text-xs mt-1">
                                {{$message}}
                            </p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <label for="artist" class="inline-block text-lg mb-2">
                                Artist (Comma Separated)
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="artist"
                                placeholder="Kanye West"
                                value="{{$song->artist}}"
                            />
                            @error('artist')
                            <p class="text-red-500 text-xs mt-1">
                                {{$message}}
                            </p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <label for="logo" class="inline-block text-lg mb-2">
                             Logo of the Single/Album
                            </label>
                            <input
                                type="file"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="logo"
                            />

                            <img
                            class="w-48 mr-6 mb-6"
                            src="{{$song->logo ? asset('storage/' . $song->logo) : asset('/images/no-image.png')}}"
                            alt=""
                            />

                            @error('logo')
                            <p class="text-red-500 text-xs mt-1">
                                {{$message}}
                            </p>
                        @enderror
                        </div>
                        <div class="mb-6">
                            <label for="logo" class="inline-block text-lg mb-2">
                             Single
                            </label>
                            <input
                                type="file"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="audio"
                            />
                            <audio controls>
                            <source
                            class="w-48 mr-6 mb-6"
                            src="{{$song->audio ? asset('storage/' . $song->audio) : asset('/aud/MicrosoftWindowsXPError.mp3')}}" 
                            type="audio/mpeg"
                            alt=""
                            />
                            </audio>
                            @error('audio')
                            <p class="text-red-500 text-xs mt-1">
                                {{$message}}
                            </p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Update 
                            </button>

                            <a href="/songs{{$song->listing['id']}}" class="text-black ml-4"> Back </a>
                        </div>
                    </form>
    </x-card>

            </x-layout>