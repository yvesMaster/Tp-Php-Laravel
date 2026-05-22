<aside>

    <a class="{{ request()->routeIs('dashboard.index') ? 'active' : '' }}"
       href="{{ route('dashboard.index') }}">
        Dashboard
    </a>

    <a class="{{ request()->routeIs('dashboard.articles') ? 'active' : '' }}"
       href="{{ route('dashboard.articles') }}">
        Articles
    </a>

    <a class="{{ request()->routeIs('dashboard.categories') ? 'active' : '' }}"
       href="{{ route('dashboard.categories') }}">
        Catégories
    </a>

    <a class="{{ request()->routeIs('dashboard.users') ? 'active' : '' }}"
       href="{{ route('dashboard.users') }}">
        Utilisateurs
    </a>

    <a class="{{ request()->routeIs('dashboard.settings') ? 'active' : '' }}"
       href="{{ route('dashboard.settings') }}">
        Paramètres
    </a>

    <a class="{{ request()->routeIs('dashboard.comments') ? 'active' : '' }}"
       href="{{ route('dashboard.comments') }}">
        commentaires
    </a>

</aside>