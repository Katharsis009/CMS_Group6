<?php
require('complaintlist.php');
$id = $_REQUEST['id']; //get login_id from the delete button's row
$queryuser = "DELETE FROM complaint WHERE complaint_id = $id"; //delete information from USER table
$querylogin = "DELETE FROM resolve WHERE complaint_id = $id";  //delete information from LOGIN table
$resultuser = mysqli_query($con,$queryuser) or die ( mysqli_error());
$resultlogin = mysqli_query($con,$querylogin) or die ( mysqli_error());
header("location:complaintlist.php"); //redirect to admin.php to refresh
?>