
<x-layout>

@include('partials._search')
{{--@php($imgs = array("acme","skynet","wonka","wayne","stark"))
@php($img = "images/" . $imgs[ord($listing->title[0])%5]. ".png")--}}
<a href="/" class="inline-block text-black ml-4 mb-4 dark:text-white"
    ><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
    <x-card>
        <div
            class="flex flex-col items-center justify-center text-center"
        >
            <img
                class="w-48 h-48 mr-6 mb-6"
                src={{$listing->logo ? asset('storage/'.$listing->logo) : asset("images/no-image.png")}}
                alt="Company logo"
            />

            <h3 class="text-2xl dark:text-white mb-2">{{$listing['title']}}</h3>
            <div class="text-xl dark:text-white font-bold mb-4">{{$listing['company_name']}}</div>
            <x-listing-tags :listing="$listing" />
            <div class="text-lg my-4 dark:text-white">
                <i class="fa-solid fa-location-dot"></i> {{$listing['location']}}
            </div>
            <div class="border border-gray-200 dark:border-slate-600 w-full mb-6"></div>
            <div>
                <h3 class="text-3xl dark:text-white font-bold mb-4">
                    Job Description
                </h3>
                <div class="text-lg dark:text-white space-y-6">
                    <p>
                        {{$listing->description}}
                    </p>

                    <div class="flex items-center dark:text-cyan-100 text-slate-800">
                        <i class="fa-solid fa-envelope px-2 md:px-3"></i>
                        Email<div class="px-2 md:px-5">|</div><div id="email" class="text-slate-400">{{$listing->email}}</div><div class="px-2 md:px-5">|</div>
                        <button id="email_button" class="underline" onclick="copyEmail()">Copy Email</button>
                    </div>

                    <a
                        href="{{$listing->website}}"
                        target="_blank"
                        class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-globe"></i> Visit
                        Website</a
                    >
                </div>
            </div>
        </div>
    </x-card>
    {{--<x-card class="mt-4 p-2 flex space-x-6">
        <a href="/listings/{{$listing->id}}/edit">
            <i class="fa-solid fa-pencil">Edit</i>
        </a>

        <form method = "POST" action="/listings/{{$listing->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500">
                <i class="fa-solid fa-trash">Delete</i>
            </button>
        
        </form>
    </x-card>--}}
</div>
</x-layout>