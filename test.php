<?php
  include('dbFunctions.php');
  if (login(1, 'mkotsovoulou@acg.edu'))
    echo "Correct";
   else
     echo "Wrong"

?>
