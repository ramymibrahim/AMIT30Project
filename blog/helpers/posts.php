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

function addPost($title,$content,$user_id,$category_id,$image){
    return execute("INSERT INTO posts(id,title,content,user_id,category_id,image) values(null,'$title','$content',$user_id,$category_id,'$image')");
}

function getPost($id){
    return getRow("SELECT * FROM posts WHERE id=$id");
}

function editPost($id,$title,$content,$category_id,$image){
    return execute("UPDATE posts set title='$title',content='$content',
    category_id=$category_id,image='$image' WHERE id=$id");
}

function deletePost($id){
    return execute("DELETE FROM posts WHERE id=$id");
}

function getComments($post_id){
    return getRows("
    SELECT comments.*,users.name,users.image FROM 
    comments inner join users on users.id=comments.user_id
    WHERE post_id=$post_id
    order by comments.created_at desc");
}

function getPostView($id){
    $query ="SELECT posts.*,users.name as posted_by FROM posts inner join users on users.id=posts.user_id where posts.id=$id";
    return getRow($query);
}
function addComment($comment,$user_id,$post_id){
    return execute("INSERT INTO comments(id,comment,user_id,post_id) values(
        null,'$comment',$user_id,$post_id
    )");
}