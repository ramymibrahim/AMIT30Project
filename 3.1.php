<?php
var_dump($_POST);
$age=$_POST['age'];
$g=$_POST['g'];
if(($age>=55 && $g=='f') || ($age>=60 && $g=='m')){
    echo 'This is true';
}
else{
    echo 'This is false';
}