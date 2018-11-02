<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Search Movies</title>
</head>
<body>
<?php
  $search = $_GET['title'];
  echo '<h1>Searching for:' . $search . '</h1>';

  include('dbFunctions.php');
  $movies = getMovieByTitle($search);
?>

  <table>
    <tr> <th>ID </th> <th> CATEGORY </th></tr>
    <?php
    foreach ($movies as $row) {
        echo '<tr>';
        echo '<td>' . $row["title"]   . '</td>';
        echo '<td>' . $row["rental_price"] . '</td>';
        echo '</tr>';
    } ?>

  </table>


</body>
</html>
