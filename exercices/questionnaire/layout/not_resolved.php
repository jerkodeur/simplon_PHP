<!-- Etape 4 : A afficher uniquement si "non" a été répondu à l'étape 3 -->
<p>Votre problème n'a pas été résolu.</p>
<p>Pour être rappelé, entrez votre numéro de téléphone dans le clavier virtuel et validez :</p>
<!-- Coder ici un clavier numérique permettant de saisir le numéro de téléphone -->
<ul>
    <?php
    $url = "?result=" . $_GET['result'];
    for ($i = 0; $i < 10; $i++) {
    ?>
        <li><a href="<?= $url . "&page=recall&phone=" . $_GET['phone'] . $i ?> "><input type="button" value="<?= $i ?>" /></a></li>
    <?php
    }
    ?>
    <li><a href="<?= $url . "&page=recall&phone=" . remove_last_caract($_GET['phone']) ?> "><input type="button" value="Corriger" class='ml-2' /></a></li>
</ul>

<!-- Afficher ici le numéro de téléphone qui s'affiche au fur et à mesure de la saisie-->
<?php
if (isset($_GET['phone'])) {
?>
    <p>Votre numéro : <span class="font-weight-bold"><?= split_string(2, $_GET['phone']) ?></span></p>
<?php
}
?>
<div class="d-flex">
    <div><a href="<?= $url . "&page=end" ?> "><button type="button" class="btn btn-secondary">Ne pas être rappelé</button></a></div>
    <div><a href="<?= $url . "&page=recall" ?> "><button type="button" class="btn btn-warning ml-2">Réinitialiser</button></a></div>
    <a href="<?= $url . "&page=end" ?>" role="button" class="btn btn-success ml-2 <?php if (!verify_phone($_GET['phone'])) echo "disabled" ?>">Valider</a>
</div>
<!-- Validation du numéro de téléphone -->