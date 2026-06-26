@include('components.admin.navigations.header')
<main class="admin">
    @include('components.admin.navigations.navigation')
    <div class="animal">
        @include('components.admin.navigations.topbar')
        <div class="animal__card">
            <section class="animal__left-side">
                <h2>Informations Générales</h2>
                <figure>
                    <img
                        class="animal-photo"
                        src="https://images.unsplash.com/photo-1591769225440-811ad7d6eab3?w=800&q=80"
                        alt="Moka, un caniche doré de 3 ans, photographié en intérieur"
                        width="800"
                        height="340"
                    />
                    <figcaption class="sro">Photo de Moka</figcaption>
                </figure>
                <dl class="info-list">
                    <dt>Nom</dt>
                    <dd>Moka</dd>

                    <dt>Espèce</dt>
                    <dd>Chien</dd>

                    <dt>Race</dt>
                    <dd>Caniche</dd>

                    <dt>Âge</dt>
                    <dd>3 ans</dd>

                    <dt>Pelage</dt>
                    <dd>Doré</dd>
                </dl>
                <div>
                    <span class="caracteres-label">Caractères</span>
                    <p class="caracteres-text">
                        C'est un chien sociable qui s'entend bien avec les enfants et les autres animaux.
                        Il adore les promenades et jouer à la balle.<br />
                        Idéal pour une famille avec un jardin, il a besoin d'exercice quotidien et d'attention,
                        mais en retour, il vous offrira une loyauté et un amour sans limites.
                    </p>
                </div>
                <div>
                    <span class="vaccins-label">Vaccins</span>
                    <ul class="tag-list">
                        <li><span class="tag">Rage</span></li>
                        <li><span class="tag">Parvovirose</span></li>
                        <li><span class="tag">Maladie de Carré</span></li>
                    </ul>
                </div>
            </section>
            <aside>
                <div class="card animal__status">
                    <h2 class="card__title">Status</h2>
                    <span class="status-badge" role="status">En attente</span>
                </div>

                <div class="animal__adopter">
                    <h2 class="card__title">Suivi d'adoption</h2>
                    <dl class="adoption-info">
                        <div class="adoption-field">
                            <dt>Nom</dt>
                            <dd>Sarah Smith</dd>
                        </div>

                        <div class="adoption-field">
                            <dt>Email</dt>
                            <dd><a href="mailto:sarahsmith@gmail.com">sarahsmith@gmail.com</a></dd>
                        </div>

                        <div class="adoption-field">
                            <dt>Numéro</dt>
                            <dd><a href="tel:+3271324508">+3271324508</a></dd>
                        </div>

                        <div class="adoption-field">
                            <dt>Description</dt>
                            <dd>Bonjour, serait-il possible de rencontrer Moka le lundi 13/06 vers 13h30&nbsp;?</dd>
                        </div>
                    </dl>
                </div>

                <div class="card animal__note">
                    <h2 class="card__title">Notes internes</h2>
                    <p class="notes-description">Ces informations ne sont pas visibles pour l'utilisateur.</p>
                    <label for="animal-notes" class="sro">Notes internes concernant Moka</label>
                    <textarea
                        id="animal-notes"
                        class="notes-textarea"
                        rows="4"
                        aria-describedby="notes-desc"
                        placeholder="Ajouter une note…"
                    ></textarea>
                </div>
            </aside>
        </div>
    </div>
</main>
