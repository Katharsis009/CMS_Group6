<?php
require('admin.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function sendEmailNotification($email) {
  $mail = new PHPMailer(true);
  //$mail->SMTPDebug = 2;
  $mail->isSMTP();
  $mail->SMTPAuth   = true;

  $mail->Host       = 'smtp.gmail.com';
  $mail->Username   = 'complaintmanagementsystem123@gmail.com'; //TODO: 
  $mail->Password   = 'duxwpgfeiptdbklz';
  
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;

  $mail->setFrom('complaintmanagementsystem123@gmail.com', 'CMS');
  $mail->addAddress($email);

  $mail->isHTML(true);
  $mail->Subject = 'Successful Registration to CMS';

  $email_template = "
    <h2>Your account is approved.</h2>
  ";

  $mail->Body = $email_template;
  $mail->send();

  echo "Message has been sent.";
}

$id = $_REQUEST['id']; //retrieve the id from what row was approve selected
$query = "SELECT * from user WHERE user_id = '$id'"; //match the id
$result = mysqli_query($con, $query) or die ( mysqli_error()); 
$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
<title>Approve User</title>
</head>

<body id="myPage">
<?php error_reporting(E_ERROR | E_PARSE);
//set account_verification to approved
$update = "update user set account_verification = '". "Approved" ."' where user_id = '".$id."'"; 
mysqli_query($con, $update) or die(mysqli_error());

sendEmailNotification($row["email_add"]);

header("location:admin.php"); //redirect to admin.php to refresh
exit();
?>

</body>
</html>