<?php
$base_path=$_SERVER['DOCUMENT_ROOT'].'/amit30/blog/';
$base_url='http://localhost/amit30/blog/';
session_start();

function uploadPhoto($image){
    if($image['type']!='image/jpeg' &&
    $image['type']!='image/jpg' &&
    $image['type']!='image/png' && 
    $image['type']!='image/bmp'){
        return false;
    }
    if($image['size']>2*1024*1024){
        return false;
    }
    move_uploaded_file($image['tmp_name'],$GLOBALS['base_path'].'uploads/'.$image['name']);    
    return 'uploads/'.$image['name'];
}
