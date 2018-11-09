<?php session_start();
unset($_SESSION["user"]);
session_destroy();
?>
<h1>
  you are logged out.
</h1>
<meta http-equiv="Refresh" content="2; url=index.php">
