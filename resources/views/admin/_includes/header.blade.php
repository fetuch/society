<nav id="header" class="bg-white fixed w-full z-10 top-0 shadow">
    <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">
        <div class="w-1/2 pl-2 md:pl-0">
            <a class="text-gray-900 text-base xl:text-xl no-underline hover:no-underline font-bold" href="#">
                <i class="fas fa-toolbox text-accent pr-3"></i> Panel Zarządzania
            </a>
        </div>

        <div class="w-1/2 pr-0">
            <div class="flex relative inline-block float-right">
                <div class="relative text-sm">
                    <button id="userButton" class="flex items-center focus:outline-none mr-3">
                        <span class="hidden md:inline-block">User </span>
                        <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129"
                             xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                            <g>
                                <path
                                    d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"></path>
                            </g>
                        </svg>
                    </button>
                </div>

                <div class="block lg:hidden pr-4">
                    <button id="nav-toggle"
                            class="flex items-center px-3 py-2 border rounded text-gray-700 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>
                                Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <ul class="flex items-center -mx-3 list-unstyled">
            <li class="mr-3">
                <a
                    href="{{ route('admin.dashboard') }}"
                    class="block py-1 md:py-3 align-middle text-gray-700 no-underline hover:text-gray-900 {{ Request::is('admin') ? 'border-b-2' : null }}"
                >
                    <span class="pb-1 md:pb-0 text-sm">Dashboard</span>
                </a>
            </li>

            <li class="mx-3">
                <a
                    href="{{ route('admin.users.index') }}"
                    class="block py-1 md:py-3 align-middle text-gray-700 no-underline hover:text-gray-900 {{ Request::is('*users*') ? 'border-b-2' : null }}"
                >
                    <span class="pb-1 md:pb-0 text-sm">Członkowie</span>
                </a>
            </li>

            <li class="mx-3">
                <a
                    href="#"
                    class="block py-1 md:py-3 align-middle text-gray-700 no-underline hover:text-gray-900 {{ Request::is('*departments*') ? 'border-b-2' : null }}"
                >
                    <span class="pb-1 md:pb-0 text-sm">Oddziały</span>
                </a>
            </li>

            <li class="mx-3">
                <a
                    href="#"
                    class="block py-1 md:py-3 align-middle text-gray-700 no-underline hover:text-gray-900 {{ Request::is('*sections*') ? 'border-b-2' : null }}"
                >
                    <span class="pb-1 md:pb-0 text-sm">Sekcje</span>
                </a>
            </li>

            <li class="mx-3">
                <a
                    href="#"
                    class="block py-1 md:py-3 align-middle text-gray-700 no-underline hover:text-gray-900 {{ Request::is('*committees*') ? 'border-b-2' : null }}"
                >
                    <span class="pb-1 md:pb-0 text-sm">Komitety</span>
                </a>
            </li>

            <li class="mx-3">
                <a
                    href="#"
                    class="block py-1 md:py-3 align-middle text-gray-700 no-underline hover:text-gray-900 {{ Request::is('*consultative-council*') ? 'border-b-2' : null }}"
                >
                    <span class="pb-1 md:pb-0 text-sm">Rady Konsultacyjne</span>
                </a>
            </li>

            <li class="mx-3">
                <a
                    href="#"
                    class="block py-1 md:py-3 align-middle text-gray-700 no-underline hover:text-gray-900"
                >
                    <span class="pb-1 md:pb-0 text-sm">Historia Stanowisk</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
