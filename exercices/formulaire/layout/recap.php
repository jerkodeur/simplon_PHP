<p>
    <?= displayScore($_GET['score']); ?>
</p>
<div>
    <?php
    foreach ($_POST as $key => $value) {
        echo $key . " ==> " . $value . "<br>";
    }
    ?>
</div>