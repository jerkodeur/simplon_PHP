<?php
$url = "?result=";
?>

<!-- Etape 3 : A afficher uniquement une fois que l'étape 2 a été résolue -->
<h2>Question 3</h2>
<p>L'agent a-t-il résolu votre problème ?</p>

<a href="<?php echo $url . $score + 2 . "&page=end" ?>" role=" button" class="btn btn-success">oui</a>
<!-- rapporte 2 point -->
<a href="<?php echo $url . $score . "&page=end" ?>" role="button" class="btn btn-danger">non</a>
<!-- rapporte 0 point -->