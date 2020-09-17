<?php
include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/app/helpers/validatePost.php');

$topics = selectAll('c');

$table ='b';
$error = array();


if (isset($_POST['add-post'])){



    unset($_POST['add-post'], $_POST['topic_id']);
    $_POST['userId'] = 1;
    $_POST['published'] = 1;
    $_POST['category'] = 'ok';

    // $post_id = create($table, $_POST);
    dd($_POST);
}