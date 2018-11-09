<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
<?php
  if (isset($_POST["submit"])) {
    $_SESSION["user"] = $_POST["user"]; ?>
  <meta http-equiv="Refresh" content="0; url=index.php">
<?php
  }
  else { ?>

<form action="#" method="POST">
<input type="text" name="user" id="user">
<input type="submit" id="submit" name="submit" value="login">
</form>
<?php } ?>

</body>
</html>
