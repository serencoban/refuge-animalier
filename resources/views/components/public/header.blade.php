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
            <li class="header__navbar__menu-item"><a class="header__link" href="{{ __('/animals') }}">Nos animaux</a></li>
            <li class="header__navbar__menu-item"><a class="header__cta__btn" href="{{ __('/contact') }}">Nous contacter</a></li>
        </ul>
        <ul id="burgerMenu" class="mobile__nav-bar__menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="41" height="17" viewBox="0 0 41 17" fill="none">
                <line x1="1.5" y1="1.5" x2="39.5" y2="1.5" stroke="#414833" stroke-width="3" stroke-linecap="round"/>
                <line x1="1.5" y1="8.5" x2="39.5" y2="8.5" stroke="#414833" stroke-width="3" stroke-linecap="round"/>
                <line x1="1.5" y1="15.5" x2="39.5" y2="15.5" stroke="#414833" stroke-width="3" stroke-linecap="round"/>
            </svg>
        </ul>
    </nav>
</header>

<body class="body">
