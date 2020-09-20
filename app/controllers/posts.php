<?php
include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/app/helpers/validatePost.php');
include(ROOT_PATH . '/app/helpers/middleware.php');

$table ='b';
$topics = selectAll('c');
$posts = selectAll($table);


$errors = array();
$id = '';
$tittle = '';
$description = '';
$category = '';
$published = '';

// editing post
if(isset($_GET['id']) ){
    $post = selectOne($table, ['id' => $_GET['id']]);
    $id = $post['id'];
    $tittle = $post['tittle'];
    $description = $post['description'];
    
    $published = $post['published'];
    $category = $post['category'];
}


if(isset($_GET['delete_id']) ){
    // adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Post deleted successfully";
    $_SESSION['type'] = 'success';
    header("location:" . BASE_URL . "/admin/posts/index.php");
    exit();
}

if(isset($_GET['published']) && isset($_GET['p_id'])){
    // adminOnly();
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = "Post status changed";
    $_SESSION['type'] = 'success';
    header("location:" . BASE_URL . "/admin/posts/index.php");
    exit();

}

// Creating post
if (isset($_POST['add-post'])){
    // adminOnly();
    // dd($_FILES['image']);
    $errors = validatePost($_POST);
    if (!empty($_FILES['image']['name'])){
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        if($result){
            $_POST['image'] = $image_name;
        }else{
            array_push($errors, "Failed to upload image");
        }

    }else{
        array_push($errors, "Post image required");
    }

    if (count($errors) == 0){        
        // $_POST['category'] = $_POST['topic_id'];

        unset($_POST['add-post']);
        $_POST['userId'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['description'] =htmlentities($_POST['description']);
        // dd($_POST);
        $post_id = create($table, $_POST);
        $_SESSION['message'] = "Post created successfully";
        $_SESSION['type'] = 'success';
        header("location:" . BASE_URL . "/admin/posts/index.php");
        exit();
    }else{
        $tittle = $_POST['tittle'];
        $description = $_POST['description'];        
        $category = $_POST['category'];
        $published = isset($_POST['published'])? 1 : 0;
    }

    
}

if (isset($_POST['update-post'])){
    // adminOnly();
    $errors = validatePost($_POST);
    if (!empty($_FILES['image']['name'])){
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        if($result){
            $_POST['image'] = $image_name;
        }else{
            array_push($errors, "Failed to upload image");
        }

    }else{
        array_push($errors, "Post image required");
    }
    if (count($errors) == 0){        
        // $_POST['category'] = $_POST['topic_id'];
        $id =$_POST['id'];
        unset($_POST['update-post'], $_POST['id']);
        $_POST['userId'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['description'] =htmlentities($_POST['description']);
        // dd($_POST);
        // dd($_POSxT);
        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Post updated successfully";
        $_SESSION['type'] = 'success';
        header("location:" . BASE_URL . "/admin/posts/index.php");
        exit();
    }else{
        $tittle = $_POST['tittle'];
        $description = $_POST['description'];        
        $category = $_POST['category'];
        $published = isset($_POST['published'])? 1 : 0;
    }
}