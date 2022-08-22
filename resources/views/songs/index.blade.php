<x-layout>
    
    @include('partials._hero')
    <div
    class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
    >
    
    @unless(count(($songs)) == 0 )
    @foreach($songs as $song)
    <x-song-card :song="$song"/>

    @endforeach
    
    @else 
    <p style="font-size: 20px;]">No Songs here &#x1F615;</p>
    @endunless
    
    </div>
    
    <div class="mt-6 p-4">
      
    </div>
    
    </x-layout>
    