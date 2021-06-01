<div class="main-box">
    <h1 class="title"><?= $result['title'] ?></h1>
    <div class="secondary-box"><?= $result['description'] ?></div>
    <div class="about-box">
        <small>Dernière mise à jour le <b><?= $result['updated_at'] ?></b></small>
    </div>
    <div class="title">
        <a class="dark" style="padding-left:0.5em" href="?course_id=<?= $result['course_id'] ?>">Retour</a> -
        <a class="dark" href="?">Retour à la liste des cours</a>
    </div>
</div>