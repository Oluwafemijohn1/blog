<?php
function validateTopic($topic)
{
    
    $errors = array();
    if (empty($topic['title'])){
        array_push($errors, "Topic is required");
    }
    
    $existingTopic = selectOne('c', ['title' => $topic['title']]);
    if ($existingTopic){
        array_push($errors, 'Topic already exists');
    }
    return $errors;
}
