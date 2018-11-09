<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="container.css" rel="stylesheet">
</head>
<body>

    <?php
	include("dbFunctions.php");
	?>

	<center><h1>Login</h1></center>
	<div class="container container-small">

  	<form action="loginCheck.php" method="post">
  		<div class="form-group">
    		<label for="id">ID</label>
    		<input type="text" class="form-control" name ="id" id="id" placeholder="ex. 854595">
  		</div>
    		<label for="email">Email</label>
    		<input type="text" name ="email" class="form-control" id="email" placeholder="ex. gate7@gate7.gr">
        <br>
		<button type="submit" class="btn btn-primary">Save</button>
	</form>
    </div>

</body>
</html>
