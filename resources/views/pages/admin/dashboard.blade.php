@include('components.admin.header')
<main class="admin">
    @include('components.admin.navigation')
    <div class="dashboard">
        @include('components.admin.topbar')
        <div class="dashboard__container">
            <div class="dashboard__header">
                <h2 class="dashboard__title">Bonjour Elise !</h2>
                <div class="dashboard__action">
                    <div class="select__container">
                        <label for="">Trier par</label>
                        <div class="select">
                            <select>
                                <option value="today">Aujourd'hui</option>
                                <option value="week">Cette semaine</option>
                                <option value="month">Ce mois-ci</option>
                                <option value="three-month">Les 3 derniers mois</option>
                                <option value="year">Cette année</option>
                            </select>
                        </div>
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
                        <span class="stats__icon stats__icon--paw">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
  <path d="M21.6834 17.2514C21.2497 15.6791 20.3121 14.2926 19.0145 13.3045C17.7169 12.3164 16.131 11.7812 14.5 11.7812C12.869 11.7813 11.283 12.3164 9.98544 13.3045C8.68784 14.2926 7.75026 15.6791 7.31654 17.2514L6.28297 20.9982C6.09739 21.6709 6.0697 22.3774 6.20206 23.0626C6.33442 23.7478 6.62326 24.3931 7.04604 24.9483C7.46882 25.5035 8.01413 25.9536 8.63944 26.2634C9.26476 26.5732 9.95318 26.7344 10.651 26.7344H18.3489C19.0468 26.7344 19.7352 26.5732 20.3605 26.2634C20.9859 25.9536 21.5312 25.5035 21.9539 24.9483C22.3767 24.3931 22.6656 23.7478 22.7979 23.0626C22.9303 22.3774 22.9026 21.6709 22.717 20.9982L21.6834 17.2514ZM20.512 23.85C20.2594 24.1844 19.9325 24.4553 19.557 24.6414C19.1816 24.8274 18.768 24.9235 18.3489 24.9219H10.651C10.2323 24.9219 9.81925 24.8252 9.44406 24.6393C9.06886 24.4534 8.74167 24.1834 8.488 23.8503C8.23432 23.5171 8.06102 23.1299 7.98161 22.7188C7.90219 22.3077 7.91881 21.8838 8.03016 21.4801L9.06374 17.7334C9.39197 16.5436 10.1015 15.4943 11.0835 14.7465C12.0655 13.9987 13.2657 13.5938 14.5 13.5938C15.7343 13.5938 16.9345 13.9987 17.9165 14.7465C18.8985 15.4943 19.608 16.5436 19.9362 17.7334L20.9698 21.4801C21.0828 21.8836 21.1002 22.3079 21.0208 22.7193C20.9413 23.1306 20.7671 23.5179 20.512 23.8503V23.85Z" fill="black"/>
  <path d="M8.27518 13.045C8.43287 12.0594 8.22375 11.0044 7.68612 10.0734C7.14849 9.14249 6.33921 8.43386 5.40707 8.07764C4.40884 7.69639 3.39067 7.75711 2.53913 8.24853C0.846313 9.22592 0.400835 11.6348 1.54628 13.6183C2.08374 14.5493 2.89308 15.2581 3.82521 15.6141C4.23813 15.7751 4.67703 15.859 5.12019 15.8617C5.67229 15.8637 6.21505 15.7193 6.69315 15.4432C7.54418 14.9517 8.10606 14.1 8.27518 13.045ZM6.48534 12.7585C6.40434 13.2642 6.15626 13.6602 5.78679 13.8735C5.41733 14.0868 4.95038 14.1036 4.47177 13.9209C3.92728 13.713 3.44572 13.2837 3.11573 12.7121C2.48136 11.6133 2.63214 10.2879 3.44538 9.81821C3.64982 9.70219 3.88135 9.64243 4.1164 9.645C4.33689 9.64728 4.55511 9.68984 4.76029 9.77058C5.30478 9.97862 5.78634 10.4079 6.11633 10.9795C6.44632 11.551 6.57732 12.183 6.48534 12.7585Z" fill="black"/>
  <path d="M8.47149 9.28999C9.11504 9.80445 9.84995 10.0724 10.5931 10.0723C10.8157 10.0722 11.0377 10.0483 11.2552 10.0009C13.1653 9.58565 14.3234 7.42696 13.8369 5.18881C13.6086 4.13835 13.0537 3.21675 12.2743 2.59365C11.4397 1.92642 10.4511 1.67386 9.49057 1.88275C7.58053 2.29793 6.4224 4.45662 6.90889 6.69477C7.13721 7.74528 7.69217 8.66688 8.47149 9.28999ZM9.8755 3.6539C9.96357 3.63491 10.0534 3.62542 10.1435 3.62558C10.4804 3.62558 10.8269 3.75739 11.1425 4.00966C11.5977 4.37358 11.9256 4.92917 12.0657 5.57413C12.3353 6.81428 11.7879 8.03052 10.8702 8.23001C10.4533 8.32064 10.0033 8.19444 9.60334 7.87459C9.14812 7.51062 8.82023 6.95503 8.6801 6.31012C8.41043 5.06964 8.95792 3.85339 9.8755 3.6539Z" fill="black"/>
  <path d="M26.4608 8.24853C25.6096 7.75711 24.591 7.69639 23.5929 8.07764C22.6608 8.43374 21.8514 9.14249 21.314 10.0734C20.7765 11.0044 20.5673 12.0596 20.7249 13.045C20.8938 14.1 21.4556 14.9517 22.3069 15.4432C22.785 15.7193 23.3278 15.8637 23.8799 15.8617C24.3231 15.859 24.762 15.7751 25.1749 15.6141C26.107 15.2581 26.9163 14.5493 27.4538 13.6183C28.5991 11.6348 28.1537 9.22592 26.4608 8.24853ZM25.8842 12.7121C25.5543 13.2837 25.0727 13.713 24.5282 13.9209C24.0498 14.1038 23.5828 14.0869 23.2133 13.8735C22.8438 13.6601 22.5959 13.2642 22.5147 12.7585C22.4226 12.183 22.5536 11.5512 22.8836 10.98C23.2137 10.4087 23.6952 9.97913 24.2397 9.77109C24.4449 9.69028 24.6631 9.64764 24.8836 9.64529C25.1186 9.64271 25.3502 9.70248 25.5546 9.81849C26.3678 10.2878 26.5188 11.613 25.8842 12.7121Z" fill="black"/>
  <path d="M17.7448 10.0008C17.9623 10.0482 18.1842 10.0721 18.4068 10.0722C19.15 10.0722 19.8852 9.80436 20.5285 9.28989C21.3078 8.66684 21.8628 7.74519 22.0911 6.69473C22.5776 4.45658 21.4194 2.29789 19.5094 1.88271C18.549 1.67394 17.5603 1.92633 16.7257 2.59361C15.9463 3.21666 15.3914 4.13831 15.1631 5.18871C14.6765 7.42687 15.8347 9.58555 17.7448 10.0008ZM16.9342 5.57376C17.0744 4.92879 17.4023 4.37297 17.8575 4.00929C18.1731 3.75701 18.5196 3.6252 18.8565 3.6252C18.9466 3.62504 19.0364 3.63453 19.1245 3.65352C20.0421 3.85301 20.5895 5.06954 20.32 6.3094C20.1798 6.95437 19.8519 7.51019 19.3968 7.87393C18.9968 8.19373 18.5471 8.31992 18.1299 8.22935C17.2121 8.03015 16.6646 6.81373 16.9342 5.57376Z" fill="black"/>
