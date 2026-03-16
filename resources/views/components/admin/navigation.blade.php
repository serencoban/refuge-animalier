<nav class="admin__sidebar">
    <div class="admin__menu">
        <h2 class="admin__logo">Les Pattes Heureuses</h2>

        <div class="admin__menu-item">
            <svg class="admin__menu-icon" width="20" height="20" viewBox="0 0 20 20">
                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
            </svg>
            <a class="admin__menu-link" href="{{ __('/dashboard') }}">Dashboard</a>
        </div>

        <div class="admin__menu-item">
            <svg class="admin__menu-icon" width="20" height="20" viewBox="0 0 20 20">
                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
            </svg>
            <a class="admin__menu-link" href="{{ __('/dashboard') }}">Animaux</a>
        </div>

        <div class="admin__menu-item">
            <svg class="admin__menu-icon" width="20" height="20" viewBox="0 0 20 20">
                <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/>
            </svg>
            <a class="admin__menu-link" href="{{ __('/dashboard') }}">Bénévoles</a>
        </div>

        <div class="admin__menu-item">
            <svg class="admin__menu-icon" width="20" height="20" viewBox="0 0 20 20">
                <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"/>
                <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"/>
            </svg>
            <a class="admin__menu-link" href="{{ __('/dashboard') }}">Messages</a>
        </div>
    </div>

    <div class="admin__logout">
        <svg class="admin__logout-icon" width="20" height="20" viewBox="0 0 20 20">
            <path d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"/>
        </svg>
        <span class="admin__logout-text">Déconnexion</span>
    </div>

    <div id="menuToggle">
        <label for="menuCheckbox" class="visually-hidden">checkbox menu</label>
        <input type="checkbox"
               id="menuCheckbox"
               aria-hidden="true">
        <span></span>
        <span></span>
        <span></span>
        <div role="navigation" id="mobileMenu" class="sidenav" aria-hidden="true">
            <ul class="menu">
                <li class="menu-item"><a class="header__link-mobile" href="{{ __('/') }}">Accueil</a></li>
                <li class="menu-item"><a class="header__link-mobile" href="{{ __('/animals.index') }}">Nos animaux</a></li>
                <li class="menu-item"><a class="header__link-mobile" href="{{ __('/contact') }}">Nous contacter</a></li>
            </ul>
        </div>
    </div>
</nav>
