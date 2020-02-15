<p class="text-base font-bold py-2 lg:pb-3 text-gray-700">Serwis PTOiTr</p>

<ul class="list-unstyled">
    <li class="py-2">
        <a
            href="{{ route('admin.articles.index') }}"
            class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*articles*') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*articles*') ? 'text-gray-900' : null}}">Aktualnosci</span>
        </a>
    </li>

    <li class="py-2">
        <a
           href="{{ route('admin.calendar.index') }}"
           class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*calendar*') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*calendar*') ? 'text-gray-900' : null}}">Wydarzenia</span>
        </a>
    </li>

    <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
        <a href="#"
           class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
            <span class="pb-1 md:pb-0 text-sm">Galerie</span>
        </a>
    </li>

    <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
        <a href="#"
           class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
            <span class="pb-1 md:pb-0 text-sm">Webinaria</span>
        </a>
    </li>

    <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
        <a href="#"
           class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
            <span class="pb-1 md:pb-0 text-sm">Wytyczne</span>
        </a>
    </li>

    <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
        <a href="#"
           class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
            <span class="pb-1 md:pb-0 text-sm">Biogramy</span>
        </a>
    </li>

    <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
        <a href="#"
           class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
            <span class="pb-1 md:pb-0 text-sm">Strony statyczne</span>
        </a>
    </li>

    <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
        <a href="#"
           class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
            <span class="pb-1 md:pb-0 text-sm">Siedlce Dizeń To Za Mało</span>
        </a>
    </li>

    <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
        <a href="#"
           class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
            <span class="pb-1 md:pb-0 text-sm">Pliki</span>
        </a>
    </li>
</ul>

<p class="text-base font-bold py-2 mt-10 lg:pb-3 text-gray-700">Towarzystwo</p>

<div
    class="w-full inset-0 hidden h-64 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 border border-gray-400 lg:border-transparent bg-white shadow lg:shadow-none lg:bg-transparent z-20"
    style="top:5em;">

    <ul class="list-unstyled">
        <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
            <a href="#"
               class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                <span class="pb-1 md:pb-0 text-sm">Zebrania</span>
            </a>
        </li>

        <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
            <a href="#"
               class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                <span class="pb-1 md:pb-0 text-sm">Korespondencje</span>
            </a>
        </li>

        <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
            <a href="#"
               class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                <span class="pb-1 md:pb-0 text-sm">Zestawienie wpłat</span>
            </a>
        </li>

        <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
            <a href="#"
               class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                <span class="pb-1 md:pb-0 text-sm">Lista wpłat</span>
            </a>
        </li>

        <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
            <a href="#"
               class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                <span class="pb-1 md:pb-0 text-sm">Wysokosc składek</span>
            </a>
        </li>
    </ul>
</div>

<p class="text-base font-bold py-2 mt-10 lg:pb-3 text-gray-700">ACL</p>

<div
    class="w-full inset-0 hidden h-64 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 border border-gray-400 lg:border-transparent bg-white shadow lg:shadow-none lg:bg-transparent z-20"
    style="top:5em;">

    <ul class="list-unstyled">
        <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
            <a href="#"
               class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                <span class="pb-1 md:pb-0 text-sm">Role</span>
            </a>
        </li>

        <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
            <a href="#"
               class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                <span class="pb-1 md:pb-0 text-sm">Uprawnienia</span>
            </a>
        </li>
    </ul>
</div>
