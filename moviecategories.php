<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Movie Categories</title>
</head>
<body>
<?php
  ini_set('display_errors', '1');
  include('dbFunctions.php');
  $movcat = getMovieCategories();
?>

  <table>
    <tr> <th>ID </th> <th> CATEGORY </th></tr>
    <?php
    foreach ($movcat as $row) {
        echo '<tr>';
        echo '<td>' . $row["category_id"]   . '</td>';
        echo '<td>' . $row["category_name"] . '</td>';
        echo '</tr>';
    } ?>

  </table>


</body>
</html>
