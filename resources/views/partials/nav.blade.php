 {{-- nav --}}
    <nav class="flex items-center justify-between flex-wrap bg-purple-500/75 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <span class="font-semibold text-xl tracking-tight">
                @yield('h1', 'Inicio')
            </span>
        </div>
        <div class="w-full sm:hidden flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow text-center">
                <a
                    href="{{ route('home') }}"
                    class="block mt-4 lg:inline-block lg:mt-0 hover:text-white mr-4
                    {{request()->routeIs() ? 'active' : ''}}
                    ">
                    Inicio
                </a>
                <a
                    href="{{ route('users.index') }}"
                    class="block mt-4 lg:inline-block lg:mt-0 hover:text-white mr-4
                    {{ request()->routeIs() ? 'active' : ''}}
                    ">
                    Usuarios
                </a>
                {{-- <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white-300 hover:text-white">
                    Blog
                </a> --}}
            </div>

        </div>
    </nav>
