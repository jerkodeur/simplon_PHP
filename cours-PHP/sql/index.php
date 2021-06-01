<?php

include('models/model.php');

include('views/header.php');

if (isset($_GET['course_id'])) {
    $result = findOne($_GET['course_id'], 'courses');
    include('views/courses/show.php');
} elseif (isset($_GET['episode_id'])) {
    $result = findOne($_GET['episode_id'], 'episodes');
    include('views/episodes/show.php');
} else {
    $result = findAllCourses();
    include('views/courses/all.php');
}

include('views/footer.php');
