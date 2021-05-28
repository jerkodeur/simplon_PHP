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
    <!-- <div class="col-lg-4 offset-lg-1">
        <form class="bs-component">
            <div class="form-group">
                <fieldset disabled>
                    <label class="form-label" for="disabledInput">Disabled input</label>
                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
                </fieldset>
            </div>

            <div class="form-group">
                <fieldset>
                    <label class="form-label mt-4" for="readOnlyInput">Readonly input</label>
                    <input class="form-control" id="readOnlyInput" type="text" placeholder="Readonly input here..." readonly>
                </fieldset>
            </div>

            <div class="form-group has-success">
                <label class="form-label mt-4" for="inputValid">Valid input</label>
                <input type="text" value="correct value" class="form-control is-valid" id="inputValid">
                <div class="valid-feedback">Success! You've done it.</div>
            </div>

            <div class="form-group has-danger">
                <label class="form-label mt-4" for="inputInvalid">Invalid input</label>
                <input type="text" value="wrong value" class="form-control is-invalid" id="inputInvalid">
                <div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
            </div>

            <div class="form-group">
                <label class="col-form-label col-form-label-lg mt-4" for="inputLarge">Large input</label>
                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="inputLarge">
            </div>

            <div class="form-group">
                <label class="col-form-label mt-4" for="inputDefault">Default input</label>
                <input type="text" class="form-control" placeholder="Default input" id="inputDefault">
            </div>

            <div class="form-group">
                <label class="col-form-label col-form-label-sm mt-4" for="inputSmall">Small input</label>
                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="inputSmall">
            </div>

            <div class="form-group">
                <label class="form-label mt-4">Input addons</label>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label mt-4">Floating labels</label>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
            </div>
        </form>
    </div> -->
</div>