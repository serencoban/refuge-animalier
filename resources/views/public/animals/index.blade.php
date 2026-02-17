@include('components.public.header')
<section class="contact-hero ">
    <div class="contact__content">
        <h1 class="contact-hero__title">Nos animaux</h1>
        <svg class="contact-hero__divider" width="319" height="15" viewBox="0 0 319 15"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M2.5 2.5H316.5" stroke="#EDE0D4" stroke-width="5" stroke-linecap="round"/>
            <path d="M44.5 12.5L295.391 3" stroke="#EDE0D4" stroke-width="5" stroke-linecap="round"/>
        </svg>
        <p class="contact-hero__subtitle">
            Parcourez les profils de nos chiens, chats et petits compagnons en attente d’un nouveau foyer. Chaque animal a son histoire, son caractère et ses besoins : peut-être trouverez-vous ici votre futur compagnon de vie.
        </p>
    </div>
</section>
<section class="container">
    <div class="animals-filters">
        <p class="animals-filters__label">Filtrer par:</p>

        <div class="animals-filters__group">
            <label for="age" class="animals-filters__group-label">Âge</label>
            <select id="age" class="animals-filters__group-select">
                <option value="">Tous les âges</option>
                <option value="0-1">0-1 an</option>
                <option value="1-3">1-3 ans</option>
                <option value="3-5">3-5 ans</option>
                <option value="5+">5+ ans</option>
            </select>
        </div>

        <div class="animals-filters__group">
            <label for="espece" class="animals-filters__group-label">Espèce</label>
            <select id="espece" class="animals-filters__group-select">
                <option value="">Toutes les espèces</option>
                <option value="chien">Chien</option>
                <option value="chat">Chat</option>
                <option value="lapin">Lapin</option>
                <option value="autre">Autre</option>
            </select>
        </div>

        <div class="animals-filters__group">
            <label for="pelage" class="animals-filters__group-label">Pelage</label>
            <select id="pelage" class="animals-filters__group-select">
                <option value="">Tous les pelages</option>
                <option value="court">Court</option>
                <option value="mi-long">Mi-long</option>
                <option value="long">Long</option>
                <option value="boucle">Bouclé</option>
            </select>
        </div>

        <div class="animals-filters__group">
            <label for="statut" class="animals-filters__group-label">Statut</label>
            <select id="statut" class="animals-filters__group-select">
                <option value="">Tous les statuts</option>
                <option value="disponible">Disponible</option>
                <option value="reserve">Réservé</option>
                <option value="en-cours">En cours</option>
            </select>
        </div>
        <button type="submit" class="cta__btn">Appliquer</button>
    </div>

    <div class="animals-filters" style="margin-top: 20px; padding: 16px 32px;">
        <div class="filters-results">
            <span>12 animaux trouvés</span>
        </div>
    </div>
    <div class="animals__grid">
        @for($i = 1; $i <=8 ; $i++)
            <x-public.animal-card></x-public.animal-card>
        @endfor
    </div>
</section>
@include('components.public.footer')
