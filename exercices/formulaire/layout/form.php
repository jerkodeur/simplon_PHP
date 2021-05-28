<div class="row">
    <div class="col-lg-12">
        <div class="bs-component">
            <form method="post" action="layout/valid.php">
                <fieldset>
                    <div class="form-group row">
                        <label for="lastname" class="col-sm-2 col-form-label">Nom *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Entrez votre nom" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="firstname" class="col-sm-2 col-form-label">Prénom *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Entrez votre prénom" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Numéro de téléphone *</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Entrez votre numéro de téléphone" pattern="0[0-9]{9}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-sm-2 col-form-label">Date de l'achat *</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="date" name="date" placeholder="Entrez votre numéro de téléphone" required>
                        </div>
                    </div>
                    <div class='d-flex flex-column'>
                        <div class="mt-4">L'agent a-t-il été agréable ?</div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question_1" id="q1_yes" value="2" checked>
                                Oui
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question_1" id="q1_no" value="0">
                                Non
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question_1" id="q1_without" value="1">
                                Sans avis
                            </label>
                        </div>
                    </div>
                    <div class='d-flex flex-column'>
                        <div class="mt-4">L'agent a-t-il compris votre problème ?</div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question_2" id="q2_yes" value="2" checked>
                                Oui
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question_2" id="q2_no" value="0">
                                Non
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question_2" id="q2_without" value="1">
                                Sans avis
                            </label>
                        </div>
                    </div>
                    <div class='d-flex flex-column'>
                        <div class="mt-4">L'agent a-t-il résolu votre problème ?</div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question_3" id="q3_yes" value="1" checked>
                                Oui
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question_3" id="q3_no" value="-1">
                                Non
                            </label>
                        </div>
                    </div>
                    <fieldset class="form-group mt-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="recall" name="recall">
                            <label class="form-check-label" for="flexCheckDefault">
                                J'accepte d'être rapellé
                            </label>
                        </div>
                    </fieldset>
                    <div class="row text-center">
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-dark m-auto">Envoyer le formulaire</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>