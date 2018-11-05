<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="container.css" rel="stylesheet">
</head>
<body>

    <?php
	include("dbFunctions.php");
   $categories = getMovieCategories();

	?>

	<center><h1>Insert Movies</h1></center>
	<div class="container container-small">

  	<form action="executeInsertMovie.php" method="post">
  		<div class="form-group">
    		<label for="title">Movie Title</label>
    		<input type="text" class="form-control" id="title" 	name="title"	placeholder="Movie Title">
  		</div>
  		<div class="form-group">
    		<label for="category">Category</label>
    		<select class="form-control" id="category" name="category">
                <?php
                foreach ($categories as $row){
                echo '<option value="' . $row["category_id"]. '">' .$row["category_name"]. '</option>';
                }
                ?>
    		</select>
  		</div>
    		<label for="py">Production Year</label>
    		<input type="text" class="form-control" id="py" name="py" 		placeholder="ex. 1995">
    		<label for="price">Rental Price ($)</label>
    		<input type="text" class="form-control" id="price" 	name="price"	placeholder="ex. 5">
        <br>
		<button type="sumbit" class="btn btn-primary">Save</button>
	</form>
    </div>


</body>
</html>
