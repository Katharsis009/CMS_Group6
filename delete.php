<?php
require('admin.php');
$id = $_REQUEST['id']; //get login_id from the delete button's row
$queryuser = "DELETE FROM user WHERE login_id = $id"; //delete information from USER table
$querylogin = "DELETE FROM login WHERE login_id = $id";  //delete information from LOGIN table
$resultuser = mysqli_query($con,$queryuser) or die ( mysqli_error());
$resultlogin = mysqli_query($con,$querylogin) or die ( mysqli_error());
header("location:admin.php"); //redirect to admin.php to refresh
?>