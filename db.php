<?php

try {
    $db = new PDO('mysql:host=mysql;dbname=moviedb;port=3306', root, mysecretpassword);
    //Default error mode is SILENT but I want to see my error while developing
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (Exception $e){
    echo ("Can not connect to database. Check serverVars:" .
          $e->getMessage() . $e->getFile());
}
?>
