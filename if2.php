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
    function getMax($num1, $num2) {
        if($num1 > $num2) {
            return $num1;
        }
        else{
            return $num2;
        }
    }

    echo getMax(45,99)
  
    ?>

    
</body>
</html>