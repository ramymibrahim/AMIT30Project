<?php
function calcTax($price){
    $tax=0;
    if($price<=2000 && $price>1000){        
        $tax=$price*0.1;
    }
    elseif($price<=3000 && $price>2000){
        $tax=$price*0.15;
    }
    elseif($price>3000){
        $tax=$price*0.2;
    }
    return $price+$tax;
}
function div2($val){
    return $val/2;
}
$prices=[1000,1001,2000,2001,3000,3001,-18];
?>
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
        foreach($prices as $p){
            echo div2(div2(div2(calcTax($p)))).'<br />';
        }
    ?>
</body>
</html>