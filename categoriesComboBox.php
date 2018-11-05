<select name="category" id="category">
<?php
include('dbFunctions.php');
$categories = getMovieCategories();
echo count($categories);
foreach ($categories as $row  ) {
       echo '<option value="' . $row["category_id"]. '">' . $row["category_name"] . '</option>';
       echo '<br>';
     }
  ?>
</select>
