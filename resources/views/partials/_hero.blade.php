<section class="relative h-48 bg-laravel dark:bg-laravel_dark flex flex-col justify-center align-center text-center space-y-4 mb-4">
    <div
        class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
        style="background-image: url('images/laravel-logo.png')"
    ></div>

    <div class="z-10">
        <h1 class="text-2xl font-bold uppercase text-white">
            Lara<span class="text-black dark:text-slate-400">Gigs</span>
        </h1>
        <p class="text-2xl text-gray-200 font-bold my-4">
            Find or post Laravel jobs & projects
        </p>
        @auth
        @else
        <div>
            <a
                href="register"
                class="inline-block bg-cyan-50 text-cyan-950 py-2 px-4 rounded-xl uppercase mt-2 transition hover:duration-150 hover:text-white hover:bg-cyan-950"
                >Sign Up to List a Gig</a
            >
        </div>
        @endauth
    </div>
</section>