<?php
require('admin.php');
$id = $_REQUEST['id']; //retrieve the id from what row was approve selected
$query = "SELECT * from user WHERE user_id = '$id'"; //match the id
$result = mysqli_query($con, $query) or die ( mysqli_error()); 
$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
<title>Approve User</title>
</head>

<body>
<?php error_reporting(E_ERROR | E_PARSE);
//set account_verification to approved
$update = "update user set account_verification = '". "Approved" ."' where user_id = '".$id."'"; 
mysqli_query($con, $update) or die(mysqli_error());
header("location:admin.php"); //redirect to admin.php to refresh

?>

</body>
</html>