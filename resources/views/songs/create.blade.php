<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Create a Song you're into
                        </h2>
                        <p class="mb-4">What you're into</p>
                    </header>

                    <form action="/songs/" method="POST" enctype="multipart/form-data">
                        @csrf
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
                                value="{{old('name')}}"
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
                                value="{{old('genre')}}"
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
                                value="{{old('album')}}"
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
                                value="{{old('artist')}}"
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
                            @error('logo')
                            <p class="text-red-500 text-xs mt-1">
                                {{$message}}
                            </p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <label for="audio" class="inline-block text-lg mb-2">
                             Single
                            </label>
                            <input
                                type="file"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="audio"
                            />
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
                                Create 
                            </button>

                            <a href="/home" class="text-black ml-4"> Back </a>
                        </div>
                    </form>
    </x-card>

            </x-layout>