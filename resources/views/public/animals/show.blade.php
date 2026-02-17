@include('components.public.header')
<main>
    <section class="animal-info container">
        <div class="animal-info__image">
            <img class="animal-info__image-img" src="{{ asset('img/caniche.png') }}" alt="Moka">
            <span class="animal-info__status">Disponible</span>
        </div>
        <div class="animal-info__details">
            <div class="details__main">
                <div class="details__main-left">
                    <p class="details__main__name">Moka</p>
                    <p class="details__main__race">Caniche</p>
                </div>
                <div class="details__main-right">
                    <span class="details__main__share">Partager</span>
                </div>
            </div>
            <p class="animal-info__para">C'est un chien sociable qui s'entend bien avec les enfants et les autres
                animaux. Il adore les promenades et jouer à la balle.</p>
            <p class="animal-info__para">Idéal pour une famille avec un jardin, il a besoin d'exercice quotidien et
                d'attention, mais en retour, il vous offrira une loyauté et un amour sans limites.</p>
            <div class="animal-infos">
                <p class="animal-infos__title">Informations Générales</p>
                <div class="animal-infos__container">
                    <div class="animal-infos__div">
                        <span class="animal-infos__first">Age</span>
                        <span class="animal-infos__second">3 ans</span>
                    </div>
                    <div class="animal-infos__div">
                        <span class="animal-infos__first">Sexe</span>
                        <span class="animal-infos__second">Mâle</span>
                    </div>
                    <div class="animal-infos__div">
                        <span class="animal-infos__first">Pelage</span>
                        <span class="animal-infos__second">Doré</span>
                    </div>
                    <div class="animal-infos__div">
                        <span class="animal-infos__first">Vaccins</span>
                        <span class="animal-infos__second">Rage - Parvovirus</span>
                    </div>
                </div>
                <svg class="animal-infos__svg" xmlns="http://www.w3.org/2000/svg" width="224" height="162"
                     viewBox="0 0 224 162">
                    <g clip-path="url(#clip0_693_2899)">
                        <circle cx="166" cy="152.174" r="80" fill="#554D2B" fill-opacity="0.38"/>
                        <ellipse cx="49.1228" cy="113.172" rx="23" ry="30" transform="rotate(-63.4021 49.1228 113.172)"
                                 fill="#554D2B" fill-opacity="0.38"/>
                        <ellipse cx="97.4767" cy="47.6509" rx="23" ry="30" transform="rotate(-45 97.4767 47.6509)"
                                 fill="#554D2B" fill-opacity="0.38"/>
                        <ellipse cx="182.477" cy="34.6509" rx="23" ry="30" transform="rotate(-13.9157 182.477 34.6509)"
                                 fill="#554D2B" fill-opacity="0.38"/>
                    </g>

                </svg>
            </div>
        </div>
    </section>
    <section class="container">
        <form class="form__appointment" method="GET" action="#">
            <div class="form__appointment__details">
                <h2 class="form__appointment__title">Je voudrais planifier une rencontre</h2>
                <small class="form__appointment__small">Remplissez le formulaire pour prendre un rendez-vous</small>
                <div class="form__appointment__flex">
                    <div class="rdv__input__container">
                        <label class="rdv__label" for="lastname">Nom*</label>
                        <input class="lastname__input" type="text" name="lastname" id="lastname"
                               placeholder="ex: Coban">
                    </div>
                    <div class="rdv__input__container">
                        <label class="rdv__label" for="firstname">Prenom*</label>
                        <input class="firstname__input" type="text" name="firstname" id="firstname">
                    </div>

                </div>
                <div class="form__appointment__flex">
                    <div class="rdv__input__container">
                        <label class="rdv__label" for="email">Email*</label>
                        <input class="email__input" type="email" name="email" id="email">
                    </div>
                    <div class="rdv__input__container">
                        <label class="rdv__label" for="tel">Numéro de téléphone*</label>
                        <input class="tel__input" type="tel" name="name" id="name">
                    </div>

                </div>
                <div class="rdv__input__container">
                    <label for="desc">Description*</label>
                    <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
                </div>
                <button class="cta__btn" type="submit">Envoyer le formulaire</button>
            </div>
            <div class="form__image__container">
                <img class="form__image" src="{{ asset('img/bunny.png') }}" alt="">
            </div>
        </form>
    </section>
    <section class="animals container">
        <h2 class="animals__title">Découvrez nos animaux</h2>
        <p class="animals__description">Parcourez les fiches de nos animaux disponibles à l’adoption. Chacun d’eux
            attend une nouvelle famille où il pourra s’épanouir et être aimé comme il le mérite</p>
        <div class="animals__grid">
            @for($i = 1; $i <=4; $i++)
                <x-public.animal-card></x-public.animal-card>
            @endfor
        </div>
        <a href="#" class="cta__btn">Voir tous les animaux</a>
    </section>
</main>
@include('components.public.footer')
