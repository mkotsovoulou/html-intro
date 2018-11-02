<?php
function getMovieCategories() {

  include("db.php"); //includes the file with the connection details
  try {
    $query = $db->query("select * from Movie_Categories");
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
  } catch (Exception $e) {
     echo "Error in SQL query";
     exit;
  }
  return $results;
}

function getMovies() {

  include("db.php"); //includes the file with the connection details
  try {
    $query = $db->query("select * from Movies");
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
  } catch (Exception $e) {
     echo "Error in SQL query";
     exit;
  }
  return $results;
}

function getMovieByTitle($title) {

  include("db.php"); //includes the file with the connection details
  try {
    $title = '%' . strtolower($title) . '%';
    $query = $db->prepare("select * from Movies where lower(title) like ? ");
    $query->bindValue(1, $title);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
  } catch (Exception $e) {
     echo "Error in SQL query";
     exit;
  }
  return $results;
}


function getMovieByTitleCost($title, $cost) {

  include("db.php"); //includes the file with the connection details
  try {
    $title = '%' . strtolower($title) . '%';
    $query = $db->prepare("select * from Movies where lower(title) like ? and cost < ?");
    $query->bindValue(1, $title);
    $query->bindValue(2, $cost);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
  } catch (Exception $e) {
     echo "Error in SQL query";
     exit;
  }
  return $results;
}

?>
