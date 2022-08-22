<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Create a Playlist
                        </h2>
                        <p class="mb-4">What you're into</p>
                    </header>

                    <form action="/listings" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="mb-6">
                            <label for="title" class="inline-block text-lg mb-2"
                                >Name of the playlist</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="title"
                                placeholder="Example: Needed Me"
                                value="{{old('title')}}"
                            />
                            @error('title')
                            <p class="text-red-500 text-xs mt-1">
                                {{$message}}
                            </p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <label for="logo" class="inline-block text-lg mb-2">
                             Logo of the playlist
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