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
    //
    /*
    */
    #
    echo 'Hello World';
    echo 'Please add br';

    echo "Hello World<br />";
    echo "br Added<br />";
    

    $name  =  "Amit";
    $class=30;

    echo "Welcome $name $class<br />";
    echo 'Welcome $name $class<br />';
    echo 'Welcome '.$name.' '.$class.'<br />';

    //$name,$age
    //H1
    //My name is $name, I'm $age years old
    $name="Ramy";
    $age=30;

    echo "My name is $name, I'm $age years old<br />";

    echo 'My name is '.$name.', I\'m '.$age.' years old<br />';

    var_dump($name);
    echo "<br />";
    //Arrays
    $name=[];
    $name[0]="Ramy";
    $name[1]="Merna";
    $name[2]="Kamal";
    $name[3]="Anas";
    $name[4]="Ibrahim";
    $name[5]="Mohamed";
    var_dump($name);
    echo "<br />";
    $student_names=["Ramy","Merna","Kamal","Anas","Ibrahim","Mohamed"];
    //var_dump($student_names);

    
    echo $student_names[0]."<br />";
    echo $student_names[1]."<br />";
    echo $student_names[2]."<br />";
    echo $student_names[3]."<br />";
    echo $student_names[4]."<br />";
    echo $student_names[5]."<br />";

    /*
        var arr=[1,2,3];
        var obj={name:'3orabi',age:21};
        obj.age
    */
    //This is a zero-indexed Array :(
    $student=[30,175.5,68.5,"Ibrahim"];
    //echo $student[0];
    //echo $student[1];

    $student1=["name"=>"Ibrahim","age"=>30,"height"=>175.5];
    echo $student1["name"];
    $student2=["name"=>"Kamal","age"=>34,"height"=>174.5];

    $students=[$student1,$student2];
    //var_dump($students);
    echo $students[0]['name'],$students[0]['age'];    

    var_dump($students);
?>
</body>
</html>