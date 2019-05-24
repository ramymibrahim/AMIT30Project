<?php
require_once($base_path.'helpers/database.php');

function login($username,$password){
    $password=md5($username.$password);
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

function getUsers(){
    return getRows("SELECT * FROM users");
}

function addUser($name,$username,$password,$image,$is_admin,$is_author,$is_active){
    $password=md5($username.$password);
    return execute("INSERT INTO users(id,name,username,password,image,is_admin,is_author,is_active)
     VALUES(null,'$name','$username','$password','$image',$is_admin,$is_author,$is_active)");
}

function editUser($id,$name,$image,$is_admin,$is_author,$is_active){
    return execute("UPDATE users set name='$name',image='$image'
    ,is_admin=$is_admin,is_author=$is_author,is_active=$is_active
    WHERE id=$id");
}

function getCheck($name){
    if(isset($_POST[$name]))
      return 1;
    return 0;
  }

  function getUser($id){
      return getRow("SELECT * FROM users WHERE id=$id");
  }

  function deleteUser($id){
      return execute("DELETE FROM users WHERE id=$id");
  }