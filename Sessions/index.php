<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
<h1>
  Welcome to our site </h1>
  <?php
  if (isset($_SESSION["user"])) {
      echo $_SESSION["user"];
      echo '<br><a href="exitSession.php">Logout </a>';
  }
  else
    echo 'Please <a href="startSession.php">Login</a>';?>





</body>
</html>
