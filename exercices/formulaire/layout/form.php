<div class="row">
    <div class="col-lg-12">
        <div class="bs-component">
            <form method="post" action="index.php" class="mt-3">
                <fieldset>
                    <!-- lastname -->
                    <div class="form-group row">
                        <label for="lastname" class="col-sm-2 col-form-label">Nom *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Entrez votre nom (requis)" value=<?php if (isset($_POST['lastname'])) echo $_POST['lastname'] ?>>
                            <?php if (isset($errors['lastname'])) { ?>
                                <div class="invalid-feedback d-block my-2" style="margin-left: .5em"><?= $errors['lastname'] ?></div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- firstname -->
                    <div class="form-group row">
                        <label for="firstname" class="col-sm-2 col-form-label">Prénom *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Entrez votre prénom (requis)" value=<?php if (isset($_POST['firstname'])) echo $_POST['firstname'] ?>>
                            <?php if (isset($errors['firstname'])) { ?>
                                <div class="invalid-feedback d-block my-2" style="margin-left: .5em"><?= $errors['firstname'] ?></div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- phone -->
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Numéro de téléphone *</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Entrez votre numéro de téléphone (10 chiffres - requis)" pattern="0[0-9]{9}" value=<?php if (isset($_POST['phone'])) echo $_POST['phone'] ?>>
                            <?php if (isset($errors['phone'])) { ?>
                                <div class="invalid-feedback d-block my-2" style="margin-left: .5em"><?= $errors['phone'] ?></div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- date -->
                    <div class="form-group row">
                        <label for="date" class="col-sm-2 col-form-label">Date de l'achat *</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="date" name="date" value=<?php if (isset($_POST['date'])) echo $_POST['date'] ?>>
                            <?php if (isset($errors['date'])) { ?>
                                <div class="invalid-feedback d-block my-2" style="margin-left: .5em"><?= $errors['date'] ?></div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- question 1 -->
                    <div class='d-flex flex-column'>
                        <div class="mt-4">L'agent a-t-il été agréable ?</div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question_1" id="q1_yes" value="2" <?php if (isset(($_POST['question_1'])) && $_POST['question_1'] === '2' || $_POST['question_1'] == null) echo 'checked' ?>>
                                Oui
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question_1" id="q1_no" value="0" <?php if (isset($_POST['question_1']) && ($_POST['question_1'] === '0')) echo 'checked' ?>>
                                Non
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question_1" id="q1_without" value="1" <?php if (isset($_POST['question_1']) && ($_POST['question_1'] === '1')) echo 'checked' ?>>
                                Sans avis
                            </label>
                        </div>
                    </div>
                    <!-- question_2 -->
                    <div class='d-flex flex-column'>
                        <div class="mt-4">L'agent a-t-il compris votre problème ?</div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question_2" id="q2_yes" value="2" <?php if ($_POST['question_2'] === '2' || $_POST['question_2'] == null) echo 'checked' ?>>
                                Oui
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question_2" id="q2_no" value="0" <?php if ($_POST['question_2'] === '0') echo 'checked' ?>>
                                Non
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question_2" id="q2_without" value="1" <?php if ($_POST['question_2'] === '1') echo 'checked' ?>>
                                Sans avis
                            </label>
                        </div>
                    </div>
                    <!-- question_3 -->
                    <div class='d-flex flex-column'>
                        <div class="mt-4">L'agent a-t-il résolu votre problème ?</div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question_3" id="q3_yes" value="1" <?php if ($_POST['question_3'] === '1' || $_POST['question_3'] == null) echo 'checked' ?>>
                                Oui
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question_3" id="q3_no" value="-1" <?php if ($_POST['question_3'] === '-1') echo 'checked' ?>>
                                Non
                            </label>
                        </div>
                    </div>
                    <!-- about -->
                    <div class="form-group">
                        <label for="about" class="form-label mt-4">Dîtes-nous en plus</label>
                        <textarea class="form-control" id="about" rows="3" name="about"><?php if ($_POST['about']) echo $_POST['about'] ?></textarea>
                    </div>
                    <!-- recall -->
                    <fieldset class="form-group mt-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="recall" name="recall" <?php if (isset($_POST['recall']) && $_POST['recall'] === '1') echo 'checked' ?>>
                            <label class="form-check-label" for="flexCheckDefault">
                                J'accepte d'être rapellé
                            </label>
                        </div>
                    </fieldset>
                    <!-- submit form -->
                    <div class="row text-center mb-3">
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-dark m-auto">Envoyer le formulaire</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>