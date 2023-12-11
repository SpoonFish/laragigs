@props(['listing'])

{{--@php($img = "images/laravel-logo.png")--}}

<x-card class="p-6 transition ease-in-out hover:scale-x-[1.016] hover:scale-y-105">
    <div class="flex">
        <img
            class="hidden w-48 h-48 mr-6 md:block"
            src={{$listing->logo ? asset('storage/'.$listing->logo) : asset("images/no-image.png")}}
            alt="Company logo"
            width="100"
            height="100"
        />
        <div>
            <h3 class="text-2xl text-slate-900 dark:text-cyan-50">
                <a href={{"/listing/".$listing->id}}>{{$listing->title}}</a>
            </h3>
            <div class="text-xl text-black dark:text-white font-bold mb-4">{{$listing['company_name']}}</div>
            <x-listing-tags :listing="$listing" />
            <div class="text-lg text-black dark:text-white mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$listing->location}},
            </div>
        </div>
    </div>
</x-card>