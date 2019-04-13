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
      $phrase = "Timmy World";
      echo strtolower($phrase);
      echo "<br>";
      echo strlen($phrase);
      echo "<br>";
      $phrase[0] = "J";
      echo $phrase;
      echo "<br>";
      echo str_replace("Jimmy", "Momoa", $phrase);
      echo "<br>";
      echo substr($phrase, 6, 3);

?>    
</body>
</html>