<p class="text-base font-bold pb-3 text-gray-700">Towarzystwo</p>

<ul class="list-unstyled">
    <li class="py-2">
        <a
            href=""
            class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*declarations*') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*declarations*') ? 'text-gray-900' : null}}">Deklaracje</span>
        </a>
    </li>

    <li class="py-2">
        <a
            href=""
            class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*meetings*') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*meetings*') ? 'text-gray-900' : null}}">Zebrania</span>
        </a>
    </li>

    <li class="py-2">
        <a
            href=""
            class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*correspondences*') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*correspondences*') ? 'text-gray-900' : null}}">Korespondencje</span>
        </a>
    </li>

    <li class="py-2">
        <a
            href="{{ route('admin.membership-payments-dashboard') }}"
            class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*membership-payments/dashboard') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*membership-payments/dashboard') ? 'text-gray-900' : null }}">Zestawienie wpłat</span>
        </a>
    </li>

    <li class="py-2">
        <a
            href="{{ route('admin.membership-payments.index') }}"
            class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*membership-payments') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*membership-payments') ? 'text-gray-900' : null }}">Lista wpłat</span>
        </a>
    </li>

    <li class="py-2">
        <a
            href="{{ route('admin.membership-fees.index') }}"
            class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*membership-fees*') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*membership-fees*') ? 'text-gray-900' : null }}">Wysokość składek</span>
        </a>
    </li>
</ul>

<p class="text-base font-bold pb-3 text-gray-700 mt-10">Serwis PTOiTr</p>

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

    <li class="py-2">
        <a
           href=""
           class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*galleries*') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*galleries*') ? 'text-gray-900' : null}}">Galerie</span>
        </a>
    </li>

    <li class="py-2">
        <a
           href=""
           class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*webinars*') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*webinars*') ? 'text-gray-900' : null}}">Webinary</span>
        </a>
    </li>

    <li class="py-2">
        <a
           href=""
           class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*guidelines*') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*guidelines*') ? 'text-gray-900' : null}}">Wytyczne</span>
        </a>
    </li>

    <li class="py-2">
        <a
           href=""
           class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*biograms*') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*biograms*') ? 'text-gray-900' : null}}">Biogramy</span>
        </a>
    </li>

    <li class="py-2">
        <a
           href=""
           class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*pages*') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*pages*') ? 'text-gray-900' : null}}">Strony statyczne</span>
        </a>
    </li>

    <li class="py-2">
        <a
           href=""
           class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*pages*') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*pages*') ? 'text-gray-900' : null}}">Strony statyczne</span>
        </a>
    </li>

    <li class="py-2">
        <a
           href=""
           class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*pages*') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*pages*') ? 'text-gray-900' : null}}">Siedlce Dizeń To Za Mało</span>
        </a>
    </li>

    <li class="py-2">
        <a
           href=""
           class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*pages*') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*pages*') ? 'text-gray-900' : null }}">Pliki</span>
        </a>
    </li>
</ul>

<p class="text-base font-bold pb-3 text-gray-700 mt-10">System</p>

<ul class="list-unstyled">
    <li class="py-2">
        <a
            href=""
            class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*roles*') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*roles*') ? 'text-gray-900' : null}}">Role</span>
        </a>
    </li>

    <li class="py-2">
        <a
            href=""
            class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*permissions*') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*permissions*') ? 'text-gray-900' : null}}">Uprawnienia</span>
        </a>
    </li>

    <li class="py-2">
        <a
            href=""
            class="block pl-4 text-gray-700 no-underline hover:text-gray-900 border-l-4 {{ Request::is('*mailboxes*') ? null : 'border-transparent' }}"
        >
            <span class="text-sm {{ Request::is('*mailboxes*') ? 'text-gray-900' : null}}">Skrzynki</span>
        </a>
    </li>
</ul>
