<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Edit your Music &#x1F3B5;
                        </h2>
                        <p class="mb-4">Edit: {{$listing->title}}</p>
                    </header>

                    <form action="/listings/{{$listing->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-6">
                            <label for="title" class="inline-block text-lg mb-2"
                                >Title</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="title"
                                placeholder="Example: Needed Me"
                                value="{{$listing->title}}"
                            />
                            @error('title')
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
                            src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}"
                            alt=""
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
                                Update Music 
                            </button>

                            <a href="/home" class="text-black ml-4"> Back </a>
                        </div>
                    </form>
    </x-card>

            </x-layout>