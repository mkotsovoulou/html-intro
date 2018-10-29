<?php

function get_products_all() {
    require("db.php");
    try {
        $results = $db->query("SELECT ... FROM ... ORDER BY ... ASC");
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }
    $data = $results->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}

?>
