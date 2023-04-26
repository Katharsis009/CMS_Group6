<?php
require('admin.php');
$id = $_REQUEST['id']; //get login_id from the delete button's row

$transfer1 = 'INSERT INTO login_archive (login_id, username, password) SELECT login_id, username, password FROM login where login_id = '.$id.''; 
mysqli_query($con, $transfer1) or die(mysqli_error());

$transfer2 = 'INSERT INTO user_archive (user_id, first_name, middle_name, last_name , gender, birthday, place_of_birth, status, nationality, occupation, phone_num, email_add, street_add, account_type, login_id, account_verification) SELECT user_id, first_name, middle_name, last_name , gender, birthday, place_of_birth, status, nationality, occupation, phone_num, email_add, street_add, account_type, login_id, account_verification FROM user where user_id = '.$id.''; 
mysqli_query($con, $transfer2) or die(mysqli_error());

$queryuser = "DELETE FROM user WHERE login_id = $id"; //delete information from USER table
$querylogin = "DELETE FROM login WHERE login_id = $id";  //delete information from LOGIN table
$resultuser = mysqli_query($con,$queryuser) or die ( mysqli_error());
$resultlogin = mysqli_query($con,$querylogin) or die ( mysqli_error());
?>