@include('components.admin.navigations.header')
<main class="admin">
    @include('components.admin.navigations.navigation')
    <div class="animals">
        @include('components.admin.navigations.topbar')
        <div class="animals__container">
            <div class="animals__header">
                <div class="animals-filters__container">
                    <p class="animals-filters__label">Filtrer par:</p>
                    <div class="animals-filters">
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
                        <button type="submit" class="cta__btn cta__apply">Appliquer</button>
                    </div>
                </div>
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
                    <div class="animals__grid">
                        @php
                            $rows = [
                                ['name' => 'Moka', 'adopter' => 'Sarah', 'date' => '05/11/25', 'status' => 'waiting'],
                                ['name' => 'Luna', 'adopter' => 'Paul', 'date' => '06/11/25', 'status' => 'progress'],
                                ['name' => 'Rex', 'adopter' => 'Julie', 'date' => '07/11/25', 'status' => 'closed'],
                                ['name' => 'Rex', 'adopter' => 'Julie', 'date' => '07/11/25', 'status' => 'closed'],
                                ['name' => 'Rex', 'adopter' => 'Julie', 'date' => '07/11/25', 'status' => 'closed'],
                            ];
                        @endphp
                        @foreach($rows as $row)
                            <x-table.table
                                :name="$row['name']"
                                :adopter="$row['adopter']"
                                :date="$row['date']"
                                :status="$row['status']"
                            />
                        @endforeach
                    </div>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
