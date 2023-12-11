@if(session()->has('message'))
    <div z-10 x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class=" rounded-lg text-center fixed top-0 left-1/2 transform -translate-x-1/2 border-laravel dark:border-laravel_dark dark:text-white border-2 bg-white dark:bg-cyan-950 text-black px-48 py-3">
        <p>
            {{session('message')}}
        </p>
    </div>
@endif