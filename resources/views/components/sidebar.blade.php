<aside class="sidebar transform -translate-x-full md:translate-x-0 transition-transform duration-150 ease-in bg-white">
    <div class="sidebar-header flex items-center justify-center py-4">
        <div class="inline-flex">
            <a href="#" class="inline-flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-green-800" width="30" height="30" fill="currentColor"
                    class="bi bi-x-diamond-fill" viewBox="0 0 16 16">
                    <path
                        d="M9.05.435c-.58-.58-1.52-.58-2.1 0L4.047 3.339 8 7.293l3.954-3.954L9.049.435zm3.61 3.611L8.708 8l3.954 3.954 2.904-2.905c.58-.58.58-1.519 0-2.098l-2.904-2.905zm-.706 8.614L8 8.708l-3.954 3.954 2.905 2.904c.58.58 1.519.58 2.098 0l2.905-2.904zm-8.614-.706L7.292 8 3.339 4.046.435 6.951c-.58.58-.58 1.519 0 2.098l2.904 2.905z" />
                </svg>
                <span class="leading-10 text-green-800 text-2xl font-bold ml-1">carePlus+</span>
            </a>

        </div>
    </div>
    <div class="sidebar-content px-4 py-6">
        <ul class="flex flex-col w-full">
            <li class="my-px">
                <a href="{{ route('dashboard') }}"
                    class="flex flex-row items-center h-10 px-3 rounded-lg text-white-800 hover:bg-green-400 hover:text-white {{ Request::routeIs('dashboard') ? 'bg-green-500 text-white' : 'text-green-900' }}">
                    <span class="flex items-center justify-center text-lg text-white-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-house" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd"
                                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg>
                    </span>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li class="my-px">
                <span class="flex font-bold text-sm text-green-800 px-4 my-4 uppercase">Projects</span>
            </li>
            <li class="my-px">
                <a href="{{ route('articles') }}"
                    class="flex flex-row items-center h-10 px-3 rounded-lg hover:bg-green-400 hover:text-white {{ Request::routeIs('articles') || Request::routeIs('articles.create') ? 'bg-green-500 text-white' : 'text-green-900' }}">
                    <span class="flex items-center justify-center text-lg text-white-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-book" viewBox="0 0 16 16">
                            <path
                                d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                        </svg>
                    </span>
                    <span class="ml-3">Articles</span>
                    <span
                        class="flex items-center justify-center text-xs text-green-500 font-semibold bg-green-100 h-6 px-2 rounded-full ml-auto">10</span>
                </a>
            </li>
            <li class="my-px">
                <a href="{{ route('categories') }}"
                    class="flex flex-row items-center h-10 px-3 rounded-lg hover:bg-green-400 hover:text-white {{ Request::routeIs('categories') || Request::routeIs('categories.create') ? 'bg-green-500 text-white' : 'text-green-900' }}">
                    <span class="flex items-center justify-center text-lg text-white-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-view-list" viewBox="0 0 16 16">
                            <path
                                d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H3zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2zm0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14z" />
                        </svg>
                    </span>
                    <span class="ml-3">Category</span>
                    <span
                        class="flex items-center justify-center text-xs text-green-500 font-semibold bg-green-100 h-6 px-2 rounded-full ml-auto">10</span>

                </a>
            </li>
            <li class="my-px">
                <a href="{{ route('doctors') }}"
                    class="flex flex-row items-center h-10 px-3 rounded-lg hover:bg-green-400 hover:text-white {{ Request::routeIs('doctors') ? 'bg-green-500 text-white' : 'text-green-900' }}">
                    <span class="flex items-center justify-center text-lg text-white-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-people" viewBox="0 0 16 16">
                            <path
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                        </svg>
                    </span>
                    <span class="ml-3">Doctors</span>
                    <span
                        class="flex items-center justify-center text-xs text-green-500 font-semibold bg-green-100 h-6 px-2 rounded-full ml-auto">1k</span>
                </a>
            </li>

            <li class="my-px">
                <a href="{{ route('hospitals') }}"
                    class="flex flex-row items-center h-10 px-3 rounded-lg hover:bg-green-400 hover:text-white {{ Request::routeIs('hospitals') ? 'bg-green-500 text-white' : 'text-green-900' }}">
                    <span class="flex items-center justify-center text-lg text-white-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                    </span>
                    <span class="ml-3">Hospital</span>
                    <span
                        class="flex items-center justify-center text-xs text-green-500 font-semibold bg-green-100 h-6 px-2 rounded-full ml-auto">1k</span>
                </a>
            </li>

            <li class="my-px">
                <span class="flex font-bold text-sm text-green-800 px-4 my-4 uppercase">Account</span>
            </li>
            <li class="my-px">
                <a href="{{ route('users') }}"
                    class="flex flex-row items-center h-10 px-3 rounded-lg hover:bg-green-400 hover:text-white {{ Request::routeIs('users') ? 'bg-green-500 text-white' : 'text-green-900' }}">
                    <span class="flex items-center justify-center text-lg text-white-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-people" viewBox="0 0 16 16">
                            <path
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                        </svg>
                    </span>
                    <span class="ml-3">Users</span>
                    <span
                        class="flex items-center justify-center text-xs text-green-500 font-semibold bg-green-100 h-6 px-2 rounded-full ml-auto">1k</span>
                </a>
            </li>
            <li class="my-px">
                <a href="{{ route('notifications') }}"
                    class="flex flex-row items-center h-10 px-3 rounded-lg hover:bg-green-400 hover:text-white {{ Request::routeIs('notifications') ? 'bg-green-500 text-white' : 'text-green-900' }}">
                    <span class="flex items-center justify-center text-lg text-white-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-bell" viewBox="0 0 16 16">
                            <path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                        </svg>
                    </span>
                    <span class="ml-3">Notifications</span>
                    <span
                        class="flex items-center justify-center text-xs text-green-500 font-semibold bg-green-100 h-6 px-2 rounded-full ml-auto">10</span>
                </a>
            </li>
            <li class="my-px">
                <a href="{{ route('settings') }}"
                    class="flex flex-row items-center h-10 px-3 rounded-lg hover:bg-green-400 hover:text-white {{ Request::routeIs('settings') ? 'bg-green-500 text-white' : 'text-green-900' }}">
                    <span class="flex items-center justify-center text-lg text-white-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-gear" viewBox="0 0 16 16">
                            <path
                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                            <path
                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                        </svg>
                    </span>
                    <span class="ml-3">Settings</span>
                </a>
            </li>
            <li class="my-px">
                <a href="#"
                    class="flex flex-row items-center h-10 px-3 rounded-lg text-green-800 hover:bg-green-400 hover:text-white">
                    <span class="flex items-center justify-center text-lg ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                            <path fill-rule="evenodd"
                                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg>
                    </span>
                    <span class="ml-3">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
