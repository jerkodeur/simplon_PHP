<?php
$url = "?page=$nextPage&max=" . $_GET['max'] + 2 . "&result=";
?>

<!-- Etape 1 : A afficher uniquement une fois que le boutton "Commencer" a été pressé -->
<h2>Question 2</h2>
<p>L'agent a-t-il compris votre problème ?</p>

<a href="<?= $url . $score + 2 ?>" role=" button" class="btn btn-success">oui</a>
<!-- rapporte 2 point -->
<a href="<?= $url . $score ?>" role="button" class="btn btn-danger">non</a>
<!-- rapporte 0 point -->
<a href="<?= $url . $score + 1 ?>" role="button" class="btn btn-secondary">sans avis</a>
<!-- rapporte 1 point -->