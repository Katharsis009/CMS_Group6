<?php
// $db_name = "id20240982_deliverydb"; //DATABASE NAME FOR THE PROJECT
// $db_username = "id20240982_root";
// $db_pass = "1CvH@Re<xZdVqACG";
// $db_host = "localhost";


$db_name = "id20240982_deliverydb"; //DATABASE NAME FOR THE PROJECT
$db_username = "root";
$db_pass = "";
$db_host = "localhost";

$con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_error()); //connect to server

?>