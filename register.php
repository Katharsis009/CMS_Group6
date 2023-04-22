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
<title> Registration Page</title>
<center>
<img src="LogoW.png" alt="image"></center>
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
<form action = "register.php" method="POST"> <!-- START OF FORM -->
<center>

<fieldset style="text-indent:-20px; width: 65%; padding: 1.5%;"> 
<br />
<br />
<table>

<tr>
<td><input type = "text" name = "rUsername" required = "required" placeholder = "Username"/> <!-- REGISTER USERNAME -->
<td><input type = "password" name = "rPassword" required = "required" placeholder = "Password" style= "width: 202%;"/><!-- REGISTER PASSWORD -->
</tr>

<tr>
<td><input type = "text" name = "firstname" required = "required" placeholder = "First Name"/>
<td><input type = "text" name = "middlename" required = "required" placeholder = "Middle Name"/>
<td><input type = "text" name = "lastname" required = "required" placeholder = "Last Name"/>
</tr>

<tr>
<td><input type = "text" name = "gender" required = "required" placeholder = "Gender"/>
<td><input type = "date" name = "birthday" required = "required"/>
<td><input type = "text" name = "birthplace" required = "required" placeholder = "Birthplace"/>
</tr>

<tr> 
<td><input type = "text" name = "occupation" required = "required" placeholder = "Occupation"/>
<td><input type = "text" name = "status" required = "required" placeholder = "Status"/>
<td><input type = "text" name = "nationality" required = "required" placeholder = "Nationality" /> 
</tr>


<tr> 
<td><input type = "text" name = "phonenumber" required = "required" placeholder = "Phone Number" />
<td><input type = "text" name = "emailadd" required = "required" placeholder = "Email Address" style= "width: 202%;"/>
</tr>

<tr>
<td><input type = "text" name = "streetadd" required = "required" placeholder = "Street Address" style= "width: 303%;"/>
</tr>

<tr>
<td>
<td><input type="submit" name ="rSubmit" value="Register"/></td> <!-- REGISTER BUTTON -->
</tr>

</table>
<a href = 'login.php'> <p> Have an Account? Login Here! </p></a></td> <!-- REDIRECT TO LOGIN -->
<a href = 'index.php'> <p> Return to Home </p></a></td> <!-- REDIRECT TO Home Page -->
</center>
</fieldset>
	<br />
	<br />
</form> <!-- END OF FORM -->

<!-- Start of PHP--> 
<?php error_reporting(E_ERROR | E_PARSE);
session_start(); //session start
if (!empty($_POST["rUsername"]) || !empty($_POST["rPassword"]) || !empty($_POST["firstname"]) || 
	!empty($_POST["middlename"]) || !empty($_POST["lastname"]) || !empty($_POST["gender"]) || 
	!empty($_POST["birthday"]) || !empty($_POST["birthplace"]) || !empty($_POST["status"]) || 
	!empty($_POST["nationality"]) || !empty($_POST["occupation"]) || !empty($_POST["phonenumber"]) || 
	!empty($_POST["emailadd"]) || !empty($_POST["streetadd"])){ //function works if fields are not empty
    
doRegister(); //function to start
}

function doRegister(){ //start of register function
$rUsername = $_POST['rUsername']; //variable for taken username
$rPassword = $_POST['rPassword']; //variable for taken password
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
$db_name = "id20240982_deliverydb"; //DATABASE NAME FOR THE PROJECT
$db_username = "id20240982_root";
$db_pass = "1CvH@Re<xZdVqACG";
$db_host = "localhost";
$con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_error()); //connect to server
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
mysqli_query($con, "INSERT INTO login (username, password) VALUES('$rUsername', '$rPassword')"); //inserts the value to table users
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
