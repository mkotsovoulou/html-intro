<?php
session_start();
$id= $_POST['id'];
$email= $_POST['email'];

include("dbFunctions.php");

if(login($id,$email))
{
    echo "Connected";
}else{
    echo "Wrong PIN or Password";
}

?>
