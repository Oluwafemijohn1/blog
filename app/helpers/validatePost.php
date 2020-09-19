<?php
function validatePost($post)
{
    
    $errors = array();
    if (empty($post['tittle'])){
        array_push($errors, "Tittle is required");
    }
    if (empty($post['description'])){
        array_push($errors, "Body is required");
    }
 
    if (empty($post['category'])){
        array_push($errors, "Please select a topic");
    }
  
   
    $existingPost= selectOne('b', ['tittle' => $post['tittle']]);
    if($existingPost){
        array_push($errors, 'Post with that tittle alreaddy exists');
    }
    return $errors;
}

