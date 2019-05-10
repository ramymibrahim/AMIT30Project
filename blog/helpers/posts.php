<?php
require_once($base_path.'helpers/database.php');
function getPosts($cat_id=null){
    $q="SELECT posts.*
    ,users.name as posted_by
    ,categories.name as category_name
     FROM posts 
     inner join users on users.id=posts.user_id 
     inner join categories on categories.id=posts.category_id 
     WHERE 1=1";
    if($cat_id!=null){
        $q=$q." AND category_id=$cat_id";
    }
    return getRows($q);
}