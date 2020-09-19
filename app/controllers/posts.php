<?php
include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/app/helpers/validatePost.php');

$table ='b';
$topics = selectAll('c');
$posts = selectAll($table);


$errors = array();
$tittle = '';
$description = '';
$topic_id = '';
$published = '';
if (isset($_POST['add-post'])){
    
    $errors = validatePost($_POST);
    if (count($errors) == 0){
        // $_POST['category'] = $_POST['topic_id'];
        unset($_POST['add-post']);
        $_POST['userId'] = 1;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        // $_POST['description'] =htmlentities($_POST['description']);
        // dd($_POST);
        $post_id = create($table, $_POST);
        $_SESSION['message'] = "Post created successfully";
        $_SESSION['type'] = 'success';
        header("location:" . BASE_URL . "/admin/posts/index.php");
    }else{
        $tittle = $_POST['tittle'];
        $description = $_POST['description'];        
        $topic_id = $_POST['category'];
        $published = isset($_POST['published'])? 1 : 0;
    }

    
}