@props(['artistCsv'])

@php
    $artists = explode(',', $artistCsv);
@endphp

<ul class="flex">
   @foreach($artists as $artist) 
    <li
        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
    >
        <a href="/?artist={{$artist}}">{{$artist}}</a>
    </li>
    @endforeach
</ul>