</svg>
                    </span>
                    </div>

                    <div class="stats__card">
                        <div class="stats__content">
                            <h3 class="stats__title">Adoptions réussies</h3>
                            <span class="stats__value">3</span>
                        </div>
                        <span class="stats__icon stats__icon--check">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
  <path d="M20.0379 12.5379C20.404 12.1718 20.404 11.5782 20.0379 11.2121C19.6717 10.846 19.0782 10.846 18.7121 11.2121L13.125 16.7991L11.2879 14.9621C10.9218 14.596 10.3282 14.596 9.96208 14.9621C9.59597 15.3282 9.59597 15.9217 9.96208 16.2879L12.4621 18.7879C12.8282 19.154 13.4217 19.154 13.7879 18.7879L20.0379 12.5379Z" fill="#363636"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0717 1.5625H14.9283C12.0428 1.56249 9.78149 1.56248 8.01714 1.79969C6.21121 2.04249 4.78619 2.54916 3.66768 3.66768C2.54916 4.78619 2.04249 6.21121 1.79969 8.01714C1.56248 9.78149 1.56249 12.0428 1.5625 14.9283V15.0717C1.56249 17.9572 1.56248 20.2185 1.79969 21.9829C2.04249 23.7887 2.54916 25.2139 3.66768 26.3324C4.78619 27.4509 6.21121 27.9575 8.01714 28.2004C9.78149 28.4375 12.0428 28.4375 14.9283 28.4375H15.0717C17.9572 28.4375 20.2185 28.4375 21.9829 28.2004C23.7887 27.9575 25.2139 27.4509 26.3324 26.3324C27.4509 25.2139 27.9575 23.7887 28.2004 21.9829C28.4375 20.2185 28.4375 17.9572 28.4375 15.0717V14.9283C28.4375 12.0428 28.4375 9.78149 28.2004 8.01714C27.9575 6.21121 27.4509 4.78619 26.3324 3.66768C25.2139 2.54916 23.7887 2.04249 21.9829 1.79969C20.2185 1.56248 17.9572 1.56249 15.0717 1.5625ZM4.9935 4.9935C5.70556 4.28143 6.66896 3.87281 8.26698 3.65796C9.89195 3.43949 12.0272 3.4375 15 3.4375C17.9727 3.4375 20.108 3.43949 21.733 3.65796C23.331 3.87281 24.2944 4.28143 25.0065 4.9935C25.7186 5.70556 26.1273 6.66896 26.342 8.26698C26.5605 9.89195 26.5625 12.0272 26.5625 15C26.5625 17.9727 26.5605 20.108 26.342 21.733C26.1273 23.331 25.7186 24.2944 25.0065 25.0065C24.2944 25.7186 23.331 26.1273 21.733 26.342C20.108 26.5605 17.9727 26.5625 15 26.5625C12.0272 26.5625 9.89195 26.5605 8.26698 26.342C6.66896 26.1273 5.70556 25.7186 4.9935 25.0065C4.28143 24.2944 3.87281 23.331 3.65796 21.733C3.43949 20.108 3.4375 17.9727 3.4375 15C3.4375 12.0272 3.43949 9.89195 3.65796 8.26698C3.87281 6.66896 4.28143 5.70556 4.9935 4.9935Z" fill="#363636"/>
