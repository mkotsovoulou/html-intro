<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>

	<?php
      $x = 10;
      $name = "Maira";
      $ok = FALSE;
  //    echo 'ok =' . $ok;
	//		echo 'hello' . $name . $x .'<br>';

     $courses =
        array("WWW", "MATH", "JAVA", "English", "MOBILE");
    // print_r($courses);
     echo '<br>';
   //  echo $courses[2];
   //  echo count($courses);
    echo '<select name="courses" id="courses">';
     for ($row=0; $row<count($courses); $row++ ) {
       echo '<option value="' . $courses["id"]. '">' . $courses["name"]. '</option>';
       echo '<br>';
     }
  echo '</select>';
  ?>
  <select name="courses" id="courses">
    <?php  for ($row=0; $row<count($courses); $row++ ) { ?>
   <option value="<?php echo $courses[$row]; ?>"> <?php echo $courses[$row]; ?> </option>
    <?php } ?>

  </select>
  <br>

</body>
</html>


