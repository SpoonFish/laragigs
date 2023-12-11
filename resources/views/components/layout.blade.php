<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        /><!-- Alpine Plugins -->
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
         
        <!-- Alpine Core -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
        <script src="{{ asset('js/app.js') }}"></script>

        <script>
            tailwind.config = {
                /** @type {import('tailwindcss').Config} */
                theme: {
                    extend: {
                        colors: {
                            laravel: "#91c8cf",
                            laravel_dark: "#21253f",
                            background: "#e4eced",
                            background_dark: "#011015",
                        },
                    },
                },
                darkMode: 'class', // This is our star player for the dark mode!
                content: [
                    "././resources/**/*.blade.php",
                    "../../resources/js/app.js",
                    "laragigs/resources/js/app.js",
                ],
                plugins: [],
            };
        </script>
        <title>LaraGigs | Find Laravel Jobs & Projects</title>
    </head>
    <body x-cloak x-data="{darkMode: $persist(false)}" :class="{'dark': darkMode === true }" class="antialiased b-48 ">
        <div class="bg-background dark:bg-background_dark min-h-screen">
        <nav class="flex justify-between items-center mb-4">
            <a href="/"
                ><img class="w-28 absolute left-4 top-4" src={{asset("images/logo.png")}} alt="" class="logo"
            /></a>
            <div class="h-20"></div>
            <ul class="flex space-x-3 md:space-x-6 mr-6 text-lg">
                <li>
                    <x-theme-toggle/>
                </li>
                @auth
                <span class="hidden md:block font-bold uppercase text-black dark:text-white">
                    Welcome {{auth()->user()->name}}
                </span>
                <li>
                    <a href="/listings/manager" class="hover:text-laravel text-black dark:text-white"
                        ><i class="fa-solid fa-gear text-black dark:text-white"></i>
                        Manage Listings</a
                    >
                </li>
                <form class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit">
                        <a class="text-black dark:text-white"><i class="fa-solid fa-door-closed"></i>Logout</a>
                    </button>
                </form>
                @else
                <li>
                    <a href="register" class="hover:text-laravel text-black dark:text-white"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>
                <li>
                    <a href="login" class="hover:text-laravel text-black dark:text-white"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
                @endauth
            </ul>
        </nav>
    {{-- VIEW OUTPUT --}}
<main>
    {{$slot}}
</main>
<footer
class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel dark:bg-laravel_dark text-white h-16 mt-16 opacity-90 md:justify-center"
>
<p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>

<a
    href="/listing/create"
    class="absolute top-1/8 right-10 bg-black text-white py-2 px-5"
    >Post Job</a
>
</footer>
<x-flash-message />
</div>
</body>