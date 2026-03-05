<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Refuge">
    <meta name="author" content="Coban Seren">
    <title>Refuge - Accueil</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<header class="header">
    <nav class="header__navbar">
        <a href="{{ __('/') }}" class="header__navbar__brand">
            <h2 class="header__navbar__brand__title">Les Pattes Heureuses</h2>
            <p class="header__navbar__brand__subtitle">Votre refuge Liégeois</p>
        </a>
        <ul class="header__navbar__menu">
            <li class="header__navbar__menu-item"><a class="header__link" href="{{ __('/') }}">Accueil</a></li>
            <li class="header__navbar__menu-item"><a class="header__link" href="{{ __('/animals.index') }}">Nos animaux</a></li>
            <li class="header__navbar__menu-item"><a class="header__cta__btn" href="{{ __('/contact') }}">Nous contacter</a></li>
        </ul>
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
                    <li class="menu-item"><a href="{{ __('/') }}">Accueil</a></li>
                    <li class="menu-item"><a href="{{ __('/animals.index') }}">Nos animaux</a></li>
                    <li class="menu-item"><a href="{{ __('/contact') }}">Nous contacter</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body class="body">
