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
   $isGood = true;
   $isTasty = false;
   if ($isGood && $isTasty) {
    echo "Cake is good and tasty";
   }
   else if ($isGood && !$isTasty) {
    echo "Cake is not tasty";
   }
   else if (!$isGood && $isTasty) {
    echo "Cake is not good";
   }
   else {
       echo "Cake is not good and not tasty";
   }  
    ?>

    
</body>
</html>