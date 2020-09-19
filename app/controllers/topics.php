<?php
include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/app/helpers/validateTopic.php');

$table = 'c';
$errors = array();
$id = '';
$title = '';
$adminId = '';
$creationDate = '';
$updationDate = '';
$topics = selectAll($table);


if (isset($_POST['add-topic'])){
    $errors = validateTopic($_POST);
    if(count($errors)===0){
        unset($_POST['add-topic']);
        $_POST['adminId'] = $_SESSION['id'];
        $topic_id = create($table, $_POST);
        $_SESSION['message'] = 'Topic created successfully';
        $_SESSION['type'] = 'success';
        header('location:' . BASE_URL . '/admin/topics/index.php');
        exit();
    }else{
        $title = $_POST['title'];
    }
    
}

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $title = $topic['title'];
    $adminId = $topic['adminId'];
    $creationDate = $topic['creationDate'];
    $updationDate = $topic['updationDate'];
}

if(isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Topic deleted successfully';
    $_SESSION['type'] = 'success';
    header('location:' . BASE_URL . '/admin/topics/index.php');
    exit();
}

if(isset($_POST['update-topic'])){
    $errors = validateTopic($_POST);
    if(count($errors)===0){
        $id = $_POST['id'];
        unset($_POST['update-topic'], $_POST['id']);
        
        $topic_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Topic updated successfully';
        $_SESSION['type'] = 'success';
        header('location:' . BASE_URL . '/admin/topics/index.php');
        exit();
    }else{
        $id = $_POST['id'];
        $title = $_POST['title'];
    }
  
}
