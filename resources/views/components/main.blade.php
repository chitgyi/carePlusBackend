<main class="main flex flex-col flex-grow -ml-64 md:ml-0 transition-all duration-150 ease-in">
    <header class="header bg-white box py-3 px-4 rounded-lg m-2">
        <div class="header-content flex items-center flex-row">
            <form action="#">
                <div class="hidden md:flex relative">
                    <h1 class="font-bold text-2xl text-gray-700">
                        @yield('title')
                    </h1>
                </div>
                <div class="flex md:hidden">
                    <a href="#" class="flex items-center justify-center h-10 w-10 border-transparent">
                        <svg class="h-6 w-6 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </a>
                </div>
            </form>
            <div class="flex ml-auto">
                <a href="#" class="flex flex-row items-center">
                    <div class="h-10 w-10 bg-gray-200 border rounded-full"></div>
                    <span class="flex flex-col ml-2">
                        <span class="truncate w-20 font-semibold tracking-wide leading-none">John Doe</span>
                        <span class="truncate w-20 text-gray-500 text-xs leading-none mt-1">Manager</span>
                    </span>
                </a>
            </div>
        </div>
    </header>
    <div class="main-content flex flex-col flex-grow p-4">
        {{ $slot }}
    </div>
</main>
