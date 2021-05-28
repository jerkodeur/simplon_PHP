<?php
$score = $_POST['question_1'] + $_POST['question_2'] + $_POST['question_3'];
$phone = $_POST['phone'];
?>
<p class="mt-5">
    <strong class="pr-2">
        Merci pour votre notation:
    </strong> <?= " " . displayScore($score); ?>
</p>
<?php
if ($_POST['recall'] && $_POST['question_3'] === '-1') {
    echo "<p>Nous sommes désolés de ne pas avoir répondu à vos attentes, nous vous rapellerons dès que possible au <b>" . split_string(2, $phone) . "</b></p>";
}
// $url = "/exercices/formulaire/index.php?page=recap&score=$score";
// if () $url = $url . "&phone=$phone";
// header("Location: $url");