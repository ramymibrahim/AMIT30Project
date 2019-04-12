<?php
$students = [
    ['name' => 'Ramy', 'age' => 21, 'height' => 173.2],
    ['name' => 'Kamal', 'age' => 22, 'height' => 173.2],
    ['name' => 'Merna', 'age' => 20, 'height' => 163.2],
    ['name' => '3orabi', 'age' => 20, 'height' => 183.2],
    ['name' => 'Mohamed', 'age' => 23, 'height' => 174.2],
    ['name' => 'Ramy', 'age' => 21, 'height' => 173.2],
    ['name' => 'Kamal', 'age' => 22, 'height' => 173.2],
    ['name' => 'Merna', 'age' => 20, 'height' => 163.2],
    ['name' => '3orabi', 'age' => 20, 'height' => 183.2],
    ['name' => 'Mohamed', 'age' => 23, 'height' => 174.2],
    ['name' => 'Ramy', 'age' => 21, 'height' => 173.2],
    ['name' => 'Kamal', 'age' => 22, 'height' => 173.2],
    ['name' => 'Merna', 'age' => 20, 'height' => 163.2],
    ['name' => '3orabi', 'age' => 20, 'height' => 183.2],
    ['name' => 'Mohamed', 'age' => 23, 'height' => 174.2],
    ['name' => 'Ramy', 'age' => 21, 'height' => 173.2],
    ['name' => 'Kamal', 'age' => 22, 'height' => 173.2],
    ['name' => 'Merna', 'age' => 20, 'height' => 163.2],
    ['name' => '3orabi', 'age' => 20, 'height' => 183.2],
    ['name' => 'Mohamed', 'age' => 23, 'height' => 174.2],
    ['name' => 'Ramy', 'age' => 21, 'height' => 173.2],
    ['name' => 'Kamal', 'age' => 22, 'height' => 173.2],
    ['name' => 'Merna', 'age' => 20, 'height' => 163.2],
    ['name' => '3orabi', 'age' => 20, 'height' => 183.2],
    ['name' => 'Mohamed', 'age' => 23, 'height' => 174.2],
    ['name' => 'Ramy', 'age' => 21, 'height' => 173.2],
    ['name' => 'Kamal', 'age' => 22, 'height' => 173.2],
    ['name' => 'Merna', 'age' => 20, 'height' => 163.2],
    ['name' => '3orabi', 'age' => 20, 'height' => 183.2],
    ['name' => 'Mohamed', 'age' => 23, 'height' => 174.2],
    ['name' => 'Ramy', 'age' => 21, 'height' => 173.2],
    ['name' => 'Kamal', 'age' => 22, 'height' => 173.2],
    ['name' => 'Merna', 'age' => 20, 'height' => 163.2],
    ['name' => '3orabi', 'age' => 20, 'height' => 183.2],
    ['name' => 'Mohamed', 'age' => 23, 'height' => 174.2],
    ['name' => 'Ramy', 'age' => 21, 'height' => 173.2],
    ['name' => 'Kamal', 'age' => 22, 'height' => 173.2],
    ['name' => 'Merna', 'age' => 20, 'height' => 163.2],
    ['name' => '3orabi', 'age' => 20, 'height' => 183.2],
    ['name' => 'Mohamed', 'age' => 23, 'height' => 174.2],
];

function printTr($student){
    echo "
    <tr>
        <td>".$student['name']."</td>
        <td>".$student['age']."</td>
        <td>".$student['height']."</td>
    </tr>"; 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, tr, td, th{border:1px solid black;}
        table{width:100%;}
    </style>
</head>
<body>
    <?php
// for($i=0;$i<count($students);$i++){
//     echo "<h2>Name: ".$students[$i]['name']."</h2>";
//     echo "<h3>Age: ".$students[$i]['age']."</h3>";
//     echo "<h3>Height: ".$students[$i]['height']."</h3>";
//     echo "<hr>";
// }

// foreach($students as $s){
//     if(22==$s['age']){
//         continue;
//     }
//     echo "<h2>Name: ".$s['name']."</h2>";
//     echo "<h3>Age: ".$s['age']."</h3>";
//     echo "<h3>Height: ".$s['height']."</h3>";
//     echo "<hr>";
//     if(23<=$s['age']){
//         break;
//     }
// }

// foreach($students as $st){
//     foreach($st as $k=>$v)
//         echo "<h2>".ucfirst($k)." : $v</h2>";
//     echo "<hr>";
// }

// $i=0;
// while($i<80){
//     echo $i.'<br />';
//     $i++;
// }
?>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Height</th>
            </tr>
        </thead>
        <tbody>    
        <?php
         foreach($students as $s){
            printTr($s);
        }
        ?>    
            <?php
            // foreach($students as $s){

                ?>
                <!-- <tr>
                    <td><span id="id1" style="color:green;"><?php echo $s['name'];?></span></td>
                    <td><?php echo $s['age'];?></td>
                    <td><?php echo $s['height'];?></td>
                </tr> -->
                <?php
            // }
            // $result = True;
            // echo $result;
            ?>            
        </tbody>
    </table>
</body>
</html>