</svg>
                    </span>
                    </div>

                    <div class="stats__card">
                        <div class="stats__content">
                            <h3 class="stats__title">Animaux encore au refuge</h3>
                            <span class="stats__value">10</span>
                        </div>
                        <span class="stats__icon stats__icon--home">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
  <path d="M9.66667 18.1251C9.66667 18.1251 11.6 20.5418 14.5 20.5418C17.4 20.5418 19.3333 18.1251 19.3333 18.1251M3.625 17.6418V14.6573C3.625 13.2693 3.625 12.5752 3.80389 11.9361C3.96237 11.37 4.2228 10.8375 4.57239 10.3648C4.96706 9.83122 5.51488 9.40514 6.61053 8.55297L9.75219 6.10946C11.4503 4.78874 12.2993 4.12837 13.2368 3.87453C14.064 3.65055 14.936 3.65055 15.7632 3.87453C16.7007 4.12837 17.5497 4.78874 19.2478 6.10946L22.3895 8.55297C23.4852 9.40514 24.0329 9.83122 24.4275 10.3648C24.7772 10.8375 25.0376 11.37 25.196 11.9361C25.375 12.5752 25.375 13.2693 25.375 14.6573V17.6418C25.375 20.3487 25.375 21.7021 24.8482 22.736C24.3848 23.6455 23.6454 24.3849 22.736 24.8483C21.702 25.3751 20.3486 25.3751 17.6417 25.3751H11.3583C8.65141 25.3751 7.29796 25.3751 6.26405 24.8483C5.3546 24.3849 4.61519 23.6455 4.1518 22.736C3.625 21.7021 3.625 20.3487 3.625 17.6418Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                    </span>
                    </div>

                </section>
            </div>

            <div class="dashboard__adoptions">
                <section class="dashboard__adoption-requests">
                    <h3 class="dashboard__section-title">
                        Demandes d'adoption
                        <span class="notif-badge">3</span>
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
                    <div class="fiches">
                        <h3 class="dashboard__section-title">Fiches à valider<span class="notif-badge">3</span></h3>
                        <div class="fiche-item">Fiche de Moka (envoyé par Adrien)</div>
                        <div class="fiche-item">Fiche de Moka (envoyé par Adrien)</div>
                    </div>
                    <a href="#" class="dashboard__validation-footer">Voir toutes les fiches</a>
                </section>
            </div>

            <div class="dashboard__messages">
                <section class="dashboard__notifications">
                    <h3 class="dashboard__section-title">Notifications<span class="notif-badge">3</span></h3>
                    <div class="notification-item">Nouvelle demande d’adoption pour Moka</div>
                    <div class="notification-item">Tâche en attente : valider la fiche de Sarah</div>
                </section>

                <section class="dashboard__recent-messages">
                    <div class="messages-header">
                        <h3>Messages récentes</h3>
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
    </div>
</main>
