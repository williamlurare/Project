<x-layout>
    
    @include('partials._hero')
    @include('partials._search')
    <div
    class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
    >
    
    @unless(count($listings) == 0)
    @foreach($listings as $listing)
    <x-listing-card :listing="$listing"/>
    @endforeach
    
    @else 
    <p style="font-size: 20px;]">No Playlist here &#x1F615;</p>
    @endunless
    
    </div>
    
    <div class="mt-6 p-4">
        {{$listings->links()}}
    </div>
    
    </x-layout>
    