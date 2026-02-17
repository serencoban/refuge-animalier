<article class="animal-card">
    <div class="animal-card__image-wrapper">
        <img class="animal-card__image" src="{{ asset('img/caniche.png') }}" alt="Moka">
        <span class="animal-card__status">Disponible</span>
    </div>
    <div class="animal-card__content">
        <div class="animal-card__info">
            <h3 class="animal-card__info__name">Moka</h3>
            <p class="animal-card__info__other">Caniche · 5 ans</p>
        </div>
        <a href="{{__('/animals.show')}}" class="animal-card__info__link" aria-label="Voir la fiche de Moka">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="15" viewBox="0 0 19 15">
                <path
                    d="M1 6.36401C0.447715 6.36401 0 6.81173 0 7.36401C0 7.9163 0.447715 8.36401 1 8.36401V7.36401V6.36401ZM18.7071 8.07112C19.0976 7.6806 19.0976 7.04743 18.7071 6.65691L12.3431 0.292946C11.9526 -0.0975785 11.3195 -0.0975785 10.9289 0.292946C10.5384 0.68347 10.5384 1.31664 10.9289 1.70716L16.5858 7.36401L10.9289 13.0209C10.5384 13.4114 10.5384 14.0446 10.9289 14.4351C11.3195 14.8256 11.9526 14.8256 12.3431 14.4351L18.7071 8.07112ZM1 7.36401V8.36401H18V7.36401V6.36401H1V7.36401Z"/>
            </svg>
        </a>
    </div>
</article>
