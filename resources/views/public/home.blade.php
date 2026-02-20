@include('components.public.header')

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
            <div class="steps__flex">
                <span class="steps__number">1</span>
                <p class="steps__text">Choisissez votre compagnon</p>
            </div>
            <a class="steps__link" href="{{__('/animals.show')}}"><span class="steps__link__arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="8" viewBox="0 0 23 8">
                        <path d="M22.3536 4.03556C22.5488 3.8403 22.5488 3.52372 22.3536 3.32845L19.1716 0.146473C18.9763 -0.0487893 18.6597 -0.0487893 18.4645 0.146473C18.2692 0.341735 18.2692 0.658318 18.4645 0.85358L21.2929 3.68201L18.4645 6.51043C18.2692 6.7057 18.2692 7.02228 18.4645 7.21754C18.6597 7.4128 18.9763 7.4128 19.1716 7.21754L22.3536 4.03556ZM0 3.68201V4.18201H22V3.68201V3.18201H0V3.68201Z" fill="#443024"/>
                    </svg>
                </span>
                Consulter les fiches d’animaux</a>
        </div>
        <div class="steps__item">
            <div class="steps__flex">
                <span class="steps__number">2</span>
                <p class="steps__text">Rencontrez-le au refuge</p>
            </div>
            <a class="steps__link" href="{{__('/animals.index')}}">
                <span class="steps__link__arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="8" viewBox="0 0 23 8">
                        <path d="M22.3536 4.03556C22.5488 3.8403 22.5488 3.52372 22.3536 3.32845L19.1716 0.146473C18.9763 -0.0487893 18.6597 -0.0487893 18.4645 0.146473C18.2692 0.341735 18.2692 0.658318 18.4645 0.85358L21.2929 3.68201L18.4645 6.51043C18.2692 6.7057 18.2692 7.02228 18.4645 7.21754C18.6597 7.4128 18.9763 7.4128 19.1716 7.21754L22.3536 4.03556ZM0 3.68201V4.18201H22V3.68201V3.18201H0V3.68201Z" fill="#443024"/>
                    </svg>
                </span>
                Remplisser formulaire lié à sa fiche.</a>
        </div>
        <div class="steps__item">
            <div class="steps__flex">
                <span class="steps__number">3</span>
                <p class="steps__text">Offrez-lui un nouveau foyer</p>
            </div>
            <p class="steps__link">On vous contactera pour fixer un rendez-vous.</p>
        </div>
    </section>
    <section class="animals container">
        <h2 class="animals__title">Découvrez nos animaux</h2>
        <p class="animals__description">Parcourez les fiches de nos animaux disponibles à l’adoption. Chacun d’eux
            attend une nouvelle famille où il pourra s’épanouir et être aimé comme il le mérite</p>
        <div class="animals__grid">
            @for($i = 1; $i <=4 ; $i++)
                <x-public.animal-card></x-public.animal-card>
            @endfor
        </div>
        <a href="#" class="cta__btn">Voir tous les animaux</a>
    </section>
    <section class="about container">
        <div class="about__content">
            <div class="about__content__info">
                <div class="about__header">
                    <h2 class="about__title">Nous & nos missions</h2>
                    <svg class="about__separator" width="319" height="15" viewBox="0 0 319 15">
                        <path d="M2.5 2.5H316.5" stroke="#EDE0D4" stroke-width="5" stroke-linecap="round"/>
                        <path d="M44.5 12.5L295.391 3" stroke="#EDE0D4" stroke-width="5" stroke-linecap="round"/>
                    </svg>
                </div>
                <p class="about__text">Situé en plein cœur de la région liégeoise, notre refuge offre une seconde chance
                    à des chiens, chats et petits compagnons qui n’attendent qu’une famille aimante. Depuis plus de 10
                    ans, notre équipe de bénévoles passionnés veille chaque jour au bien-être des animaux, de leur
                    arrivée jusqu’à leur adoption.</p>
                <p class="about__text">Chaque histoire est unique, et nous mettons tout en œuvre pour leur redonner
                    confiance, santé et amour </p>
            </div>
            <a href="{{ __('/contact') }}" class="cta__btn">Rejoignez-nous</a>
        </div>
        <div class="about__media">
            <img class="about__media__image" src="{{ asset('img/mission.png') }}" alt="Refuge">
            <svg class="about__media__svg" xmlns="http://www.w3.org/2000/svg" width="234" height="233"
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

@include('components.public.footer')
