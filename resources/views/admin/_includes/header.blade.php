<nav id="header" class="bg-white fixed w-full z-10 top-0 shadow">
    <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">
        <div class="w-1/2 pl-2 md:pl-0">
            <a class="text-gray-900 text-base xl:text-xl no-underline hover:no-underline font-bold"
               href="{{ route('admin.dashboard') }}">
                <i class="fas fa-toolbox text-accent pr-3"></i> Panel Zarządzania
            </a>
        </div>

        <div class="w-1/2 pr-0">
            <div class="flex relative inline-block float-right">
                <dropdown align="right" width="200px">
                    <template v-slot:trigger>
                        <button class="flex items-center text-default text-sm focus:outline-none">
                            {{ auth()->user()->email }}
                        </button>
                    </template>

                    <template v-slot:default>
                        <a
                            class="dropdown-menu-link"
                            href="{{ route('homepage') }}"
                        >
                            Strona główna
                        </a>
                        <span
                            class="dropdown-menu-link cursor-pointer"
                            onclick="javascript: document.querySelector('#logout-form').submit()"
                        >
                            Wyloguj
                        </span>
                        <form id="logout-form" method="POST" action="/logout">
                            @csrf
                        </form>
                    </template>
                </dropdown>
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
                    href="{{ route('admin.departments.index') }}"
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
