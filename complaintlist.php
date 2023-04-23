<?php 
include('dbcon.php');

error_reporting(E_ERROR | E_PARSE);
session_start(); //starts the session
if($_SESSION['loginid']){ //checks if user is logged in
$loginId = $_SESSION['loginid'];
$status = "yes";
}

else{
$status = "no";
header("location:login.php"); // redirects if user is not logged in
}

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

<html>

<head>
<title> Admin Page </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	
<div class="w3-top">
 <div class="w3-bar w3-theme-d5 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  
<?php 
if ($status == "yes"){ //if there is a user logged in
if ($user == "Admin"){ //if the user is an admin
  echo "<a href='index.php' class='w3-bar-item w3-button'>" . "<i class='fa fa-home w3-margin-right'>" . "</i>" . "News" . "</a>";
  echo "<a href='complaintlist.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal w3-white'>" . "Forms" . "</a>";
  echo "<a href='about.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal'>" . "About" . "</a>";
  echo "<a href='contact.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal'>" . "Contact". "</a>";
  echo "<a href='logout.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal' title='Search'>" . "Logout" . "</a>";
  echo "<a href='user.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal' title='Search'>" . "Profile" . "</a>";
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
  echo "<a href='complaintform.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal w3-white'>" . "Forms" . "</a>";
  echo "<a href='about.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal'>" . "About" . "</a>";
  echo "<a href='contact.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal'>" . "Contact". "</a>";
  echo "<a href='logout.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal' title='Search'>" . "Logout" . "</a>";
  echo "<a href='user.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal' title='Search'>" . "Profile" . "</a>";

  
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
  echo "<a href='index.php' class='w3-bar-item w3-button'>" . "<i class='fa fa-home w3-margin-right'>" . "</i>" . "News" . "</a>";
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



  </div>

  </div>
</div>
    <!-- DISPLAY LIST OF CITIZEN USERS -->

        <div class="res_form">
            <div class="title">
                Complaint List
            </div>

            <div class="form">
                <table>

                <tr>
                <td>Complaint ID</td>
                <td>User ID</td>
                <td>First Name</td>
                <td>Middle Name</td>
                <td>Last Name</td>
                <td>Street Address</td>
                <td>Subject</td>
                <td>Details</td>
                <td><strong>Resolve</strong></td>
                <td><strong>Reject</strong></td>
                </tr>

                <?php
                // $db_name = "id20240982_deliverydb";
                // $db_username = "id20240982_root";
                // $db_pass = "1CvH@Re<xZdVqACG";
                // $db_host = "localhost";
                // $con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_error()); //Connect to server
                $query = "SELECT * from complaint where status = 'Unresolved'"; //filter display to citizen account types only
                $results = mysqli_query($con, $query); //Query the users table


                while($row = mysqli_fetch_array($results)){ //list all of citizen type users ?>
                <tr>
                <td><?php echo $row["complaint_id"]; ?></td>
                <td><?php echo $row["user_id"]; ?></td>
                <td><?php echo $row["first_name"]; ?></td>
                <td><?php echo $row["middle_name"]; ?></td>
                <td><?php echo $row["last_name"]; ?></td>
                <td><?php echo $row["street_add"]; ?></td>
                <td><?php echo $row["subject"]; ?></td>
                <td><?php echo $row["details"]; ?></td>
                <td><a href="resolve.php? id=<?php echo $row["complaint_id"]; ?>">Resolve</a></td> <!-- RESOLVE THE COMPLAINT -->
                <td><a href="reject.php? id=<?php echo $row["complaint_id"]; ?>">Reject</a></td> <!-- REJECT THE COMPLAINT -->
                </tr>

                <?php 
                } ?>

                </table>
            </div>
        </div>
		</div>
		<div class="footer1">
		<footer class="w3-container text-center w3-theme-d5 w3-bottom">
	<br />
	<table style="margin-left: 8%; width:110%; border:none;">
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
	</div>
    </body>
</html>
<style>

        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        body{
        background: #00685d;
        }
        
        .res_form{
        max-width: 1200px;
        width: 100%;
        background: #fff;
        margin: 50px auto;
        box-shadow: 2px 2px 4px rgba(0,0,0,0.125);
        padding: 30px;
        }

        .res_form .title{
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 25px;
        color: #00685d;
        text-transform: uppercase;
        text-align: center;
        }

        .res_form .form{
        width: 100%;
        }

        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 0px solid #dddddd;
        text-align: justify;
        padding: 10px;
        overflow-y: auto;    /* Trigger vertical scroll    */
        overflow-x: hidden;  /* Hide the horizontal scroll */

        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
		
    </style>
