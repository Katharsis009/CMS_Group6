<?php
include('dbcon.php');

error_reporting(E_ERROR | E_PARSE);
session_start(); //starts the session
if($_SESSION['loginid']){ //checks if user is logged in
$loginId = $_SESSION['loginid'];
$status = "yes";
}

else{
header("location:login.php"); // redirects if user is not logged in
}

?>

<html>

<head>
<title> User Page </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href ="LogoW.png" type = "image/x-icon"> <!-- BROWSER TAB ICON -->
</head>

<body>
<?php error_reporting(E_ERROR | E_PARSE);
session_start(); //start the session
//database details
// $db_name = "id20240982_deliverydb"; //DATABASE NAME FOR THE PROJECT
// $db_username = "id20240982_root";
// $db_pass = "1CvH@Re<xZdVqACG";
// $db_host = "localhost";
// $con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_error()); //Connect to server
$query = "SELECT * from user WHERE login_id = '$loginId'"; //select matching login_id from user table 
$results = mysqli_query($con, $query); //Query the user table
$exists = mysqli_num_rows($results); //Checks if login_id exists

if($exists != ""){ //if there are no returning rows or no existing username
while($row = mysqli_fetch_assoc($results)){ //display all rows from query
$table_acctype = $row['account_type']; // the first id row is passed on to $table_users, and so on until the query is finished
}

if(($table_acctype == "Admin")){ //verify is the account type is admin from USER
$user = "Admin"; //if admin set to $user to admin
}

else{ //verify is the account type is citizen from USER
$user = "Citizen"; //if admin set to $user to citizen
}

}

?>
<div class="w3-top">
<div class="w3-bar w3-theme-d5 w3-left-align">
<?php 
if ($status == "yes"){ //if there is a user logged in
	
if ($user == "Admin"){ //if the user is an admin
  echo "<a href='index.php' class='w3-bar-item w3-button'>" . "<i class='fa fa-home w3-margin-right'>" . "</i>" . "News" . "</a>";
  echo "<a href='complaintlist.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal'>" . "Forms" . "</a>";
  echo "<a href='about.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal'>" . "About" . "</a>";
  echo "<a href='contact.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal'>" . "Contact". "</a>";
  echo "<a href='logout.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal' title='Search'>" . "Logout" . "</a>";
  echo "<a href='user.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal  w3-white' title='Search'>" . "Profile" . "</a>";
  echo "<a href='admin.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal' title='Search'>" . "User Approval" . "</a>";

  
  //<!-- Navbar on small screens -->
   echo "<div id='navDemo' class='w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium'>";
   echo "<a href='index.php' class='w3-bar-item w3-button w3-darkgreen'>" . "News" . "</a>";
   echo "<a href='complaintlist.php' class='w3-bar-item w3-button'>" . "Forms" . "</a>";
   echo "<a href='about.php' class='w3-bar-item w3-button'>" . "About" . "</a>";
   echo "<a href='user.php' class='w3-bar-item w3-button'>" . "Contact" . "</a>";
   echo "<a href='admin.php' class='w3-bar-item w3-button'>" . "Profile" . "</a>";
   
} //end of "if the user is an admin"

else { //if the user is a citizen
  echo "<a href='index.php' class='w3-bar-item w3-button'>" . "<i class='fa fa-home w3-margin-right'>" . "</i>" . "News" . "</a>";
  echo "<a href='complaintform.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal'>" . "Forms" . "</a>";
  echo "<a href='about.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal'>" . "About" . "</a>";
  echo "<a href='contact.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal'>" . "Contact". "</a>";
  echo "<a href='logout.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal' title='Search'>" . "Logout" . "</a>";
  echo "<a href='user.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal  w3-white' title='Search'>" . "Profile" . "</a>";

  
  //<!-- Navbar on small screens -->
   echo "<div id='navDemo' class='w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium'>";
   echo "<a href='index.php' class='w3-bar-item w3-button w3-darkgreen'>" . "News" . "</a>";
   echo "<a href='complaintform.php' class='w3-bar-item w3-button'>" . "Forms" . "</a>";
   echo "<a href='about.php' class='w3-bar-item w3-button'>" . "About" . "</a>";
   echo "<a href='contact.php' class='w3-bar-item w3-button'>" . "Contact" . "</a>";
   echo "<a href='user.php' class='w3-bar-item w3-button'>" . "Profile" . "</a>";
	
} //end of "if the user is a citizen"

} //end of "if there is a user logged in"

?>

<?php 
if ($status == "no"){ //if there is no user logged in
  echo "<a href='index.php' class='w3-bar-item w3-button w3-white'>" . "<i class='fa fa-home w3-margin-right'>" . "</i>" . "News" . "</a>";
  echo "<a href='about.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal'>" . "About" . "</a>";
  echo "<a href='contact.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal'>" . "Contact". "</a>";
  echo "<a href='register.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal' title='Search'>" . "Register" . "</a>";
  echo "<a href='login.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal' title='Search'>" . "Login" . "</a>";

  //<!-- Navbar on small screens -->
   echo "<div id='navDemo' class='w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium'>";
   echo "<a href='index.php' class='w3-bar-item w3-button w3-darkgreen'>" . "News" . "</a>";
   echo "<a href='about.php' class='w3-bar-item w3-button'>" . "About" . "</a>";
   echo "<a href='contact.php' class='w3-bar-item w3-button'>" . "Contact" . "</a>";
   
} //end of "if there is no user logged in"

