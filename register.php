<style>
body {
  font-family: Arial, sans-serif;
  background-color: #00685d;
}

.register-container {
  width: 500px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  box-shadow: 0 0 10px #ccc;
}

h1 {
  text-align: center;
  margin-bottom: 30px;
  color: white;
}

input[type="text"],
input[type="email"],
input[type="password"] ,
input[type="date"]
 {
	 text-align: center;
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size: 16px;
}



input[type="submit"] {
	text-align: center;
  width: 100%;
  padding: 10px;
  background-color: #3e8e41;
  color: #fff;
  border: 0;
  cursor: pointer;
  font-size: 16px;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}
img {
margin-bottom: -60px;
width: 250px;
length: 250px;
padding: 50px 20px;
}
</style>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="icon" href ="LogoW.png" type = "image/x-icon"> <!-- BROWSER TAB ICON -->
<title> Registration Page</title>
<center>
<img src="LogoW.png" alt="image"> 
<!-- </center> -->
</head>

<body id="myPage">
<div class="w3-top">
 <div class="w3-bar w3-theme-d5 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home w3-margin-right"></i>News</a>
  <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-hover-teal">About</a>
  <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-hover-teal">Contact</a>
  <a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal w3-white" title="Search">Register</a>
  <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search">Login</a>
  </div>
  </div>
  
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button w3-darkgreen">News</a>
    <a href="#work" class="w3-bar-item w3-button">Forms</a>
    <a href="#pricing" class="w3-bar-item w3-button">About</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Profile</a>
  </div>
<h1> Registration Page </h1> <!-- TITLE OF THE PAGE -->

<div class="row">
      <div class="mx-auto col-7">
        <form action="register.php" method = "POST">
          <div class="form-row">
            <div class="col form-group">
              <label for="rUsername">Username</label>
              <input type="text" class="form-control" name="rUsername" id="rUsername" placeholder="juandelacruz" required>
            </div>
            <div class="col form-group">
              <label for="rPassword">Password</label>
              <input type="password" class="form-control" name="rPassword" id="rPassword" placeholder="********" required>
            </div>
          </div>
          
          <div class="form-row">
            <div class="col form-group">
              <label for="firstname">Firstname</label>
              <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Juan" required>
            </div>
            <div class="col form-group">
              <label for="middlename">Middle Name</label>
              <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Dalisay">
            </div>
            <div class="col form-group">
              <label for="lastname">Lastname</label>
              <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Dela Cruz" required>
            </div>
          </div>

          <div class="form-row">
            <div class="col">
              <label>Gender</label>
              <br>
              <div class="form-check-inline">
                <input type="radio" class="form-check-input" name="gender" value="Male" required>
                <label class="form-check-label" for="gender">Male</label>
              </div>
              <div class="form-check-inline">
                <input type="radio" class="form-check-input" name="gender" value="Female">
                <label class="form-check-label" for="gender">Female</label>
              </div>
            </div>
            <div class="col form-group">
              <label for="birthday">Birthday</label>
              <input type="date" class="form-control" name="birthday" required>
            </div>
            <div class="col form-group">
              <label for="birthplace">Birth Place</label>
              <input type="text" class="form-control" name="birthplace" placeholder="Manila City" required>
            </div>
          </div>

          <div class="form-row">
            <div class="col form-group">
              <label for="occupation">Occupation</label>
              <input type="text" class="form-control" name="occupation" placeholder="Job" required>
            </div>
            <div class="col">
              <label>Civil Status</label>
              <br>
              <div class="form-check-inline">
                <input type="radio" class="form-check-input" id="status" value="Single" required>
                <label class="form-check-label" for="status">Single</label>
              </div>
              <div class="form-check-inline">
                <input type="radio" class="form-check-input" name="status" value="Married">
                <label class="form-check-label" for="status">Married</label>
              </div>
              <div class="form-check-inline">
                <input type="radio" class="form-check-input" name="status" value="Separated">
                <label class="form-check-label" for="status">Separated</label>
              </div>
              <div class="form-check-inline">
                <input type="radio" class="form-check-input" name="status" value="Divorced">
                <label class="form-check-label" for="status">Divorced</label>
              </div>
              <div class="form-check-inline">
                <input type="radio" class="form-check-input" name="status" value="Widowed">
                <label class="form-check-label" for="status">Widowed</label>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="col form-group">
              <label for="nationality">Nationality</label>
              <input type="text" class="form-control" name="nationality" placeholder="Filipino" required>
            </div>
            <div class="col form-group">
              <label for="phonenumber">Phone Number</label>
              <input type="tel" class="form-control" name="phonenumber" placeholder="+639XXXXXXXXXX" pattern="+639[0-9]{10}" required>
            </div>
            <div class="col form-group">
              <label for="emailadd">Email Address</label>
              <input type="email" class="form-control" name="emailadd" placeholder="juandelacruz@gmail.com">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label for="streetadd">Address</label>
              <input type="text" class="form-control" name="streetadd" placeholder="XXX Mabuhay St. Manila City" required>
            </div>
          </div>  

          <input type="submit" name ="rSubmit" value="Register" onclick="return confirm('All information we collect shall be kept private and confidential by Barangay Philam Council and shall be used solely for legal purposes as mandated by the Data Privacy Act and other relevant laws. Information that are matters of public interest, however, may be disclosed to the public subject to applicable laws, rules, and regulations. Do you wish to continue registering?');"/>

        </form>
      </div>
    </div>

