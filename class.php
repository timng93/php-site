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
   class Movie {
       public $title;
       private $rating;

       function __construct($title, $rating) {
           $this -> title = $title;
           $this -> setRating($rating);
           
       }

       function getRating() {
           return $this -> rating;
       }

       function setRating($rating) {
           if($rating == "G" || $rating == "PG") {
               $this -> rating = $rating;
           } 
           else {
               $this -> rating = "NR";
           }

       }
   }

   $movie1 = new Movie ("Hunger Games","R");

   echo $movie1 -> getRating();


   

   ?>
    
</body>
</html>