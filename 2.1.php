<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $x=8;
    $age=54;
    $g='f';
        if($age>=55 && $g=='f'){
            echo 'This is true';
        }
        elseif($age>=60 && $g=='m'){
            echo 'This is true';
        }
        else{
            echo 'This is false';
        }

        if(($age>=55 && $g=='f') || ($age>=60 && $g=='m')){

        }
        
    ?>
</body>
</html>