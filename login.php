<?php 
include('dbcon.php');

error_reporting(E_ERROR | E_PARSE);
session_start(); //start the session
if (!empty($_POST["lUsername"]) || !empty($_POST["lPassword"])){ //function works if fields are not empty
doLogin($con);
}


function doLogin($con){ //start of login function
$lUsername = $_POST['lUsername']; //variable for taken username
$lPassword = $_POST['lPassword']; //variable for taken password

//database details
// $db_name = "id20240982_deliverydb"; //DATABASE NAME FOR THE PROJECT
// $db_username = "id20240982_root";
// $db_pass = "1CvH@Re<xZdVqACG";
// $db_host = "localhost";

// $db_name = "id20240982_deliverydb"; //DATABASE NAME FOR THE PROJECT
// $db_username = "root";
// $db_pass = "";
// $db_host = "localhost";

// $con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_error()); //connect to server
$querylogin = "SELECT * from login WHERE username = '$lUsername'"; //select matching username from login table 
$resultslogin = mysqli_query($con, $querylogin); //query the login table
$existslogin = mysqli_num_rows($resultslogin); //Checks if username exists


if($existslogin != ""){ //if there are no returning rows or no existing username
while($row = mysqli_fetch_assoc($resultslogin)){ //display all rows from query
$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
$table_password = $row['password']; // the first password row is passed on to $table_password, and so on until the query is finished
$table_id = $row['login_id']; // the first id row is passed on to $table_id, and so on until the query is finished
}

//$lPassword == $table_password

if(($lUsername == $table_users) && (password_verify($lPassword, $table_password))){ // checks if there are any matching fields

//checks if login_id from LOGIN is matching with login_id from USER
$queryverif = "SELECT * from user WHERE login_id = '$table_id'"; //select matching login_id from user table 
$resultsverif = mysqli_query($con, $queryverif); //query the user table
$existsverif = mysqli_num_rows($resultsverif); //Checks if user exists

if($existsverif != ""){ //if matching, check verification if approved or rejected
while($rowB = mysqli_fetch_assoc($resultsverif)){ //display all rows from query
$table_accverif = $rowB['account_verification']; // the first account_verification row is passed on to $table_accverif, and so on until the query is finished
}

if($table_accverif == "Approved"){ //if approved proceed to login
$_SESSION['loginid'] = $table_id; //set the loginid in a session. This serves as a global variable
header("location: index.php"); // redirects the user to the authenticated home page
}

else{ //if rejected show error message
Print '<script>alert("Account not yet approved!");</script>'; //Prompts the user
}
	
}

}

else{ //if details are incorrect
Print '<script>alert("Incorrect details!");</script>'; //Prompts the user
Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
}

} 

} //end of login function
?>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href ="LogoW.png" type = "image/x-icon"> <!-- BROWSER TAB ICON -->
<title> Login Page</title>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="bg.png" alt="boat" style="width:100%;min-height:350px;max-height:570px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    
  </div>
</div>
</head>

<body id="myPage">
<div class="w3-top">
 <div class="w3-bar w3-theme-d5 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home w3-margin-right"></i>News</a>
  <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-hover-teal">About</a>
  <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-hover-teal">Contact</a>
  <a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search">Register</a>
  <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal w3-white" title="Search">Login</a>
  </div>
  </div>
  
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button w3-darkgreen">News</a>
    <a href="#work" class="w3-bar-item w3-button">Forms</a>
    <a href="#pricing" class="w3-bar-item w3-button">About</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Profile</a>
  </div>
<br/>
<form action = "login.php" method="POST"> <!-- START OF FORM -->
<center>


<fieldset style="text-indent:-20px; width: 65%; padding: 1.5%;"> 
<br />
<br />
<table>

<img src="person1.png" alt="image" style = "float:left; margin-top:-10%;margin-left:5%;margin-right:-5%; width=100%">

<tr>
  
<td><input type = "text" name = "lUsername" required = "required" placeholder = "Username"/> <!-- REGISTER USERNAME -->
</tr>

<tr>

<td><input type = "password" name = "lPassword" required = "required" placeholder = "Password"/> <!-- REGISTER PASSWORD -->
</tr>

<tr>
<td><input type="submit" name ="lSubmit" value="Login"/></td> <!-- REGISTER BUTTON -->
</tr>


</table>

<a href = 'register.php'> <p> Don't Have an Account? Register Here! </p></a></td> <!-- REDIRECT TO LOGIN -->
<a href = 'index.php'> <p> Return to Home </p></a></td> <!-- REDIRECT TO Home Page -->
</center>
</fieldset>
	<br />
	<br />
</form> <!-- END OF FORM -->


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



<style>
body {
  font-family: Arial, sans-serif;
  background-color: #00685d;
}


.login-container {
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
input[type="password"] {
	text-align: center;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
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
width: 300px;
length: 300px;
padding: 50px 20px;
}
</style>