<a href = 'login.php'> <p> Have an Account? Login Here! </p></a></td> <!-- REDIRECT TO LOGIN -->
<a href = 'index.php'> <p> Return to Home </p></a></td> <!-- REDIRECT TO Home Page -->  
</center>
<br>
<br>

<!-- Start of PHP--> 
<?php 
include('dbcon.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function sendEmailNotification($username, $email) {
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
    <h4>Email: <h4>" . $email . "
    <h4>Username: <h4>" . $username . "
    <h2>You have successfully registered to CMS.</h2>
    <h3>Kindly wait for account approval.</h3>
  ";

  $mail->Body = $email_template;
  $mail->send();
}

error_reporting(E_ERROR | E_PARSE);
session_start(); //session start
if (!empty($_POST["rUsername"]) || !empty($_POST["rPassword"]) || !empty($_POST["firstname"]) || 
	!empty($_POST["middlename"]) || !empty($_POST["lastname"]) || !empty($_POST["gender"]) || 
	!empty($_POST["birthday"]) || !empty($_POST["birthplace"]) || !empty($_POST["status"]) || 
	!empty($_POST["nationality"]) || !empty($_POST["occupation"]) || !empty($_POST["phonenumber"]) || 
	!empty($_POST["emailadd"]) || !empty($_POST["streetadd"])){ //function works if fields are not empty
    
doRegister($con); //function to start
}

