
<x-layout>

@include('partials._hero')
@include('partials._search')
@if (count($listings) == 0)
    <p class="font-300 text-xl text-center text-cyan-900">There are no listings.</p>
@endif




<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @foreach($listings as $listing)
    {{--@php($img = "images/" . $imgs[array_rand($imgs)]. ".png")--}}
    <x-listing-card :listing="$listing" />
    @endforeach
</div>
<div class="mt-16 p-4 h-40">
    {{$listings->links()}}
</div>
</x-layout>