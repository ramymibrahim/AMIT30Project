<?php
require_once($base_path.'helpers/database.php');

function login($username,$password){
    $q="SELECT * FROM users WHERE username='$username' AND password='$password' AND is_active=1";
    $user = getRow($q);
    if($user){
        $_SESSION['user_data']=$user;     
        header('Location:index.php');
        die();
        return true;
    }
    return false;
}

function canView(){
    return isAdmin();
}

function isAuthorOrAdmin(){
    return isAdmin() || isAuthor();
}

function isAdmin(){
    return (isset($_SESSION['user_data']) && $_SESSION['user_data']['is_admin']);
}

function isAuthor(){
    return (isset($_SESSION['user_data']) && $_SESSION['user_data']['is_author']);
}

function protect(){
    $base_url=$GLOBALS['base_url'];
    if(!isAdmin()){
        header("Location:$base_url");
        die();
      }
}