function doRegister($con){ //start of register function
$rUsername = $_POST['rUsername']; //variable for taken username
$rPassword = $_POST['rPassword']; //variable for taken password
$ePassword = password_hash($rPassword, PASSWORD_BCRYPT);
$uFirstname = $_POST['firstname']; //variable for taken firstname
$uMiddlename = $_POST['middlename']; //variable for taken middlename
$uLastname = $_POST['lastname']; //variable for taken lastname
$uGender = $_POST['gender']; //variable for taken gender
$uBirthday = $_POST['birthday']; //variable for taken birthday
$uBirthplace = $_POST['birthplace']; //variable for taken birthplace
$uStatus = $_POST['status']; //variable for taken status
$uNationality = $_POST['nationality']; //variable for taken nationality
$uOccupation = $_POST['occupation']; //variable for taken occupation
$uPhonenumber = $_POST['phonenumber']; //variable for taken phonenumber
$uEmailadd = $_POST['emailadd']; //variable for taken emailaddress
$uStreetAdd = $_POST['streetadd']; //variable for taken streetaddress
$uAcctype = "Citizen"; //variable for taken account type (BY DEFAULT: CITIZEN)
$uAccver = "Rejected"; //variable for taken account verification (BY DEFAULT: REJECTED)

//database details
$bool = true;

$querylogin = "SELECT * from login"; //select all from login table 
$queryuser = "SELECT * from user"; //select all from user table 
$resultslogin = mysqli_query($con, $querylogin); //query the login table
$resultsuser = mysqli_query($con, $queryuser); //query the user table

//check for duplicate usernames
while($row = mysqli_fetch_array($resultslogin)){ //display all rows from query 
$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished

if($rUsername == $table_users){ // checks if there are any matching fields
$bool = false; // sets bool to false
Print '<script>alert("Username has been taken!");</script>'; //Prompts the user if failed
}

}
//end of checking for duplicate usernames




if($bool){ // checks if bool is true
//insert data into table named LOGIN
mysqli_query($con, "INSERT INTO login (username, password) VALUES('$rUsername', '$ePassword')"); //inserts the value to table users
//end of inserting data into table named LOGIN

//get loginid from LOGIN
$idquery = "SELECT * from login"; //select all from table 
$idresults = mysqli_query($con, $idquery); //query the users table
while($idrow = mysqli_fetch_assoc($idresults)){ //display all rows from query
$table_id = $idrow['login_id']; // the first id row is passed on to $table_id, and so on until the query is finished
}
//end of get loginid from LOGIN

//insert data into table named USER (use loginid)
mysqli_query($con, "INSERT INTO user (first_name, middle_name, last_name , gender, birthday, place_of_birth, status, nationality, occupation, phone_num, email_add, street_add, account_type, login_id, account_verification) 
								VALUES('$uFirstname', '$uMiddlename' , '$uLastname' , '$uGender' , '$uBirthday' , '$uBirthplace' , '$uStatus' , '$uNationality' , '$uOccupation' 
									   , '$uPhonenumber' , '$uEmailadd' , '$uStreetAdd' , '$uAcctype', '$table_id', '$uAccver')"); //inserts the value to table users
//end of inserting data into table named USER
							
Print '<script>alert("Successfully Registered!");</script>'; //prompts the user if successful
sendEmailNotification($rUsername, $uEmailadd);
$bool = false; // sets bool to false
header("location: login.php"); // redirects the user to the login page
}

}//end of register function

?>
<!-- End of PHP--> 

<!-- Footer -->

<footer class="w3-container text-center w3-theme-d5">
	
	<br />
	<table style="margin-left: 8%; width:110%">
	  <tr>
      <td>
	  <ul class="navbar-nav" style="text-align: left; margin-left: 8%; line-height: 200%; list-style-type: none"><b>
      <li>
        <a href="index.php" style="color: white; text-align: left;">News</a>
      </li>
      <li>
        <a href="about.php" style="color: white; text-align: left">About</a>
      </li>
	  <li>
        <a href="contact.php" style="color: white; text-align: left">Contact</a>
      </li>
	  <li><br />
	  <img src="social.png" alt="social" style="width: 15%; margin-top: -5%" usemap="#social">
		<map name="social">
			<area shape="rect" coords="0,0,80,95" href="https://www.facebook.com/barangayphilamcouncil/">
		</map>
	  </li>
	  </ul>
      </td>
	<td><center>
	<p style="color:white"><b>Contact Us</b></p>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7720.234429299242!2d121.02915277908323!3d14.649287056083418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b6fddadd19cd%3A0xcc45e2dc61dce4ef!2sPhil-Am%2C%20Quezon%20City%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1675332211613!5m2!1sen!2sph" 
	        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></b>
				
		
		</center>
		
	</td>
    </tr>
		</table>
	
	<br />
	  <div class="container">
        <div class="row">
          <div class="col-12"><center>
            <p style="color: white">Copyright © 2023 Barangay Philam. Created by: Group Indonesia - Mapua University Makati. All Rights Reserved.</p>
          </center></div>
        </div>
      </div>
	  
	  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
    </footer>
</body>

</html>
