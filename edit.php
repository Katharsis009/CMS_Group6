<?php
include('dbcon.php');

session_start();
if($_SESSION['loginid']){ //checks if user is logged in
$id = $_SESSION['loginid'];
// $db_name = "id20240982_deliverydb";
// $db_username = "id20240982_root";
// $db_pass = "1CvH@Re<xZdVqACG";
// $db_host = "localhost";
// $con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_error()); //Connect to server
$query = "SELECT * from user where login_id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
}

else{
header("location:login.php"); // redirects if user is not logged in
}
?>

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<center>
<title>Edit User</title>
</head>

<body id="myPage">
<div class="w3-top">
 <div class="w3-bar w3-theme-d5 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home w3-margin-right"></i>News</a>
  <a href="complaintlist.php" class="w3-bar-item w3-button w3-hide-small w3-hover-teal">Forms</a>
  <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-hover-teal">About</a>
  <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-hover-teal">Contact</a>
  <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search">Logout</a>
  <a href="user.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal w3-white" title="Search">Profile</a>
  </div>
  </div>
  
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button w3-darkgreen">News</a>
    <a href="#work" class="w3-bar-item w3-button">Forms</a>
    <a href="#pricing" class="w3-bar-item w3-button">About</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Profile</a>
  </div>
<br><br><br>
<center>
<img src="LogoW.png" alt="image"></center>
<h1>Edit User Profile</h1>

<?php

if(isset($_POST['form']) && $_POST['form']==1){
$eid = $_REQUEST['id'];
$eFirstname = $_REQUEST['firstname']; //variable for taken firstname
$eMiddlename = $_REQUEST['middlename']; //variable for taken middlename
$eLastname = $_REQUEST['lastname']; //variable for taken lastname
$eGender = $_REQUEST['gender']; //variable for taken gender
$eBirthday = $_REQUEST['birthday']; //variable for taken birthday
$eBirthplace = $_REQUEST['birthplace']; //variable for taken birthplace
$eStatus = $_REQUEST['status']; //variable for taken status
$eNationality = $_REQUEST['nationality']; //variable for taken nationality
$eOccupation = $_REQUEST['occupation']; //variable for taken occupation
$ePhonenumber = $_REQUEST['phonenumber']; //variable for taken phonenumber
$eEmailadd = $_REQUEST['emailadd']; //variable for taken emailaddress
$eStreetAdd = $_REQUEST['streetadd']; //variable for taken streetaddress

//update the variables from form input
$update = "update user set  first_name = '".$eFirstname."', 
							middle_name = '".$eMiddlename."', 
							last_name = '".$eLastname."', 
							gender = '".$eGender."', 
							birthday = '".$eBirthday."', 
							place_of_birth = '".$eBirthplace."', 
							status = '".$eStatus."', 
							nationality = '".$eNationality."', 
							occupation = '".$eOccupation."', 
							phone_num = '".$ePhonenumber."', 
							email_add = '".$eEmailadd."', 
							street_add = '".$eStreetAdd."' where login_id='".$eid."'";
								

mysqli_query($con, $update) or die(mysqli_error());
header("location:user.php"); //redirect back to user.php
}

else {
?>

<table>
<form name = "form" method = "post" action =""> 
<input type = "hidden" name = "form" value = "1" />
<input name = "id" type = "hidden" value = "<?php echo $id;?>" />


<center>
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
<td><input type="submit" name ="submit" value="Update" class="w3-theme-d5"/></td> <!-- REGISTER BUTTON -->
</tr>

</table>
</center>

	<br />
	<br />
</form> <!-- END OF FORM -->


<?php } ?>

</body>
</html>

<style>


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
  color: #00685d;
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