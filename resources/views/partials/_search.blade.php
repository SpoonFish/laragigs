<form action="/">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
        <div class="absolute top-4 left-3">
            <i
                class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
            ></i>
        </div>
        <input
            type="text"
            name="search"
            class="h-14 w-full pl-10 pr-20 rounded-lg z-0 ring-4 ring-slate-100 dark:ring-slate-600 bg-cyan-50 dark:bg-slate-800 focus:shadow focus:outline-none"
            placeholder="Search Laravel Gigs..."
        />
        <div class="absolute top-2 right-2">
            <button
                type="submit"
                class="h-10 w-20 text-white rounded-lg bg-cyan-500 hover:bg-cyan-600"
            >
                Search
            </button>
        </div>
    </div>
</form>