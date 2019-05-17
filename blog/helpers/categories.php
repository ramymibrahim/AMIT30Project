<?php
require_once($base_path.'helpers/database.php');

function getCategories(){
    return getRows("SELECT * FROM categories");
}

function addCategory($name){
    return execute("INSERT INTO categories(id,name) values(null,'$name')");
}

function editCategory($id,$name){
    return execute("UPDATE categories SET name='$name' WHERE id=$id");
}

function getCategory($id){
    return getRow("SELECT * FROM categories where id=$id");
}
?>