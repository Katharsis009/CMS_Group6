<?php

session_start(); //starts the session
if($_SESSION['loginid']){ //checks if user is logged in
$loginId = $_SESSION['loginid'];
}

else{
header("location:login.php"); // redirects if user is not logged in
}

?>

<html>

<head>
<title> Admin Page </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href ="LogoW.png" type = "image/x-icon"> <!-- BROWSER TAB ICON -->
</head>

<body>
<div class="w3-top">
<div class="w3-bar w3-theme-d5 w3-left-align">
<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
<a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home w3-margin-right"></i>News</a>
<a href="complaintlist.php" class="w3-bar-item w3-button w3-hide-small w3-hover-teal">Forms</a>
<a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-hover-teal">About</a>
<a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-hover-teal">Contact</a>
<a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal">Logout</a>
<a href="user.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal">Profile</a>
<a href="admin.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal w3-white">User Approval</a>

<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button w3-darkgreen">News</a>
    <a href="#work" class="w3-bar-item w3-button">Forms</a>
    <a href="#pricing" class="w3-bar-item w3-button">About</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Profile</a>
</div>
</div>
<div class ="w3-center">
<h2> Account Verification </h2>
</div>

<form id="filterForm" action="admin.php" method="POST">
  <label for="filter">Filter</label>
  <input type = "radio" name = "filter" id="None" value="None" onclick="submitFilter()"/>None
  <input type = "radio" name = "filter" id="Approved" value="Approved" onclick="submitFilter()"/>Approved
  <input type = "radio" name = "filter" id="Rejected" value="Rejected" onclick="submitFilter()"/>Rejected
</form>

<script>
  function submitFilter() {
    document.getElementById("filterForm").submit();
  }
</script>

<br><br>
<!-- DISPLAY LIST OF CITIZEN USERS -->
<table class="w3-table w3-striped w3-bordered w3-content w3-border">

<tr>
<td>ID</td>
<td>First Name</td>
<td>Middle Name</td>
<td>Last Name</td>
<td>Gender</td>
<td>Birthday</td>
<td>Birthplace</td>
<td>Status</td>
<td>Nationality</td>
<td>Occupation</td>
<td>Phone Number</td>
<td>Email Address</td>
<td>Street Address</td>
<td>Account Verification</td>
<td><strong>Approve</strong></td>
<td><strong>Reject</strong></td>
</tr>

<?php
include('dbcon.php');
?>

<?php
if(isset($_POST['filter'])) {
  $filter = $_POST['filter'];

  switch($filter) {
    case "None":
      echo "<h4>Current Filter: None</h4>";
      $query = "SELECT * from user where account_type = 'Citizen'"; //filter display to citizen account types only
      break;
    case "Approved":
      echo "<h4>Current Filter: Approved</h4>";
      $query = "SELECT * from user where account_type = 'Citizen' and account_verification = 'Approved'"; //filter display to citizen account types only
      break;
    case "Rejected":
      echo "<h4>Current Filter: Rejected</h4>";
      $query = "SELECT * from user where account_type = 'Citizen' and account_verification = 'Rejected'"; //filter display to citizen account types only
  }


$results = mysqli_query($con, $query); //Query the users table


while($row = mysqli_fetch_array($results)){ //list all of citizen type users ?>
<tr>
<td><?php echo $row["user_id"]; ?></td>
<td><?php echo $row["first_name"]; ?></td>
<td><?php echo $row["middle_name"]; ?></td>
<td><?php echo $row["last_name"]; ?></td>
<td><?php echo $row["gender"]; ?></td>
<td><?php echo $row["birthday"]; ?></td>
<td><?php echo $row["place_of_birth"]; ?></td>
<td><?php echo $row["status"]; ?></td>
<td><?php echo $row["nationality"]; ?></td>
<td><?php echo $row["occupation"]; ?></td>
<td><?php echo $row["phone_num"]; ?></td>
<td><?php echo $row["email_add"]; ?></td>
<td><?php echo $row["street_add"]; ?></td>
<td><?php echo $row["account_verification"]; ?></td>
<td><a href="approve.php? id=<?php echo $row["user_id"]; ?>">Approve</a></td> <!-- CHANGE ACC_VERIF TO APPROVED -->
<td><a href="delete.php? id=<?php echo $row["login_id"]; ?>">Delete</a></td> <!-- DELETE REQUEST -->
</tr>

<?php 
}
} ?>

</table>
<br><br><br>
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
