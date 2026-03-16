@include('components.admin.header')
<main class="admin">
    @include('components.admin.navigation')
    <div class="dashboard">
        <div class="dashboard__header">
            <h2 class="dashboard__title">Bonjour Elise !</h2>
            <div class="dashboard__actions">
                <div>
                    <label for="">Trier par</label>
                    <select>
                        <option value="today">Aujourd'hui</option>
                        <option value="week">Cette semaine</option>
                        <option value="month">Ce mois-ci</option>
                        <option value="three-month">Les 3 derniers mois</option>
                        <option value="year">Cette année</option>
                    </select>
                </div>
                <a class="dashboard__action-link" href="#">
                    Exporter un rapport
                </a>
            </div>
        </div>


        <div class="dashboard__stats">
            <section class="stats">

                <div class="stats__card">
                    <div class="stats__content">
                        <h3 class="stats__title">Animaux accueillis</h3>
                        <span class="stats__value">23</span>
                    </div>
                    <span class="stats__icon">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                            <path d="M4.5 11a2 2 0 100-4 2 2 0 000 4zM9 7a2 2 0 100-4 2 2 0 000 4zM15 7a2 2 0 100-4 2 2 0 000 4zM19.5 11a2 2 0 100-4 2 2 0 000 4zM12 13c-3.3 0-6 2-6 5 0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2 0-3-2.7-5-6-5z"/>
                        </svg>
                    </span>
                </div>

                <div class="stats__card">
                    <div class="stats__content">
                        <h3 class="stats__title">Adoptions réussies</h3>
                        <span class="stats__value">3</span>
                    </div>
                    <span class="stats__icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2"/>
                            <path d="M9 12l2 2 4-4"/>
                        </svg>
                    </span>
                </div>

                <div class="stats__card">
                    <div class="stats__content">
                        <h3 class="stats__title">Animaux encore au refuge</h3>
                        <span class="stats__value">10</span>
                    </div>
                    <span class="stats__icon stats__icon--home">
                        <svg width="22" height="22" viewBox="0 0 24 24">
                            <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                        </svg>
                    </span>
                </div>

            </section>
        </div>
        
        <div class="dashboard__adoptions">
            <section class="dashboard__adoption-requests">
                <h3 class="dashboard__section-title">
                    Demandes d'adoption
                    <span class="section-badge">3</span>
                </h3>
                <table class="adoption-table">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Adopteur</th>
                        <th>Date</th>
                        <th>Statut</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Moka</td>
                        <td>Sarah Smith</td>
                        <td>05/11/25</td>
                        <td><span class="status-badge status-badge--waiting">En attente</span></td>
                    </tr>
                    <tr>
                        <td>Moka</td>
                        <td>Sarah Smith</td>
                        <td>05/11/25</td>
                        <td><span class="status-badge status-badge--closed">Clôturée</span></td>
                    </tr>
                    <tr>
                        <td>Moka</td>
                        <td>Sarah Smith</td>
                        <td>05/11/25</td>
                        <td><span class="status-badge status-badge--closed">Clôturée</span></td>
                    </tr>
                    <tr>
                        <td>Moka</td>
                        <td>Sarah Smith</td>
                        <td>05/11/25</td>
                        <td><span class="status-badge status-badge--progress">En cours</span></td>
                    </tr>
                    </tbody>
                </table>
            </section>

            <section class="dashboard__validation">
                <h3 class="dashboard__section-title">
                    Fiches à valider
                    <span class="section-badge">3</span>
                </h3>
                <div class="fiche-item">Fiche de Moka (envoyé par Adrien)</div>
                <div class="fiche-item">Fiche de Moka (envoyé par Adrien)</div>
                <a href="#" class="validation-footer">Voir toutes les fiches</a>
            </section>
        </div>


        <div class="dashboard__messages">
            <section class="dashboard__notifications">
                <h3 class="dashboard__section-title">
                    Notifications
                    <span class="section-badge">3</span>
                </h3>
                <div class="notification-item">Fiche de Moka (envoyé par Adrien)</div>
                <div class="notification-item">Fiche de Moka (envoyé par Adrien)</div>
            </section>

            <section class="dashboard__recent-messages">
                <div class="messages-header">
                    <h3 class="dashboard__section-title">Messages récentes</h3>
                    <a href="#" class="btn-new-message">+ Nouveau message</a>
                </div>

                <div class="message-item">
                    <p class="message-item__sender">Adrien</p>
                    <p class="message-item__body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget eros eget magna accumsan mollis.</p>
                    <span class="message-item__time">Il y a 5 min</span>
                </div>

                <div class="message-item">
                    <p class="message-item__sender">Adrien</p>
                    <p class="message-item__body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget eros eget magna accumsan mollis.</p>
                    <span class="message-item__time">Il y a 5 min</span>
                </div>
            </section>
        </div>
    </div>
</main>
