<main class="signin">
    <!--h1 class="signin-titre">
        <strong>
            Heureux de vous revoir !
        </strong>
        <span>Quel type de compte souhaitez-vous créer ?</span>
    </h1-->
    <form action="">
        <div class="row">
            <div class="champ-input--composant col-12">
                <div>
                    <label for="email">Nom et Prénom d'identité</label>
                    <div class="champ-input">
                        <input type="text" placeholder="Jean Kassi">
                    </div>
                    <div class="champ-input--message">
                        <div class="d-flex align-center justify-center">
                            <span>
                                <i class="fi fi-rr-exclamation"></i>
                            </span>
                            Le titre de votre profil doit contenir entre 5 et 50 caractères.
                        </div>
                    </div>
                </div>
            </div>
            <div class="champ-input--composant col-6">
                <div>
                    <label for="email">Adresse email professionelle</label>
                    <div class="champ-input">
                        <input type="email" placeholder="name@work-email.com">
                    </div>
                    <!--div class="champ-input--message">
                        <div class="d-flex align-center justify-center">
                            <span>
                                <i class="fi fi-rr-exclamation"></i>
                            </span>
                            Le titre de votre profil doit contenir entre 5 et 50 caractères.
                        </div>
                    </div-->
                </div>
            </div>
            <div class="champ-input--composant col-6">
                <div>
                    <label for="email">Adresse / lieu de résidence</label>
                    <div class="champ-input">
                        <input type="email" placeholder="Abidjan, cote d'ivoire">
                    </div>
                    <!--div class="champ-input--message">
                        <div class="d-flex align-center justify-center">
                            <span>
                                <i class="fi fi-rr-exclamation"></i>
                            </span>
                            Le titre de votre profil doit contenir entre 5 et 50 caractères.
                        </div>
                    </div-->
                </div>
            </div>
            <div class="champ-input--composant col">
                <div>
                    <label for="email">Télephone *</label>
                    <div class="d-flex justify-center items-center row">
                        <div class="champ-input col-4">
                            <span class="indicator">+225</span>
                            <img src="{{ asset('/assets/svg/flags/ci.svg') }}" class="indicator-flag" height="16px" width="18px">
                        </div>
                        <div class="champ-input col-8">
                            <input id="phone" type="tel" name="phone" />
                        </div>
                    </div>
                    <!--div class="champ-input--message">
                        <div class="d-flex align-center justify-center">
                            <span>
                                <i class="fi fi-rr-exclamation"></i>
                            </span>
                            Le titre de votre profil doit contenir entre 5 et 50 caractères.
                        </div>
                    </div-->
                </div>
            </div>
        </div>
    </form>
</main>