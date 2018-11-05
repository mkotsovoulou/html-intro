<?php
   $title= $_POST['title'];
   $category = $_POST['category'];
   $py = $_POST['py'];
   $price = $_POST['price'];


   include('dbFunctions.php');
   if (insertMovie($title, $category, $py, $price))
      echo 'Movie Inserted ' . $title . ' '. $category . ' ' . $py . ' ' . $price;


?>
