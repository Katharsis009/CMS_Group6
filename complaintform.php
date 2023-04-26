<?php error_reporting(E_ERROR | E_PARSE);
session_start(); //starts the session
if($_SESSION['loginid'] != ""){ //checks if user is logged in
$loginId = $_SESSION['loginid'];
$status = "yes";
}

else{
$status = "no";
header("location:login.php"); // redirects if user is not logged in
}

?>


<!-- 00685d -->


<html>

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href ="LogoW.png" type = "image/x-icon"> <!-- BROWSER TAB ICON -->
        <title> Complaint Form </title>
    </head>

    <body id="myPage">
	<?php
  include('dbcon.php');
  
  error_reporting(E_ERROR | E_PARSE);
	session_start(); //start the session
	// //database details
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

         <!-- COMPLAINT FORM -->
        <form action = "complaintform.php" id = "complaint" method="POST"> <!-- START OF FORM -->
            <div class="wrapper">
                <div class="title">
                Complaint Form
                </div>

                <div class="form">
                    <div class="inputfield">
                        <label>Enter Subject</label>
                        <input type="text" class="input" name="subject" required="required" placeholder="Subject">
                    </div>  
        
                    <div class="inputfield">
                        <label>Enter Statement</label>
                        <textarea class="textarea" name="details" form="complaint"></textarea>
                    </div> 
        
                    <div class="inputfield">
                        <input type="submit" name="rSubmit" value="Submit" class="btn">
                    </div>
                </div>
            </div>
        </form>


        <!-- Start of PHP--> 
        <?php error_reporting(E_ERROR | E_PARSE);
        session_start(); //session start
        if (!empty($_POST["subject"]) || !empty($_POST["details"])){ //function works if fields are not empty
        doRegister($con); //function to start
        }


        function doRegister($con){ //start of register function
        $cSubject = $_POST['subject']; //variable for taken username
        $cDetails = $_POST['details']; //variable for taken password
        $loginId = $_SESSION['loginid'];
        $cResolve = "Unresolved";


        //database details
        $bool = true;
        // $db_name = "id20240982_deliverydb"; //DATABASE NAME FOR THE PROJECT
        // $db_username = "id20240982_root";
        // $db_pass = "1CvH@Re<xZdVqACG";
        // $db_host = "localhost";
        // $con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_error()); //connect to server
        $queryuser = "SELECT * from user"; //select all from user table 
        $resultsuser = mysqli_query($con, $queryuser); //query the user table

        //check for duplicate usernames
        while($row = mysqli_fetch_array($resultsuser)){ //display all rows from query 
        $table_loginid = $row['login_id']; // the first username row is passed on to $table_users, and so on until the query is finished
        $table_firstname = $row['first_name']; 
        $table_middlename = $row['middle_name']; 
        $table_lastname = $row['last_name']; 
        $table_userid = $row['user_id']; 
        $table_streetadd = $row['street_add']; 

        if($loginId == $table_loginid){ // checks for user
        mysqli_query($con, "INSERT INTO complaint (user_id, subject, details, first_name, middle_name, last_name, street_add, status) VALUES('$table_userid','$cSubject', '$cDetails', '$table_firstname', '$table_middlename', '$table_lastname', '$table_streetadd', '$cResolve')"); //inserts the value to table complaint
        Print '<script>alert("Complaint has been sent!");</script>'; //prompts the user if successful
        }

        }

        }//end of register function
        ?>


        <!-- RESOLUTION -->

        <form action = "complaintform.php" id = "complaint" method="POST"> <!-- START OF FORM -->
            <div class="res_wrapper">
                <div class="title">
                Resolution
                </div>

                <div class="form ">
                <table>
                    <tr>
                        <td>Complaint ID</td>
                        <td>Resolve ID</td>
                        <td>Admin ID</td>
                        <td>Subject</td>
                        <td>Response</td>
                    </tr>

                        <?php
                        // $db_name = "id20240982_deliverydb";
                        // $db_username = "id20240982_root";
                        // $db_pass = "1CvH@Re<xZdVqACG";
                        // $db_host = "localhost";
                        // $con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_error()); //Connect to server
                        $query = "SELECT * from complaint where status = 'Resolved'"; //filter display to resolved cases only
                        $queryuser = "SELECT * from user"; //filter display to resolved cases only
                        $results = mysqli_query($con, $query); //Query the users table
                        $resultsuser = mysqli_query($con, $queryuser); //Query the users table

                        while($rowuser = mysqli_fetch_array($resultsuser)){
                        $useridlist = $rowuser['user_id'];
                        $loginidlist = $rowuser['login_id'];

                        if ($loginidlist == $_SESSION['loginid']){
                        $_SESSION['userid'] = $useridlist;
                        }

                        while($row = mysqli_fetch_array($results)){
                        $complaintid = $row['complaint_id']; 
                        $userid = $row['user_id']; 


                        if ($userid == $_SESSION['userid']){
                        $queryresolve = "SELECT * from resolve where complaint_id = '".$complaintid."'"; //filter display to resolved cases only
                        $resultsresolve = mysqli_query($con, $queryresolve); //Query the users table

                                                    
                        while($rowresults = mysqli_fetch_array($resultsresolve)){ //list all of citizen type users ?>
                        <tr>
                        <td><?php echo $rowresults["complaint_id"]; ?></td>
                        <td><?php echo $rowresults["resolve_id"]; ?></td>
                        <td><?php echo $rowresults["admin_id"]; ?></td>
                        <td><?php echo $rowresults["subject"]; ?></td>
                        <td><?php echo $rowresults["resolution"]; ?></td>
                        </tr>

                        <?php 
                        } 

                        }

                        } 

                        }
                        ?>
                        <!-- End of PHP--> 
						
                    </table>    
                </div>
            </div>
        </form>
		
		
	<footer class="w3-container text-center w3-theme-d5">
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

        .wrapper{
        max-width: 750px;
        width: 100%;
        background: #fff;
        margin: 50px auto;
        box-shadow: 2px 2px 4px rgba(0,0,0,0.125);
        padding: 30px;
        }

        .wrapper .title{
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 25px;
        color: #00685d;
        text-transform: uppercase;
        text-align: center;
        }

        .wrapper .form{
        width: 100%;
        }

        .wrapper .form .inputfield{
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        }

        .wrapper .form .inputfield label{
        width: 200px;
        color: #757575;
        margin-right: 10px;
        font-size: 14px;
        }


        /* text area and subject area */
        .wrapper .form .inputfield .input,
        .wrapper .form .inputfield .textarea{
        width: 100%;
        outline: none;
        border: 1px solid #d5dbd9;
        font-size: 15px;
        padding: 8px 10px;
        border-radius: 3px;
        transition: all 0.3s ease;
        }

        /* text area only */
        .wrapper .form .inputfield .textarea{
        width: 100%;
        height: 425px;
        resize: none;
        }

        /* complaint type size & position */
        .wrapper .form .inputfield .custom_select{
        position: relative;
        width: 100%;
        height: 37px;
        }

        /* select */
        .wrapper .form .inputfield .custom_select select{
        -webkit-appearance: none;
        -moz-appearance:   none;
        appearance:        none;
        outline: none;
        width: 100%;
        height: 100%;
        border: 0px;
        padding: 8px 10px;
        font-size: 15px;
        border: 1px solid #d5dbd9;
        border-radius: 3px;
        }

        /* button designs */
        .wrapper .form .inputfield .btn{
        width: 100%;
        padding: 8px 10px;
        font-size: 15px; 
        border: 0px;
        background:  #FFC900;
        color: #fff;
        cursor: pointer;
        border-radius: 3px;
        outline: none;
        }

        .wrapper .form .inputfield .btn:hover{
        background: #ffd658;
        }



        /**** RESOLUTION *****/

        .res_wrapper{
        max-width: 1200px;
        width: 100%;
        background: #fff;
        margin: 50px auto;
        box-shadow: 2px 2px 4px rgba(0,0,0,0.125);
        padding: 30px;
        }

        .res_wrapper .title{
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 25px;
        color: #00685d;
        text-transform: uppercase;
        text-align: center;
        }

        .res_wrapper .form{
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