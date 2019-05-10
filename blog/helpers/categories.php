<?php
require_once($base_path.'helpers/database.php');

function getCategories(){
    return getRows("SELECT * FROM categories");
}

function addCategory($name){
    return execute("INSERT INTO categories(id,name) values(null,'$name')");
}
?>