?>


<?php error_reporting(E_ERROR | E_PARSE);
session_start(); //start the session
//database details
// $db_name = "id20240982_deliverydb"; //DATABASE NAME FOR THE PROJECT
// $db_username = "id20240982_root";
// $db_pass = "1CvH@Re<xZdVqACG";
// $db_host = "localhost";
// $con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_error()); //Connect to server
$query = "SELECT * from user WHERE login_id = '$loginId'"; //select matching login_id from user table 
$results = mysqli_query($con, $query); //Query the users table
$exists = mysqli_num_rows($results); //Checks if login_id exists

if($exists != ""){ //if there are no returning rows or no existing username
while($row = mysqli_fetch_assoc($results)){ //display all rows from query
$table_loginid = $row['login_id']; // the first login_id row is passed on to $table_loginid, and so on until the query is finished
$table_firstname = $row['first_name']; // the first first_name row is passed on to $table_firstname, and so on until the query is finished
$table_middlename = $row['middle_name']; // the first middle_name row is passed on to $table_middlename, and so on until the query is finished
$table_lastname = $row['last_name']; // the first last_name row is passed on to $table_lastname, and so on until the query is finished
$table_gender = $row['gender']; // the first gender row is passed on to $table_gender, and so on until the query is finished
$table_birthday = $row['birthday']; // the first birthday row is passed on to $table_birthday, and so on until the query is finished
$table_birthplace = $row['place_of_birth']; // the first place_of_birth row is passed on to $table_birthplace, and so on until the query is finished
$table_status = $row['status']; // the first status row is passed on to $table_status, and so on until the query is finished
$table_nationality = $row['nationality']; // the first nationality row is passed on to $table_nationality, and so on until the query is finished
$table_occupation = $row['occupation']; // the first occupation row is passed on to $table_occupation, and so on until the query is finished
$table_phonenum = $row['phone_num']; // the first phone_num row is passed on to $table_phonenum, and so on until the query is finished
$table_emailadd = $row['email_add']; // the first email_add row is passed on to $table_emailadd, and so on until the query is finished
$table_streetadd = $row['street_add']; // the first street_add row is passed on to $table_streetadd, and so on until the query is finished

}

if(($table_loginid == $loginId)){ // checks if there are any matching fields
$uFirstname = $table_firstname; //variable for taken firstname
$uMiddlename = $table_middlename; //variable for taken middlename
$uLastname = $table_lastname; //variable for taken lastname
$uGender = $table_gender; //variable for taken gender
$uBirthday = $table_birthday; //variable for taken birthday
$uBirthplace = $table_birthplace; //variable for taken birthplace
$uStatus = $table_status; //variable for taken status
$uNationality = $table_nationality; //variable for taken nationality
$uOccupation = $table_occupation; //variable for taken occupation
$uPhonenumber = $table_phonenum; //variable for taken phonenumber
$uEmailadd = $table_emailadd; //variable for taken emailaddress
$uStreetAdd = $table_streetadd; //variable for taken streetaddress

}

else{ //if details are incorrect
Print '<script>alert("Error!");</script>'; //Prompts the user
//Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
}

}

?>
</div>
</div>
</div>
<br><br>
<div class ="w3-center">
<h2> Edit User Profile </h2>
</div>
<!-- DISPLAY USER INFORMATION -->
<table class ="w3-table w3-striped w3-bordered w3-content w3-border"> 
<br>
<br>
<tr>
<td>Name: </td><td> <?php echo $uFirstname . " " . $uMiddlename . " " . $uLastname ?></td>
</tr>

<tr>
<td>Gender: </td><td> <?php echo $uGender ?></td>
</tr>

<tr>
<td>Status: </td><td> <?php echo $uStatus ?></td>
</tr>

<tr>
<td>Address: </td><td> <?php echo $uStreetAdd ?></td>
</tr>

<tr>
<td>Birthday: </td><td> <?php echo $uBirthday ?></td>
</tr>

<tr>
<td>Birthplace: </td><td> <?php echo $uBirthplace ?></td>
</tr>

<tr>
<td>Nationality: </td><td> <?php echo $uNationality ?></td>
</tr>

<tr>
<td>Occupation: </td><td> <?php echo $uOccupation ?></td>
</tr>

<tr>
<td>Email Address: </td><td> <?php echo $uEmailadd ?></td>
</tr>
<tr>
<td>Phone Number: </td><td> <?php echo $uPhonenumber ?></td>
</tr>
<tr>
<td><a href = "edit.php? id = <?php echo $loginId; ?> "> Edit </a></td>
</tr>
</table>

<div class="w3-row-padding w3-padding-64 w3-white" id="work">
<div class="w3-quarter w3-white">
<br>
<br><br>
<br><br>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
 
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  
  </div>
  </div>
</div>

</div>
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
	  <img src="social.png" alt="social" style="width: 10%; margin-top: -5%" usemap="#social">
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
