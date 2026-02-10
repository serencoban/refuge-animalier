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

<body class="body">
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

<main class="main">
    <section class="hero">
        <div class="hero__content">
            <h1 class="hero__title">Les Pattes Heureuses</h1>
            <p class="hero__text">
                Nous accueillons chaque année des dizaines d'animaux dans le besoin.
                Découvrez-les et aidez-les à trouver un nouveau foyer.
            </p>
            <a href="{{ __('/contact') }}" class="cta__btn">Nous contacter</a>
        </div>
    </section>
    <section class="steps">
        <div class="steps__item">
            <span class="steps__number">1</span>
            <p class="steps__text">Choisissez votre compagnon</p>
            <a class="steps__link" href="#"><span><svg xmlns="http://www.w3.org/2000/svg" width="23" height="8" viewBox="0 0 23 8" fill="none">
  <path d="M22.3536 4.03556C22.5488 3.8403 22.5488 3.52372 22.3536 3.32845L19.1716 0.146473C18.9763 -0.0487893 18.6597 -0.0487893 18.4645 0.146473C18.2692 0.341735 18.2692 0.658318 18.4645 0.85358L21.2929 3.68201L18.4645 6.51043C18.2692 6.7057 18.2692 7.02228 18.4645 7.21754C18.6597 7.4128 18.9763 7.4128 19.1716 7.21754L22.3536 4.03556ZM0 3.68201V4.18201H22V3.68201V3.18201H0V3.68201Z" fill="#443024"/>
</svg></span>
                Consulter les fiches d’animaux</a>
        </div>
        <div class="steps__item">
            <span class="steps__number">2</span>
            <p class="steps__text">Rencontrez-le au refuge</p>
            <a class="steps__link" href="#"><span><svg xmlns="http://www.w3.org/2000/svg" width="23" height="8" viewBox="0 0 23 8" fill="none">
  <path d="M22.3536 4.03556C22.5488 3.8403 22.5488 3.52372 22.3536 3.32845L19.1716 0.146473C18.9763 -0.0487893 18.6597 -0.0487893 18.4645 0.146473C18.2692 0.341735 18.2692 0.658318 18.4645 0.85358L21.2929 3.68201L18.4645 6.51043C18.2692 6.7057 18.2692 7.02228 18.4645 7.21754C18.6597 7.4128 18.9763 7.4128 19.1716 7.21754L22.3536 4.03556ZM0 3.68201V4.18201H22V3.68201V3.18201H0V3.68201Z" fill="#443024"/>
</svg></span>
                Prendre rendez-vous</a>
        </div>
        <div class="steps__item">
            <span class="steps__number">3</span>
            <p class="steps__text">Offrez-lui un nouveau foyer</p>
            <a class="steps__link" href="#">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="23" height="8" viewBox="0 0 23 8" fill="none">
  <path d="M22.3536 4.03556C22.5488 3.8403 22.5488 3.52372 22.3536 3.32845L19.1716 0.146473C18.9763 -0.0487893 18.6597 -0.0487893 18.4645 0.146473C18.2692 0.341735 18.2692 0.658318 18.4645 0.85358L21.2929 3.68201L18.4645 6.51043C18.2692 6.7057 18.2692 7.02228 18.4645 7.21754C18.6597 7.4128 18.9763 7.4128 19.1716 7.21754L22.3536 4.03556ZM0 3.68201V4.18201H22V3.68201V3.18201H0V3.68201Z" fill="#443024"/>
