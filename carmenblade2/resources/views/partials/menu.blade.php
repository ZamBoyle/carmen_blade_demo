<nav class="navbar navbar-expand-lg bg-primary mb-2" data-bs-theme="dark">
    <a class="visually-hidden-focusable" href="#content">Aller au contenu</a>
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('history') ? 'active' : '' }}"
                        href="{{ route('history') }}">Notre histoire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('goals') ? 'active' : '' }}"
                        href="{{ route('goals') }}">Nos objectifs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('support') ? 'active' : '' }}"
                        href="{{ route('support') }}">Comment nous soutenir ?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('organigram') ? 'active' : '' }}"
                        href="{{ route('organigram') }}">Organigramme de l'association</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('galery') ? 'active' : '' }}"
                        href="{{ route('galery') }}">Gallerie photo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
