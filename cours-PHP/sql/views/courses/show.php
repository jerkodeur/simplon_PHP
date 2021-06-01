<div class="main-box">
    <h1 class="title"><?= $result['title'] ?></h1>
    <P class="secondary-box"><?= $result['description'] ?></P>
    <div class="list-box">
        <h2>Liste des épisodes</h2>
        <ul>
            <?php
            $courses = findAllByOne('episodes', 'course_id', $result['id']);
            foreach ($courses as $index => $episode) { ?>
                <li>
                    <a class="light" href="?episode_id=<?= $episode['id'] ?>">Episode <?= $index + 1 ?>: <?= $episode['title'] ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="about-box"><a href="?" class="dark">Retour à la liste des cours</a></div>
</div>