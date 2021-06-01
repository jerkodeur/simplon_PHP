<?php
foreach ($result as $row) { ?>
    <div class='main-box'>
        <h1 class='title'><?= $row['title'] ?></h1>
        <p class="secondary-box"><?= $row['description'] ?></p>
        <div class="about-box">
            <div>
                <a href=<?= "?course_id=" . $row['id'] ?>><button class='main-button'>Voir le cours</button></a>
            </div>
            <div>
                <small>Mise en ligne le <b><?= $row['updated_at'] ?></b> par <b><?= $row['user'] ?></b></small>
            </div>
        </div>
    </div>
<?php
}
