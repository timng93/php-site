<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



    <form action="switch.php" method="post">
    Grade: <input type="text" name="grade">
    <input type="submit">
    </form>
  <?php
$grade = $_POST["grade"];
switch($grade) {
    case "A": 
    echo "You did amazing";
    break;
    case "B": 
    echo "You did pretty good";
    break;
    default: 
    echo "Invalid";
}
  ?>

    
</body>
</html>