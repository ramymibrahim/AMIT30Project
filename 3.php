<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="3.1.php" method="POST">
        <select name="g">
            <option value="m">Male</option>
            <option value="f">FeMale</option>
        </select>
        <select name="age">
            <?php
                for($i=10;$i<=100;$i++){
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>
        <button type="submit">Check</button>
    </form>
</body>
</html>