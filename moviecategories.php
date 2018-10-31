<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Movie Categories</title>
</head>
<body>
<?php
  include("db.php"); //includes the file with the connection details
  try {
    $query = $db->query("select * from Movie_Categories");
    $movcat = $query->fetchAll(PDO::FETCH_ASSOC);
  } catch (Exception $e) {
     echo "Error in SQL query";
     exit;
  }
  ?>

  <table>
    <tr> <th>ID </th> <th> CATEGORY </th></tr>
    <?php
    foreach ($movcat as $row) {
        echo '<tr>';
        echo '<td>'. $row["category_id"] . '</td>';
        echo '<td>' . $row["category_name"] . '</td>';
        echo '</tr>';
    } ?>
  </table>


</body>
</html>