</svg></span>
                Finaliser l’adoption</a>
        </div>
    </section>
    <section class="animals container">
        <h2 class="animals__title">Découvrez nos animaux</h2>
        <p class="animals__description">Parcourez les fiches de nos animaux disponibles à l’adoption.</p>
        <div class="animals__grid">
            <article class="animal-card">
                <div class="animal-card__image-wrapper">
                    <img class="animal-card__image" src="" alt="">
                    <span class="animal-card__status">Disponible</span>
                </div>
                <div class="animal-card__content">
                    <div class="animal-card__info">
                        <h3 class="animal-card__name">Moka</h3>
                        <p class="animal-card__meta">Caniche · 5 ans</p>
                    </div>
                    <a href="#" class="animal-card__link" aria-label="Voir la fiche">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="15" viewBox="0 0 19 15" fill="none">
                            <path d="M1 6.36401C0.447715 6.36401 0 6.81173 0 7.36401C0 7.9163 0.447715 8.36401 1 8.36401V7.36401V6.36401ZM18.7071 8.07112C19.0976 7.6806 19.0976 7.04743 18.7071 6.65691L12.3431 0.292946C11.9526 -0.0975785 11.3195 -0.0975785 10.9289 0.292946C10.5384 0.68347 10.5384 1.31664 10.9289 1.70716L16.5858 7.36401L10.9289 13.0209C10.5384 13.4114 10.5384 14.0446 10.9289 14.4351C11.3195 14.8256 11.9526 14.8256 12.3431 14.4351L18.7071 8.07112ZM1 7.36401V8.36401H18V7.36401V6.36401H1V7.36401Z" fill="#676731"/>
                        </svg>
                    </a>
                </div>
            </article>
        </div>
        <a href="#" class="cta__btn">Voir tous les animaux</a>
    </section>
    <section class="about container">
        <div class="about__content">
            <div class="about__header">
                <h2 class="about__title">Nous & nos missions</h2>
                <svg class="about__separator" width="319" height="15" viewBox="0 0 319 15">
                    <path d="M2.5 2.5H316.5" stroke="#EDE0D4" stroke-width="5" stroke-linecap="round"/>
                    <path d="M44.5 12.5L295.391 3" stroke="#EDE0D4" stroke-width="5" stroke-linecap="round"/>
                </svg>
            </div>
            <p class="about__text">Situé en plein cœur de la région liégeoise, notre refuge offre une seconde chance…</p>
            <p class="about__text">Chaque histoire est unique, et nous mettons tout en œuvre pour leur redonner confiance.</p>
            <a href="{{ __('/contact') }}" class="cta__btn">Rejoignez-nous</a>
        </div>
        <div class="about__media">
            <img class="about__image" src="/storage/mission-dog.png" alt="Refuge">
            <svg class="about__image__svg" xmlns="http://www.w3.org/2000/svg" width="234" height="233"
                 viewBox="0 0 234 233" fill="none">
                <circle cx="154" cy="152.174" r="80" fill="#EDE0D4"/>
                <ellipse cx="37.1228" cy="113.172" rx="23" ry="30" transform="rotate(-63.4021 37.1228 113.172)"
                         fill="#EDE0D4"/>
                <ellipse cx="85.4767" cy="47.6509" rx="23" ry="30" transform="rotate(-45 85.4767 47.6509)"
                         fill="#EDE0D4"/>
                <ellipse cx="170.477" cy="34.6509" rx="23" ry="30" transform="rotate(-13.9157 170.477 34.6509)"
                         fill="#EDE0D4"/>
            </svg>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="footer__container">
        <div class="footer__brand">
            <h2 class="footer__title">Les Pattes Heureuses</h2>
            <p class="footer__text">Rue du Quelquechose 18<br>4500 Ville</p>
            <p class="footer__text">+32 471 32 63 08</p>
            <p class="footer__text">Du lundi au samedi de 10h à 18h</p>
        </div>
        <nav class="footer__nav">
            <h3 class="footer__nav-title">Navigation</h3>
            <ul class="footer__menu">
                <li><a class="footer__link" href="{{ __('/') }}">Accueil</a></li>
                <li><a class="footer__link" href="{{ __('/animals') }}">Nos animaux</a></li>
                <li><a class="footer__link" href="{{ __('/contact') }}">Nous contacter</a></li>
            </ul>
        </nav>
    </div>
</footer>

</body>
</html>
