@include('components.header')
<main>
    <section class="contact-hero">
        <div class="contact__content">
            <h1 class="contact-hero__title">Nous contacter</h1>
            <svg class="contact-hero__divider" width="319" height="15" viewBox="0 0 319 15" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.5 2.5H316.5" stroke="#EDE0D4" stroke-width="5" stroke-linecap="round"/>
                <path d="M44.5 12.5L295.391 3" stroke="#EDE0D4" stroke-width="5" stroke-linecap="round"/>
            </svg>
            <p class="contact-hero__subtitle">
                Parcourez les profils de nos chiens, chats et petits compagnons en attente d'un nouveau foyer.
                Chaque animal a son histoire, son caractère et ses besoins : peut-être trouverez-vous ici votre futur
                compagnon de vie.
            </p>
        </div>
    </section>
    <div class="aside__form__container">

        <aside class="form-aside">
            <h2 class="form-aside__title">Devenir bénévole, poser une question,...</h2>
            <p class="form-aside__text">Devenez la personne qui, chaque jour, offrent de leur temps et de leur énergie pour
                prendre soin de nos animaux. Grâce à leur engagement, chaque animal reçoit l’attention et l’amour qu’il
                mérite.</p>
            <svg class="form-aside__decor" xmlns="http://www.w3.org/2000/svg" width="201" height="226" viewBox="0 0 201 226"
                 fill="none">
                <circle cx="33.1323" cy="188.138" r="80" transform="rotate(75 33.1323 188.138)" fill="#414833"/>
                <ellipse cx="40.5555" cy="65.149" rx="23" ry="30" transform="rotate(11.5979 40.5555 65.149)"
                         fill="#414833"/>
                <ellipse cx="116.359" cy="94.897" rx="23" ry="30" transform="rotate(30 116.359 94.897)" fill="#414833"/>
                <ellipse cx="150.916" cy="173.636" rx="23" ry="30" transform="rotate(61.0843 150.916 173.636)"
                         fill="#414833"/>
            </svg>
        </aside>
        <section class="contact-form">
            <form class="contact-form__form" action="#" method="post">

                <div class="contact-form__group">
                    <label class="contact-form__label" for="firstname">Votre prénom*</label>
                    <input class="contact-form__input" type="text" name="firstname" id="firstname"
                           placeholder="ex: Jane">
                </div>

                <div class="contact-form__group">
                    <label class="contact-form__label" for="lastname">Votre nom*</label>
                    <input class="contact-form__input" type="text" name="lastname" id="lastname" placeholder="ex: Doe">
                </div>

                <div class="contact-form__group">
                    <label class="contact-form__label" for="email">Votre email*</label>
                    <input class="contact-form__input" type="email" name="email" id="email"
                           placeholder="ex: janedoe@gmail.com">
                </div>

                <div class="contact-form__group">
                    <label class="contact-form__label" for="message">Votre message*</label>
                    <textarea class="contact-form__input" id="message" name="message" rows="5"
                              placeholder="ex: Je voudrais rejoindre votre équipe pour ..."></textarea>
                </div>

                <button class="cta__btn" type="submit">Envoyer le formulaire</button>

            </form>
        </section>
    </div>
</main>
@include('components.footer')
