<p class="mt-5">
    <strong class="pr-2">
        Merci pour votre notation:
    </strong> <?= " " . displayScore($score); ?>
</p>
<?php
if (isset($_POST['recall']) && $_POST['question_3'] === '-1') {
    echo "<p>Nous sommes désolés de ne pas avoir répondu à vos attentes, nous vous rapellerons dès que possible au <b>" . split_string(2, $phone) . "</b></p>";
}
?>
<a href="?"><button class='btn btn-outline-dark mt-5'>Recommencer le formumaire</button></a>